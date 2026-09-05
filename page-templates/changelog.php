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
					<h2 class="changelog-entry__version">1.3.1</h2>
					<span class="changelog-entry__date">September 2026</span>
					<span class="badge badge--release">Update</span>
				</div>
				<div class="stack changelog-entry__body">
					<h3>New</h3>
					<ul>
						<li>Lead Capture — embed a <code>[clientoctopus_lead_form]</code> shortcode on any page to collect inquiries directly into Client Octopus instead of a separate form plugin. Choose which fields to show and require, customise labels, and add a consent line. Available on all plans</li>
						<li>Leads admin screen — view, filter by status, mark as contacted, archive, or convert a lead straight into a client record with one click</li>
						<li>A <code>lead.captured</code> webhook event for connecting new leads to your CRM, Zapier, or Slack (Pro &amp; Agency)</li>
						<li>Optional Cloudflare Turnstile CAPTCHA and configurable submission-rate limits to help prevent automated spam on the lead capture form</li>
						<li>Optional automatic reply email to anyone who submits the lead capture form, which can include a "Pick a Time to Talk" link to your Booking Page when Booking is enabled</li>
						<li>Call Booking (Pro &amp; Agency) — add the <code>[clientoctopus_booking_form]</code> shortcode to a page and let leads and clients book a call directly, based on your configured weekly availability, buffer time, minimum notice, and maximum booking window</li>
						<li>Bookings admin screen — view, search, and cancel booked calls</li>
						<li>Booking confirmation and 1-hour reminder emails, with a calendar invite (.ics) attachment and a one-click "Add to Google Calendar" link</li>
						<li>Calendar Sync (Pro &amp; Agency) — connect Google Calendar, Microsoft 365/Outlook, or Apple iCloud in Settings. Existing events on any connected calendar automatically block matching slots in your booking availability, shown with their real event title</li>
						<li>Confirmed bookings are automatically pushed out to every connected calendar as a real event, including your configured meeting link</li>
						<li>"Sync now" and "Sync existing bookings" buttons in Settings, and an Apple iCloud calendar picker when more than one calendar is found on the connected account</li>
					</ul>

					<h3>Improved</h3>
					<ul>
						<li>The Settings page is now organised into tabs (Branding, Payments, Leads, Booking, Automations, Advanced) instead of one long scrolling page</li>
						<li>Various security hardening across client data access, file handling, and API rate limiting</li>
					</ul>

					<h3>Fixes</h3>
					<ul>
						<li>A recurring invoice profile with no payment method on file would previously regenerate unpaid invoices indefinitely with no notification — it now correctly pauses and notifies the owner after repeated attempts, same as a real card decline</li>
						<li>Testimonial request emails were never sent for clients on recurring/retainer billing, even once they were fully paid up</li>
						<li>The "View Project" link in the project-completion email pointed at the portal's login page instead of the client's actual invoices</li>
						<li>A completed project's status could still be freely changed back to Active or On Hold, and completing a project gave no indication if the client still had an active recurring billing profile attached — completing a project now offers to pause any active recurring profile for that client, and a fully-settled completed project is locked from further status changes</li>
					</ul>
				</div>
			</div>

			<div class="changelog-entry animated-up">
				<div class="changelog-entry__header">
					<h2 class="changelog-entry__version">1.2.0</h2>
					<span class="changelog-entry__date">August 2026</span>
					<span class="badge badge--release">Update</span>
				</div>
				<div class="stack changelog-entry__body">
					<h3>New</h3>
					<ul>
						<li>Package Selector pricing mode for proposals — toggle between Flat Pricing and Package Selector when building a proposal; define unlimited pricing tiers (each with its own independent line items) plus optional add-ons. The client picks a tier, toggles any add-ons, and sees the total recalculate live before accepting</li>
						<li>Recurring Billing for proposals — toggle a proposal to Recurring billing instead of one-off/deposit pricing, set the frequency, start date, and end condition, and Client Octopus automatically creates a real Recurring Invoice profile the moment the client accepts, fully editable afterward. Recurring proposals never take a deposit or direct payment; billing runs exclusively through the generated invoice</li>
						<li>Auto-charge for recurring invoices (Pro &amp; Agency) — opt a recurring profile into automatically charging the client's saved Stripe or PayPal payment method each cycle instead of sending a "Pay Now" link. The first invoice is still paid manually, which securely saves the payment method for reuse. A failed charge is retried automatically with the client notified each time, then the profile pauses itself for you to follow up — it resumes automatically once payment succeeds again</li>
						<li>Payment failure notifications — you and the client are now both emailed when a payment attempt on an invoice or proposal is declined, expired, cancelled, or needs additional verification from the client's bank</li>
					</ul>

					<h3>Improved</h3>
					<ul>
						<li>The Pricing block in the proposal editor can now be reordered like any other section, and renders on the client-facing proposal wherever it's placed instead of always appearing last</li>
						<li>The Marketing Campaign proposal template is now available on every plan (previously Pro-only)</li>
						<li>The proposal expiry date is now a required field with no pre-filled default, closing a gap where a blank date could silently skip the "expiring soon" reminder</li>
						<li>Uninstall data protection — Settings &rarr; Danger Zone now has a "Delete all Client Octopus data when this plugin is deleted" checkbox, off by default. Deleting the plugin now only removes the code — your proposals, clients, projects, and invoices survive and are there again on reinstall — unless you explicitly opt into a full wipe</li>
					</ul>

					<h3>Fixes</h3>
					<ul>
						<li>Inconsistent admin form field styling caused by WordPress's default styles overriding the plugin's design</li>
						<li>Inconsistent field heights for dropdowns in the proposal wizard and recurring invoice editor</li>
						<li>Recurring profiles with a future start date billing immediately instead of waiting</li>
						<li>The payment confirmation popup sometimes showing the full total instead of the actual deposit/balance being charged</li>
						<li>A cosmetic JavaScript error that could appear after successfully sending or duplicating a proposal</li>
					</ul>
				</div>
			</div>

			<div class="changelog-entry animated-up">
				<div class="changelog-entry__header">
					<h2 class="changelog-entry__version">1.1.3</h2>
					<span class="changelog-entry__date">August 2026</span>
					<span class="badge badge--release">Update</span>
				</div>
				<div class="stack changelog-entry__body">
					<h3>New</h3>
					<ul>
						<li>Recurring Invoices — set up a profile for a client (weekly, monthly, quarterly, or yearly) and Client Octopus automatically generates and sends a fresh invoice on schedule; clients still pay each one manually via the existing Pay Now flow</li>
						<li>PayPal as an alternate payment provider (Pro &amp; Agency) — choose either Stripe or PayPal as your active gateway; clients always see a single "Pay Now" button that routes to whichever gateway is configured, on both proposals and standalone invoices</li>
						<li>"+ Add New Client" button in the Invoices and Recurring Invoices client picker for adding a client without leaving the form</li>
						<li>Pagination on the Proposals, Projects, Invoices, Recurring Invoices, and Clients admin screens</li>
					</ul>

					<h3>Improved</h3>
					<ul>
						<li>Client search — in the client picker and the main Clients screen — now correctly filters by name, email, or company instead of always showing the full list</li>
						<li>Faster plugin activation, particularly on sites that have been through several updates</li>
					</ul>

					<h3>Fixes</h3>
					<ul>
						<li>Webhook "Copy" buttons in Settings could silently fail to copy on non-HTTPS local development sites; now falls back to a compatible copy method</li>
					</ul>
				</div>
			</div>

			<div class="changelog-entry animated-up">
				<div class="changelog-entry__header">
					<h2 class="changelog-entry__version">1.1.2</h2>
					<span class="changelog-entry__date">August 2026</span>
					<span class="badge badge--release">Update</span>
				</div>
				<div class="stack changelog-entry__body">
					<h3>New</h3>
					<ul>
						<li>Portal Button Colour setting — buttons across the client portal and public proposal/invoice/payment pages can use a dedicated colour distinct from the Brand Colour, with automatically chosen contrast-safe text</li>
						<li>Login Background Image setting — upload a background image for the client portal login screen; the login card automatically becomes a frosted glass panel with the logo moved inside it for legibility over a photo</li>
						<li>Print / Save as PDF button on the client-facing invoice page</li>
					</ul>

					<h3>Improved</h3>
					<ul>
						<li>Client portal now uses a consistent font across every screen, and generic coloured left-border accents have been removed from cards, navigation, and headings across the portal and admin in favour of cleaner treatments</li>
						<li>Admin Proposals, Invoices, and Projects screens now share consistent filter tabs, empty states, table layout, and horizontal scrolling on smaller screens</li>
						<li>Clicking an invoice in the portal's Payment History now opens it in a new tab instead of navigating away from the page</li>
						<li>Client invoice page redesigned to match the payment receipt's look, with a branded header band and a new footer message</li>
						<li>Pricing and line-item tables on proposals, receipts, and invoices now share the same styling for full visual consistency</li>
					</ul>

					<h3>Fixes</h3>
					<ul>
						<li>Proposal and invoice total amounts could become unreadable when a tenant's Brand Colour was too light — these now automatically fall back to a readable colour</li>
					</ul>
				</div>
			</div>

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