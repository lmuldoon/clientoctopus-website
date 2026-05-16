<?php

/**
 * Changelog page.
 */

global $meta;

$meta->title = 'Changelog — Client Octopus';
$meta->description = 'Client Octopus changelog — track new features, improvements, and bug fixes across all releases of the WordPress plugin.';$meta->slug = 'changelog';

get_header();

?>

<article>

	<div class="sections-header section section--gradient">
		<div class="container">
			<div class="animated-up">
				<h1 class="text-white">Changelog</h1>
				<p style="color: rgba(255,255,255,0.75);">Version history and release notes for Client Octopus.</p>
			</div>
		</div>
	</div>

	<div class="section section-changelog">
		<div class="container small-text-container">
			<div class="changelog-entry animated-up">
				<div class="changelog-entry__header">
					<h2 class="changelog-entry__version">1.0.0</h2>
					<span class="changelog-entry__date">May 2026</span>
					<span class="badge badge--release">Initial Release</span>
				</div>
				<div class="stack changelog-entry__body">
					<p>First public release of Client Octopus — the client OS for WordPress freelancers.</p>

					<h3>Features</h3>
					<ul>
						<li>Proposal builder with reusable section library, line-item pricing, and e-signature</li>
						<li>Stripe integration — deposits on signature, milestones, recurring retainers</li>
						<li>White-labelled client portal hosted on your own domain</li>
						<li>Task lists with client approvals and threaded messaging</li>
						<li>1 GB file uploads per project (Agency tier)</li>
						<li>Client database — capture details once, reuse across projects</li>
						<li>AI proposal drafting and thread summarisation (optional, off by default)</li>
						<li>Auto-reminders for overdue invoices</li>
						<li>VAT-compliant invoice templates for EU and UK</li>
						<li>Per-client currency, language, and tax rate settings</li>
						<li>CSV importers for clients, projects, and invoices</li>
						<li>Migration guides for Dubsado, HoneyBook, FreshBooks, and QuickBooks</li>
						<li>Elementor, Divi, Bricks, and ACF compatibility</li>
						<li>Free plan: 3 proposals/month, 1 seat, no Stripe or portal</li>
						<li>Pro plan: unlimited proposals, Stripe, view-only portal, 100 AI requests/month</li>
						<li>Agency plan: 5 team seats, full portal, projects, messaging, 500 AI requests/month</li>
					</ul>
				</div>
			</div>

		</div>
	</div>

</article>

<?php get_footer(); ?>