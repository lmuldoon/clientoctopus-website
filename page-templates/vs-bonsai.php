<?php

/**
 * Client Octopus vs Bonsai — comparison page.
 */

global $meta;

$meta->title = 'Client Octopus vs Bonsai — Comparison — Client Octopus';
$meta->description = 'How Client Octopus compares to Bonsai (Hello Bonsai) on pricing, features, and hosting — see which fits your freelance workflow better.';
$meta->slug = 'vs-bonsai';

get_header();

?>

<article>

	<div class="sections-header section section--gradient">
		<div class="container">
			<div class="animated-up">
				<h1 class="text-white">Client Octopus vs Bonsai</h1>
				<p style="color: rgba(255,255,255,0.75);">A mature all-in-one freelance platform versus a WordPress plugin with a genuinely free tier.</p>
			</div>
		</div>
	</div>

	<div class="section">
		<div class="container small-text-container animated-up">
			<p class="section-lede">The short version: Bonsai bundles proposals, contracts, invoicing, time tracking, and a client portal into one subscription — but there's no permanent free plan, just a 7-day trial, and the features most freelancers actually want (proposals, invoicing, the client portal) sit behind its Essentials tier, not the cheapest one. Client Octopus is a WordPress plugin with a genuinely free plan covering unlimited proposals and invoices, and adds the client portal and payments from a flat $9.99/month. If you don't run WordPress, Bonsai's all-in-one approach is the more natural fit. If you do, Client Octopus keeps the same workflow inside the site you already have.</p>
		</div>
	</div>

	<!-- ─── AT A GLANCE ─────────────────────────────────────────────── -->

	<section class="section section--replaces bg-stone">
		<div class="container animated-up">
			<p class="section-eyebrow">At a glance</p>
			<h2 class="section-heading">Where they differ most</h2>

			<div class="card-grid">
				<div class="card card--before">
					<span class="card__title">Bonsai</span>
					<ul class="card-list">
						<li><iconify-icon class="card-list__icon card-list__icon--no" icon="lucide:x" width="14" height="14"></iconify-icon><span>Hosted SaaS — separate login, separate dashboard</span></li>
						<li><iconify-icon class="card-list__icon card-list__icon--no" icon="lucide:x" width="14" height="14"></iconify-icon><span>7-day free trial only, no permanent free plan</span></li>
						<li><iconify-icon class="card-list__icon card-list__icon--no" icon="lucide:x" width="14" height="14"></iconify-icon><span>Proposals, invoicing, and the client portal require Essentials ($19&ndash;25/mo), not the entry Basic tier</span></li>
						<li><iconify-icon class="card-list__icon card-list__icon--no" icon="lucide:x" width="14" height="14"></iconify-icon><span>Removing Bonsai's own branding requires the Premium tier ($29&ndash;39/mo)</span></li>
						<li><iconify-icon class="card-list__icon card-list__icon--no" icon="lucide:x" width="14" height="14"></iconify-icon><span>Elite tier has a 3-user minimum</span></li>
					</ul>
				</div>

				<div class="card card--after">
					<span class="card__title card__title--after">Client Octopus</span>
					<ul class="card-list">
						<li><iconify-icon class="card-list__icon card-list__icon--yes" icon="lucide:check" width="14" height="14"></iconify-icon><span>Runs inside the WordPress site you already own</span></li>
						<li><iconify-icon class="card-list__icon card-list__icon--yes" icon="lucide:check" width="14" height="14"></iconify-icon><span>Free plan with unlimited proposals, invoices, and leads</span></li>
						<li><iconify-icon class="card-list__icon card-list__icon--yes" icon="lucide:check" width="14" height="14"></iconify-icon><span>Pro from $9.99/mo &mdash; includes the client portal and payments</span></li>
						<li><iconify-icon class="card-list__icon card-list__icon--yes" icon="lucide:check" width="14" height="14"></iconify-icon><span>No branding fee &mdash; our own credit is off by default on every plan</span></li>
						<li><iconify-icon class="card-list__icon card-list__icon--yes" icon="lucide:check" width="14" height="14"></iconify-icon><span>No minimum team size on any plan</span></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- ─── DETAILED COMPARISON ─────────────────────────────────────── -->

	<section class="section section--feature">
		<div class="container animated-up">
			<p class="section-eyebrow">Feature by feature</p>
			<h2 class="section-heading">The detailed comparison</h2>

			<h3 class="section-subheading">Pricing</h3>
			<p class="section-lede">Bonsai's cheapest tier, Basic ($9&ndash;15/month), covers time tracking and a CRM but not proposals, invoicing, or the client portal — those need Essentials ($19&ndash;25/month). Client Octopus's free plan already includes unlimited proposals and invoices, and Pro ($9.99/month) adds the client portal and payments &mdash; roughly the same price as Bonsai's entry tier, but with more included.</p>

			<h3 class="section-subheading">Hosting and data</h3>
			<p class="section-lede">Bonsai is a hosted SaaS platform — your proposals, contracts, and client records live on Bonsai's servers, accessed through a separate login. Client Octopus is a WordPress plugin: everything lives in your own WordPress database, on the site you already run.</p>

			<h3 class="section-subheading">Time tracking</h3>
			<p class="section-lede">Time tracking is one of Bonsai's best-known features, included from its cheapest tier. Client Octopus added time tracking in late 2026 (Pro and Agency) — start a timer from the WordPress toolbar or log time manually, assign it to a client, and bill it onto an invoice with automatic quantity-and-rate line items. Newer than Bonsai's, but built to the same end: turning tracked hours into an invoice without re-entering them.</p>

			<h3 class="section-subheading">Branding</h3>
			<p class="section-lede">Bonsai shows its own branding to your clients until you reach the Premium tier ($29&ndash;39/month). Client Octopus's equivalent credit is off by default on every plan, including Free — you only see it if you deliberately opt in under Settings &rarr; Branding.</p>

			<h3 class="section-subheading">Feature comparison</h3>
			<table class="docs-comparison-table">
				<thead>
					<tr>
						<th>&nbsp;</th>
						<th>Bonsai</th>
						<th>Client Octopus</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Starting price</td>
						<td>$9&ndash;15/mo (Basic)</td>
						<td>Free</td>
					</tr>
					<tr>
						<td>Permanent free plan</td>
						<td>&mdash; (7-day trial)</td>
						<td>&#10003;</td>
					</tr>
					<tr>
						<td>Runs inside WordPress</td>
						<td>&mdash;</td>
						<td>&#10003;</td>
					</tr>
					<tr>
						<td>Proposals &amp; contracts</td>
						<td>Essentials tier ($19&ndash;25/mo)</td>
						<td>&#10003; (all plans)</td>
					</tr>
					<tr>
						<td>Invoicing &amp; payments</td>
						<td>Essentials tier ($19&ndash;25/mo)</td>
						<td>&#10003; (all plans; payments on Pro/Agency)</td>
					</tr>
					<tr>
						<td>Time tracking</td>
						<td>&#10003; (all plans)</td>
						<td>Pro/Agency</td>
					</tr>
					<tr>
						<td>Client portal</td>
						<td>Essentials tier ($19&ndash;25/mo)</td>
						<td>Pro/Agency</td>
					</tr>
					<tr>
						<td>Branding removed</td>
						<td>Premium tier ($29&ndash;39/mo)</td>
						<td>&#10003; (off by default, every plan)</td>
					</tr>
					<tr>
						<td>Team seats included</td>
						<td>1 (Elite requires 3+ users)</td>
						<td>10 (Agency)</td>
					</tr>
				</tbody>
			</table>

			<p class="section-lede" style="font-size: var(--size-300); color: var(--color-slate-600); margin-top: 1rem;">Pricing and features verified against <a href="https://www.hellobonsai.com/pricing" target="_blank" rel="noopener noreferrer">Bonsai's pricing page</a> in November 2026. Third-party reviews disagree on some tier details, so double-check current pricing before deciding.</p>
		</div>
	</section>

	<!-- ─── WHO IT'S FOR ────────────────────────────────────────────── -->

	<section class="section section--feature bg-stone">
		<div class="container animated-up">
			<p class="section-eyebrow">Who each is best for</p>
			<h2 class="section-heading">Be honest with yourself about which fits</h2>

			<h3 class="section-subheading">Choose Client Octopus if&hellip;</h3>
			<p class="section-lede">You already run a WordPress site and want proposals, invoicing, and a client portal without paying extra to remove vendor branding, or you want to properly trial the core workflow for free with no 7-day clock running out.</p>

			<h3 class="section-subheading">Choose Bonsai if&hellip;</h3>
			<p class="section-lede">You don't run WordPress at all, or you specifically want Bonsai's mature, deeply developed time-tracking-to-invoice flow and CRM features across a wider range of business types than just WordPress-based ones.</p>

			<div class="docs-callout docs-callout--info" style="margin-top: 2rem; text-align: left; display: none;">
				<p>Client Octopus is early — we don't have switcher stories to share yet. Check back here as our first users start sharing feedback.</p>
			</div>
		</div>
	</section>

	<!-- ─── MIGRATION ───────────────────────────────────────────────── -->

	<section class="section section--feature">
		<div class="container animated-up">
			<p class="section-eyebrow">Switching over</p>
			<h2 class="section-heading">Moving from Bonsai</h2>
			<p class="section-lede">Export your client list from Bonsai (check Bonsai's own help docs for the current export path, since this has changed before) and bring it into Client Octopus using the CSV importer — map the columns yourself, including split First/Last Name fields, preview the results, and bulk-create your client records. Active proposals, contracts, and invoices are rebuilt using Client Octopus's own builders — see the <a href="/docs">documentation</a> for a full walkthrough of each.</p>
			<p class="section-lede">If you get stuck partway through, reply to any Client Octopus email or reach out via the contact link in the footer and it'll get to a real person, not a support queue.</p>
		</div>
	</section>

	<!-- ─── FAQ ─────────────────────────────────────────────────────── -->

	<section class="section section--faq menu-section bg-stone" id="faq">
		<div class="container animated-up">

			<p class="section-eyebrow">FAQ</p>
			<h2 class="section-heading">Common questions</h2>

			<div class="faq-layout">
				<div class="accordions-wrapper">

					<div class="accordion">
						<div class="js-accordion-trigger">
							<h3 class="section-subheading">Is Client Octopus really free, or is that just a trial?</h3>
						</div>
						<div class="accordion-content">
							<p class="section-lede">It's a real free plan, not a trial — unlimited proposals and invoices with no time limit, unlike Bonsai's 7-day trial. Upgrade to Pro or Agency only when you need the client portal, payments, time tracking, or team features.</p>
						</div>
					</div>

					<div class="accordion">
						<div class="js-accordion-trigger">
							<h3 class="section-subheading">Do I need to already have a WordPress site to use Client Octopus?</h3>
						</div>
						<div class="accordion-content">
							<p class="section-lede">Yes — Client Octopus is a WordPress plugin, so it installs into an existing WordPress site. If you don't run WordPress and don't plan to, a standalone platform like Bonsai will fit more naturally.</p>
						</div>
					</div>

					<div class="accordion">
						<div class="js-accordion-trigger">
							<h3 class="section-subheading">Can I import my existing Bonsai clients and projects?</h3>
						</div>
						<div class="accordion-content">
							<p class="section-lede">There's no one-click import today. Clients transfer over quickly through the CSV importer, and active proposals, contracts, or invoices are rebuilt using Client Octopus's own builders — most people find this is also a good moment to tidy up stale or duplicate records.</p>
						</div>
					</div>

				</div>
			</div>

		</div>
	</section>

	<!-- ─── CTA ─────────────────────────────────────────────────────── -->

	<section class="section section--cta-strip bg-lightindigo">
		<div class="container animated-up">
			<h2>Try Client Octopus free</h2>
			<p class="section-lede">No trial clock — the free plan runs indefinitely, so you can see how it fits your workflow before you decide anything.</p>
			<div class="cta-strip__actions">
				<a class="button button--primary plan-button" data-plan-id="48154" href="#">Get Client Octopus free</a>
				<a class="button button--ghost" href="/alternatives">See other comparisons</a>
			</div>
		</div>
	</section>

	<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "FAQPage",
		"mainEntity": [
			{
				"@type": "Question",
				"name": "Is Client Octopus really free, or is that just a trial?",
				"acceptedAnswer": {
					"@type": "Answer",
					"text": "It's a real free plan, not a trial — unlimited proposals and invoices with no time limit, unlike Bonsai's 7-day trial. Upgrade to Pro or Agency only when you need the client portal, payments, time tracking, or team features."
				}
			},
			{
				"@type": "Question",
				"name": "Do I need to already have a WordPress site to use Client Octopus?",
				"acceptedAnswer": {
					"@type": "Answer",
					"text": "Yes — Client Octopus is a WordPress plugin, so it installs into an existing WordPress site. If you don't run WordPress and don't plan to, a standalone platform like Bonsai will fit more naturally."
				}
			},
			{
				"@type": "Question",
				"name": "Can I import my existing Bonsai clients and projects?",
				"acceptedAnswer": {
					"@type": "Answer",
					"text": "There's no one-click import today. Clients transfer over quickly through the CSV importer, and active proposals, contracts, or invoices are rebuilt using Client Octopus's own builders — most people find this is also a good moment to tidy up stale or duplicate records."
				}
			}
		]
	}
	</script>

</article>

<?php get_footer(); ?>
