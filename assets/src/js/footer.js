import {
	debounce,
	throttle
} from "./scripts/__event-utilities";
import 'iconify-icon';

import {
	HeaderStateController
} from './scripts/header-collapse';
HeaderStateController.init();

import { initCheckout } from './scripts/checkout';
initCheckout();

import './scripts/_class-viewportScroll';

import {
	MenuController
} from './scripts/nav-toggle';
MenuController.init();

import {
	initAnimations,
} from './scripts/animations';
initAnimations();

require('./scripts/accordian-controller');
import './scripts/lazyload-frame';

import GLightbox from 'glightbox';

const galleryLightbox = GLightbox({
	selector: '.glightbox-gallery',
	openEffect: 'fade',
	closeEffect: 'fade',
	slideEffect: 'fade',
	dragable: false,
	loop: true,
	touchNavigation: false,
	zoomable: true,
});

const inlineLightbox = GLightbox({
	selector: '.glightbox-inline',
	loop: false,
	closeButton: true,
	touchNavigation: false,
	dragable: false,
	openEffect: 'fade',
	closeEffect: 'fade',
	slideEffect: 'fade',
	width: '1000px',
});

// AOS Animations
import AOS from 'aos';

let $siteHeader = $('.site-header');

jQuery(document).ready(() => {
	AOS.init({
		offset: 100,
		delay: 75,
		duration: 900,
		once: true,
	});

	storeHeaderHeight();
});

function storeHeaderHeight() {
	$('body').css('--header-height', $siteHeader.outerHeight(false));
}

$(window).on('resize', debounce(function () {
	storeHeaderHeight();
}, 150));

$(window).on('scroll', debounce(function () {
	storeHeaderHeight();
}, 100));


// ─── PIPELINE STEPPER ────────────────────────────────────────────────────────

(function () {
	const steps = document.querySelectorAll('.pipeline-step');
	const panels = document.querySelectorAll('.pipeline-panel');

	if (!steps.length || !panels.length) return;

	function setStage(index) {
		// Update active step
		steps.forEach((step, i) => {
			step.classList.toggle('is-active', i === index);
		});

		// Show correct panel
		panels.forEach((panel, i) => {
			panel.classList.toggle('is-active', i === index);
		});
	}

	steps.forEach((step, i) => {
		step.addEventListener('click', () => {
			setStage(i);
		});
	});

	// Set initial state
	setStage(0);
})();


// ─── SMOOTH SCROLL (anchor links) ────────────────────────────────────────────

(function ($) {
	$('a[href*="#"]')
		.not('[href="#"]')
		.not('[href="#0"]')
		.not('[role="tab"]')
		.not('.glightbox-inline')
		.on('click', function (event) {
			if (
				location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') &&
				location.hostname === this.hostname
			) {
				let target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				if (!target.length) return;

				event.preventDefault();

				const $header = $('.js-site-header');
				$header.addClass('is-measuring');
				$header.attr('data-state', 'collapsed');
				void $header[0].offsetHeight;
				const headerHeight = Math.ceil($header.outerHeight(true));
				$header.removeClass('is-measuring');

				$('html, body').animate({
					scrollTop: target.offset().top - headerHeight + 1
				}, 400, function () {
					const heading = $(target[0]).find('h2').get(0);
					if (!heading) return;
					heading.focus({ preventScroll: true });
					if (heading !== document.activeElement) {
						heading.setAttribute('tabindex', '-1');
						heading.focus({ preventScroll: true });
					}
				});
			}
		});
})(jQuery);


// ─── DOCS SIDEBAR SCROLL SPY ─────────────────────────────────────────────────

(function ($) {
	const $navLinks = $('.docs-nav__link');
	if (!$navLinks.length) return;

	const $sections = $('.docs-section');
	const $header = $('.site-header');

	function updateDocsNav() {
		const headerHeight = $header.outerHeight();
		const scrollPosition = $(window).scrollTop() + headerHeight + 32;
		let currentSection = null;

		$sections.each(function () {
			if ($(this).offset().top <= scrollPosition) {
				currentSection = $(this);
			}
		});

		if (!currentSection) return;

		const sectionId = currentSection.attr('id');
		$navLinks.removeClass('is-active');
		$('.docs-nav__link[href="#' + sectionId + '"]').addClass('is-active');
	}

	$(window).on('load scroll', updateDocsNav);
})(jQuery);


// ─── ACTIVE NAV TRACKING ─────────────────────────────────────────────────────

(function ($) {
	const $sections = $('.menu-section');
	const $header = $('.site-header');
	const $nav = $('.site-menu li a');

	function updateActiveNav() {
		const headerHeight = $header.outerHeight();
		const scrollPosition = $(window).scrollTop() + headerHeight + 5;
		let currentSection = null;

		$sections.each(function () {
			if ($(this).offset().top <= scrollPosition) {
				currentSection = $(this);
			}
		});

		if (!currentSection) {
			$nav.removeClass('is-current');
			return;
		}

		const sectionId = currentSection.attr('id');
		$nav.removeClass('is-current');
		$('.site-menu li a[href*="' + sectionId + '"]').addClass('is-current');
	}

	$(window).on('load scroll', updateActiveNav);
})(jQuery);
