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
					<h2 class="changelog-entry__version">1.1.1</h2>
					<span class="changelog-entry__date">August 2026</span>
					<span class="badge badge--release">Update</span>
				</div>
				<div class="stack changelog-entry__body">
					<h3>New</h3>
					<ul>
						<li>Client portal Invoices tab — authenticated clients can view all their sent, paid, and overdue invoices with status badges, amounts, and a direct link to the invoice page</li>
						<li>Invoice payments in portal Payment History — paid invoices now appear in a dedicated Invoice Payments table alongside proposal payments</li>
					</ul>

					<h3>Fixes</h3>
					<ul>
						<li>Invoice status not updating after Stripe payment — the invoice success page now triggers the paid status write-through immediately on return from Stripe Checkout</li>
						<li>Invoice client name showing as "—" in the admin invoices list — the query now joins the clients table correctly</li>
						<li>Re-send option for sent and overdue invoices — invoices can now be re-sent without being restricted to draft status only</li>
					</ul>
				</div>
			</div>

			<div class="changelog-entry animated-up">
				<div class="changelog-entry__header">
					<h2 class="changelog-entry__version">1.1.0</h2>
					<span class="changelog-entry__date">August 2026</span>
					<span class="badge badge--release">New Feature</span>
				</div>
				<div class="stack changelog-entry__body">
					<h3>New</h3>
					<ul>
						<li>Standalone invoices — create auto-numbered invoices (INV-0001…), assign clients, add line items, discounts, and VAT, then send to clients via email. Client-facing invoice page supports browser printing to a clean A4 layout</li>
						<li>Stripe "Pay Now" button on client-facing invoices (Pro) — Stripe Checkout is created on demand; invoice auto-marks as paid via webhook</li>
						<li>E-signature on proposal acceptance — clients type their full legal name and confirm a checkbox in a signing modal; the signed certificate is recorded on the proposal and visible in the admin</li>
						<li>Automated proposal reminder emails — three configurable triggers: proposal not viewed, not accepted, and expiring soon. Cron-based, runs daily</li>
						<li>Expanded outbound webhook events — 12+ events now covering the full proposal and invoice lifecycle, including invoice.sent, invoice.paid, invoice.overdue, and invoice.cancelled</li>
					</ul>
				</div>
			</div>

			<div class="changelog-entry animated-up">
				<div class="changelog-entry__header">
					<h2 class="changelog-entry__version">1.0.1</h2>
					<span class="changelog-entry__date">July 2026</span>
					<span class="badge badge--release">Bug Fix</span>
				</div>
				<div class="stack changelog-entry__body">
					<h3>Fixes</h3>
					<ul>
						<li>Onboarding wizard failed on servers that redirect URLs to add a trailing slash, causing POST requests to be converted to GET requests</li>
					</ul>
				</div>
			</div>

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
						<li>Free plan: unlimited proposals, 1 seat, no Stripe or portal</li>
						<li>Pro plan: unlimited proposals, Stripe, view-only portal, 100 AI requests/month</li>
						<li>Agency plan: 5 team seats, full portal, projects, messaging, 500 AI requests/month</li>
					</ul>
				</div>
			</div>

		</div>
	</div>

</article>

<?php get_footer(); ?>