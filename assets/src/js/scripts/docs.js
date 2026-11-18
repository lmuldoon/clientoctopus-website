// Docs page: one section shown at a time (picked by the URL hash), header search,
// copy buttons on code blocks, "On this page" rail.

const sections = Array.from(document.querySelectorAll('.docs-section'));
const content = document.querySelector('.docs-content');
const layout = document.querySelector('.docs-layout');
const navLinks = Array.from(document.querySelectorAll('.docs-nav__link'));
const jump = document.getElementById('js-docs-jump');
let currentSection = null;
let onSectionChange = () => {};

function slugify(text) {
	return text.toLowerCase().replace(/&/g, 'and').replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)/g, '');
}

// Heading text without any plan badges inside it.
function headingText(heading) {
	const clone = heading.cloneNode(true);
	clone.querySelectorAll('.badge').forEach((badge) => badge.remove());
	return clone.textContent.trim();
}

function headerOffset() {
	const header = document.querySelector('.site-header');
	return (header ? header.offsetHeight : 80) + 32;
}

// Give every subheading an id so search results and the rail can link to it.
const subheadings = new Map();
sections.forEach((section) => {
	const list = [];
	section.querySelectorAll('h3').forEach((h3) => {
		if (!h3.id) {
			h3.id = `${section.id}--${slugify(headingText(h3))}`;
		}
		list.push(h3);
	});
	subheadings.set(section, list);
});

// ─── ONE SECTION AT A TIME ───────────────────────────────────────────────────

function targetFor(hash) {
	if (!hash || hash.length < 2) return null;
	const el = document.getElementById(decodeURIComponent(hash.slice(1)));
	return el && el.closest('.docs-section') ? el : null;
}

function scrollToEl(el) {
	window.scrollTo({ top: el.getBoundingClientRect().top + window.scrollY - headerOffset() + 16 });
}

const reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
const canAnimate = (el) => !reduceMotion && typeof el.animate === 'function';
let showRun = 0;

function show(hash, scroll = true) {
	const target = targetFor(hash);
	const section = target ? target.closest('.docs-section') : sections[0];
	const previous = currentSection;
	const run = ++showRun;

	navLinks.forEach((link) => {
		link.classList.toggle('is-active', link.hash === `#${section.id}`);
	});
	if (jump) jump.value = section.id;

	currentSection = section;
	onSectionChange(section);

	const changing = previous && previous !== section;

	const enter = () => {
		if (run !== showRun) return; // a newer click took over
		sections.forEach((s) => {
			s.hidden = s !== section;
		});
		if (section.getAnimations) {
			section.getAnimations().forEach((a) => a.cancel());
		}
		if (scroll) {
			scrollToEl(target && target !== section ? target : layout);
		}
		if (changing && canAnimate(section)) {
			section.animate(
				[{ opacity: 0, transform: 'translateY(16px)' }, { opacity: 1, transform: 'none' }],
				{ duration: 280, easing: 'cubic-bezier(0.22, 1, 0.36, 1)' }
			);
		}
	};

	if (changing && !previous.hidden && canAnimate(previous)) {
		const out = previous.animate(
			[{ opacity: 1, transform: 'none' }, { opacity: 0, transform: 'translateY(16px)' }],
			{ duration: 180, easing: 'ease-in', fill: 'forwards' }
		);
		out.onfinish = () => {
			enter();
			out.cancel(); // drop the faded-out state so the section looks normal next time it opens
		};
		return;
	}

	enter();
}

function navigate(hash) {
	if (location.hash !== hash) history.pushState(null, '', hash);
	show(hash);
}

function initSections() {
	content.classList.add('is-single');

	document.addEventListener('click', (event) => {
		if (event.defaultPrevented || event.button !== 0 || event.metaKey || event.ctrlKey || event.shiftKey) return;
		const link = event.target.closest('a[href^="#"]');
		if (!link || !targetFor(link.getAttribute('href'))) return;
		event.preventDefault();
		navigate(link.getAttribute('href'));
	});

	window.addEventListener('popstate', () => show(location.hash));

	if (jump) {
		jump.closest('.docs-jump').hidden = false;
		jump.addEventListener('change', () => navigate(`#${jump.value}`));
	}

	show(location.hash, Boolean(targetFor(location.hash)));
}

// ─── SEARCH ──────────────────────────────────────────────────────────────────

function buildIndex() {
	const index = [];

	sections.forEach((section) => {
		const h2 = section.querySelector('h2');
		if (!h2) return;
		const sectionTitle = headingText(h2);
		const crumbEl = section.querySelector('.docs-crumb');
		const group = crumbEl ? crumbEl.textContent.split('/')[0].trim() : '';

		index.push({
			title: sectionTitle,
			crumb: group,
			href: `#${section.id}`,
			titleText: sectionTitle.toLowerCase(),
			bodyText: section.textContent.toLowerCase(),
		});

		subheadings.get(section).forEach((h3) => {
			let body = '';
			let node = h3.nextElementSibling;
			while (node && !/^H[23]$/.test(node.tagName)) {
				body += ' ' + node.textContent;
				node = node.nextElementSibling;
			}
			const title = headingText(h3);
			index.push({
				title,
				crumb: `${group} / ${sectionTitle}`,
				href: `#${h3.id}`,
				titleText: `${title} ${sectionTitle}`.toLowerCase(),
				bodyText: body.toLowerCase(),
			});
		});
	});

	return index;
}

function initSearch() {
	const input = document.getElementById('js-docs-search');
	const results = document.getElementById('js-docs-search-results');
	if (!input || !results) return;

	const index = buildIndex();
	let matches = [];
	let highlighted = -1;

	function close() {
		results.hidden = true;
		input.setAttribute('aria-expanded', 'false');
		highlighted = -1;
	}

	function highlight(i) {
		const links = results.querySelectorAll('.docs-search__result');
		links.forEach((link, n) => link.classList.toggle('is-highlighted', n === i));
		highlighted = i;
		if (links[i]) links[i].scrollIntoView({ block: 'nearest' });
	}

	function go(href) {
		close();
		input.blur();
		navigate(href);
	}

	function render() {
		const terms = input.value.trim().toLowerCase().split(/\s+/).filter(Boolean);
		results.textContent = '';

		if (!terms.length) {
			close();
			return;
		}

		const inTitle = [];
		const inBody = [];
		index.forEach((entry) => {
			if (terms.every((t) => entry.titleText.includes(t))) {
				inTitle.push(entry);
			} else if (terms.every((t) => entry.titleText.includes(t) || entry.bodyText.includes(t))) {
				inBody.push(entry);
			}
		});
		matches = inTitle.concat(inBody).slice(0, 8);

		if (!matches.length) {
			const empty = document.createElement('li');
			empty.className = 'docs-search__empty';
			empty.textContent = 'No matches. Try another word.';
			results.appendChild(empty);
		}

		matches.forEach((entry) => {
			const li = document.createElement('li');
			const link = document.createElement('a');
			link.className = 'docs-search__result';
			link.href = entry.href;
			link.setAttribute('role', 'option');

			const title = document.createElement('span');
			title.className = 'docs-search__result-title';
			title.textContent = entry.title;

			const crumb = document.createElement('span');
			crumb.className = 'docs-search__result-crumb';
			crumb.textContent = entry.crumb;

			link.append(title, crumb);
			link.addEventListener('click', (event) => {
				event.preventDefault();
				go(entry.href);
			});
			li.appendChild(link);
			results.appendChild(li);
		});

		results.hidden = false;
		input.setAttribute('aria-expanded', 'true');
		highlighted = -1;
	}

	input.addEventListener('input', render);
	input.addEventListener('focus', () => {
		if (input.value.trim()) render();
	});

	input.addEventListener('keydown', (event) => {
		if (results.hidden) return;

		if (event.key === 'ArrowDown') {
			event.preventDefault();
			if (matches.length) highlight(Math.min(highlighted + 1, matches.length - 1));
		} else if (event.key === 'ArrowUp') {
			event.preventDefault();
			if (matches.length) highlight(Math.max(highlighted - 1, 0));
		} else if (event.key === 'Enter') {
			event.preventDefault();
			const entry = matches[highlighted >= 0 ? highlighted : 0];
			if (entry) go(entry.href);
		} else if (event.key === 'Escape') {
			close();
		}
	});

	document.addEventListener('click', (event) => {
		if (!event.target.closest('.docs-search')) close();
	});
}

// ─── COPY BUTTONS ────────────────────────────────────────────────────────────

function initCopyButtons() {
	document.querySelectorAll('.docs-code__copy').forEach((button) => {
		button.addEventListener('click', () => {
			const code = button.closest('.docs-code').querySelector('code');
			const text = code.textContent;

			const done = () => {
				button.textContent = 'Copied';
				setTimeout(() => {
					button.textContent = 'Copy';
				}, 1500);
			};

			if (navigator.clipboard && window.isSecureContext) {
				navigator.clipboard.writeText(text).then(done);
				return;
			}

			const range = document.createRange();
			range.selectNodeContents(code);
			const selection = window.getSelection();
			selection.removeAllRanges();
			selection.addRange(range);
			if (document.execCommand('copy')) done();
			selection.removeAllRanges();
		});
	});
}

// ─── ON THIS PAGE ────────────────────────────────────────────────────────────

function initToc() {
	const toc = document.getElementById('js-docs-toc');
	if (!toc) return;
	const list = toc.querySelector('.docs-toc__list');
	let ticking = false;

	onSectionChange = (section) => {
		const headings = subheadings.get(section) || [];
		list.textContent = '';
		toc.hidden = headings.length < 3;
		if (toc.hidden) return;

		headings.forEach((h3) => {
			const li = document.createElement('li');
			const link = document.createElement('a');
			link.href = `#${h3.id}`;
			link.textContent = headingText(h3);
			li.appendChild(link);
			list.appendChild(li);
		});
		update();
	};

	function update() {
		ticking = false;
		if (toc.hidden || !currentSection) return;

		const line = window.scrollY + headerOffset();
		const headings = subheadings.get(currentSection);
		let active = headings[0];
		headings.forEach((h3) => {
			if (h3.getBoundingClientRect().top + window.scrollY <= line + 8) active = h3;
		});
		list.querySelectorAll('a').forEach((link) => {
			link.classList.toggle('is-active', link.hash === `#${active.id}`);
		});
	}

	window.addEventListener('scroll', () => {
		if (!ticking) {
			ticking = true;
			requestAnimationFrame(update);
		}
	}, { passive: true });
}

if (sections.length && content && layout) {
	initToc();
	initSearch();
	initCopyButtons();
	initSections();
}
