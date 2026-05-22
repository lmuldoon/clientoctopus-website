<?php

/**
 * Documentation page — Client Octopus
 */

global $meta;

$meta->title = 'Docs — Client Octopus';
$meta->description = 'Documentation for Client Octopus — guides, setup instructions, and feature references to help you install, configure, and use the plugin in WordPress.';
$meta->slug = 'docs';
get_header();

?>

<article class="docs-page">

	<div class="sections-header section section--gradient">
		<div class="container">
			<div class="animated-up">
				<h1 class="text-white">Documentation</h1>
				<p style="color: rgba(255,255,255,0.75);">Everything you need to install, configure, and get the most out of Client Octopus.</p>
			</div>
		</div>
	</div>

	<div class="docs-layout container">

		<!-- Sidebar Nav -->
		<nav class="docs-sidebar animated-up" aria-label="Documentation navigation">
			<ul class="docs-nav">
				<li><a href="#getting-started" class="docs-nav__link">Getting Started</a></li>
				<li><a href="#requirements" class="docs-nav__link">Requirements</a></li>
				<li><a href="#installation" class="docs-nav__link">Installation</a></li>
				<li><a href="#quick-start" class="docs-nav__link">Quick Start</a></li>
				<li><a href="#proposals" class="docs-nav__link">Proposals</a></li>
				<li><a href="#client-portal" class="docs-nav__link">Client Portal</a></li>
				<li><a href="#payments" class="docs-nav__link">Payments &amp; Stripe</a></li>
				<li><a href="#projects" class="docs-nav__link">Projects &amp; Milestones</a></li>
				<li><a href="#team" class="docs-nav__link">Team Management</a></li>
				<li><a href="#webhooks" class="docs-nav__link">Webhooks</a></li>
				<li><a href="#analytics" class="docs-nav__link">Analytics</a></li>
				<li><a href="#ai" class="docs-nav__link">AI Features</a></li>
				<li><a href="#settings" class="docs-nav__link">Settings</a></li>
				<li><a href="#free-vs-pro" class="docs-nav__link">Free vs Pro</a></li>
				<li><a href="#troubleshooting" class="docs-nav__link">Troubleshooting</a></li>
				<li><a href="#privacy" class="docs-nav__link">Privacy &amp; Data</a></li>
				<li><a href="#api" class="docs-nav__link">REST API</a></li>
			</ul>
		</nav>

		<!-- Main Content -->
		<div class="docs-content animated-up">

			<!-- ─── GETTING STARTED ─────────────────────────────────────────── -->

			<section class="docs-section stack" id="getting-started">
				<h2>Getting Started</h2>
				<p>Client Octopus is a WordPress plugin that turns your WordPress admin into a complete client management system. It covers the full client lifecycle: proposals, payments, a client portal, project milestones, file delivery, approvals, and team messaging — all without leaving WordPress.</p>
				<p>Three plans are available. The <strong>Free</strong> plan covers proposals and the client database. <strong>Pro</strong> adds Stripe payments, the client portal, AI writing tools, webhooks, and analytics. <strong>Agency</strong> adds projects, milestones, messaging, file storage, approval workflows, and up to five team seats.</p>
			</section>

			<!-- ─── REQUIREMENTS ────────────────────────────────────────────── -->

			<section class="docs-section stack" id="requirements">
				<h2>Requirements</h2>
				<ul>
					<li>WordPress 6.0 or later</li>
					<li>PHP 8.0 or later</li>
					<li>A Stripe account (Pro and Agency only — required for payment collection)</li>
				</ul>
				<p>Client Octopus is single-site only. Multisite networks are not supported.</p>

				<h3>Email deliverability</h3>
				<p>Client Octopus sends transactional emails (proposal delivery, portal invites, payment confirmations, testimonial requests) via WordPress's built-in <code>wp_mail()</code>. Without an SMTP plugin, emails may be marked as spam or fail to deliver entirely depending on your hosting environment.</p>
				<p>For reliable delivery, install an SMTP plugin and connect it to a transactional email provider:</p>
				<ul>
					<li><strong>SMTP plugins:</strong> WP Mail SMTP, FluentSMTP, GoSMTP</li>
					<li><strong>Transactional providers:</strong> Mailgun, Postmark, SendGrid</li>
				</ul>
			</section>

			<!-- ─── INSTALLATION ────────────────────────────────────────────── -->

			<section class="docs-section stack" id="installation">
				<h2>Installation</h2>

				<h3>From WordPress.org (Free)</h3>
				<ol>
					<li>In your WordPress admin, go to <strong>Plugins &rarr; Add New</strong>.</li>
					<li>Search for <strong>Client Octopus</strong>.</li>
					<li>Click <strong>Install Now</strong>, then <strong>Activate</strong>.</li>
				</ol>

				<h3>From a ZIP file (Pro / Agency)</h3>
				<ol>
					<li>Download the plugin ZIP from your purchase confirmation email.</li>
					<li>In your WordPress admin, go to <strong>Plugins &rarr; Add New &rarr; Upload Plugin</strong>.</li>
					<li>Select the ZIP file and click <strong>Install Now</strong>, then <strong>Activate</strong>.</li>
					<li>On first activation you will be prompted to enter your licence key. Paste the key from your licence dashboard and click <strong>Activate Licence</strong>.</li>
				</ol>

				<p>On activation, Client Octopus creates its database tables, registers the client portal rewrite rules, and schedules a monthly usage-reset cron event. If the client portal URLs return 404 after activation, go to <strong>Settings &rarr; Permalinks</strong> and click <strong>Save Changes</strong> to flush the rewrite rules.</p>
			</section>

			<!-- ─── QUICK START ─────────────────────────────────────────────── -->

			<section class="docs-section stack" id="quick-start">
				<h2>Quick Start</h2>
				<p>After activation a <strong>Client Octopus</strong> entry appears in your WordPress admin sidebar. The first time you open it, the setup wizard guides you through the essential steps. You can revisit any of these from <strong>Client Octopus &rarr; Settings</strong> later.</p>

				<h3>Step 1 — Add your branding</h3>
				<p>Go to <strong>Client Octopus &rarr; Settings</strong>. Enter your business name, sender email, brand colour, and logo URL. These are applied to all outgoing emails and the client portal.</p>

				<h3>Step 2 — Connect Stripe (Pro / Agency)</h3>
				<p>Go to <strong>Client Octopus &rarr; Settings</strong> and enter your Stripe publishable key, secret key, and webhook signing secret before sending any proposals, so payment collection is ready from the start. See the <a href="#payments">Payments &amp; Stripe</a> section for the full setup steps.</p>

				<h3>Step 3 — Create and send a proposal</h3>
				<p>Go to <strong>Client Octopus &rarr; Proposals &rarr; New Proposal</strong>. In the proposal builder, fill in the client&rsquo;s details (name, email, company, phone) — this automatically creates their client record. Build your proposal from the template library, set pricing, and optionally enable payment collection. When ready, click <strong>Send to Client</strong>. The client receives a magic-link email — no account required to view or accept.</p>

				<div class="docs-callout docs-callout--tip">
					<p><strong>Portal URLs returning 404?</strong> Go to <strong>Settings &rarr; Permalinks</strong> and click <strong>Save Changes</strong> to flush the rewrite rules. This only needs to be done once after activation.</p>
				</div>
			</section>

			<!-- ─── PROPOSALS ───────────────────────────────────────────────── -->

			<section class="docs-section stack" id="proposals">
				<h2>Proposals</h2>
				<p>Proposals are the core workflow in Client Octopus. Each proposal has a unique shareable link that clients open without needing a WordPress account.</p>

				<h3>Lifecycle</h3>
				<p>A proposal moves through the following statuses:</p>
				<ol>
					<li><strong>Draft</strong> — Created but not yet sent. You can edit all content freely.</li>
					<li><strong>Sent</strong> — Delivered to the client by email. The client sees Accept, Decline, and Request Revision actions.</li>
					<li><strong>Viewed</strong> — The client has opened the link. Recorded automatically.</li>
					<li><strong>Accepted</strong> — Client approved the proposal. On Agency, a project is automatically created. On Pro/Agency, the client receives a portal invite.</li>
					<li><strong>Declined</strong> — Client rejected the proposal. An optional decline reason is stored.</li>
					<li><strong>Revision Requested</strong> — Client asked for changes. Their note is stored and visible in the admin.</li>
					<li><strong>Completed</strong> — Work finished and any payment collected. On Agency, the associated project is locked.</li>
					<li><strong>Expired</strong> — The proposal link is no longer valid (if an expiry date was set).</li>
				</ol>

				<h3>Editing proposal content</h3>
				<p>After creating a proposal, the proposal detail screen shows a summary of the settings (client, pricing, payment options). To write or edit the actual proposal content — sections, text, and line items — click the <strong>Edit Content</strong> button. This opens the full proposal editor where you can build out your proposal before sending it to the client.</p>

				<h3>Templates</h3>
				<p>The template library provides preset proposal layouts. Start from a template and customise content, line items, and pricing per client. Templates are filtered by your current plan.</p>

				<h3>Payment collection</h3>
				<p>Enable payment on any proposal (Pro/Agency). Set a deposit percentage (1–100%) if you want to collect a partial amount at acceptance and the balance on completion, or collect the full amount upfront. Stripe handles all PCI compliance.</p>

				<h3>AI writing assist (Pro / Agency)</h3>
				<p>While editing a proposal, highlight any text and use the AI toolbar to <strong>Improve</strong>, <strong>Shorten</strong>, make it more <strong>Persuasive</strong>, or <strong>Generate</strong> content from a brief. See the <a href="#ai">AI Features</a> section for quota details.</p>

				<h3>Limits</h3>
				<p>All plans, including Free, can create unlimited proposals. There is no monthly cap or counter.</p>
			</section>

			<!-- ─── CLIENT PORTAL ───────────────────────────────────────────── -->

			<section class="docs-section stack" id="client-portal">
				<h2>Client Portal</h2>
				<p>The client portal is a set of pages hosted on your WordPress site where clients can review proposals, track payments, and (on Agency) interact with their projects. It is available on Pro and Agency plans.</p>

				<h3>How clients log in</h3>
				<p>Client Octopus uses <strong>magic links</strong>. When a proposal is accepted, the client receives an email with a one-time login link. Clicking it authenticates them and redirects to the portal dashboard. Links are single-use and expire after 24 hours. Clients can optionally set a password for future logins.</p>
				<p>The portal login page lives at <code>/clientoctopus/login</code> on your site. No custom domain or subdomain is required — it runs on the same domain as your WordPress install.</p>

				<h3>Portal pages</h3>
				<table>
					<thead>
						<tr>
							<th>URL</th>
							<th>What the client sees</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><code>/clientoctopus/dashboard</code></td>
							<td>Overview of their account</td>
						</tr>
						<tr>
							<td><code>/clientoctopus/proposals</code></td>
							<td>List of their proposals — view, accept, decline, or request revision</td>
						</tr>
						<tr>
							<td><code>/clientoctopus/payments</code></td>
							<td>Payment history and receipts</td>
						</tr>
						<tr>
							<td><code>/clientoctopus/projects</code></td>
							<td>Active projects, milestones, files, and messaging (Agency only)</td>
						</tr>
					</tbody>
				</table>

				<h3>Basic vs Full portal</h3>
				<p><strong>Pro (Basic)</strong> — Clients can view proposals, accept or decline, and see payment history. No project access.</p>
				<p><strong>Agency (Full)</strong> — Clients also see project milestones, can approve deliverables, download files, and message the agency directly from the portal.</p>

				<h3>Permalinks</h3>
				<p>If portal URLs return 404, go to <strong>Settings &rarr; Permalinks</strong> and click <strong>Save Changes</strong> to regenerate the rewrite rules.</p>
			</section>

			<!-- ─── PAYMENTS ────────────────────────────────────────────────── -->

			<section class="docs-section stack" id="payments">
				<h2>Payments &amp; Stripe</h2>
				<p>Payment collection requires a Stripe account and is available on Pro and Agency plans.</p>

				<h3>Connecting Stripe</h3>
				<ol>
					<li>Log in to your <a href="https://dashboard.stripe.com/apikeys" rel="noopener noreferrer" target="_blank">Stripe dashboard</a> and copy your <strong>Publishable key</strong> and <strong>Secret key</strong>.</li>
					<li>In your WordPress admin, go to <strong>Client Octopus &rarr; Settings</strong>.</li>
					<li>Paste both keys into the Stripe API Keys fields and save. The status badge will show <strong>Live</strong> or <strong>Test</strong> depending on which key prefix you entered.</li>
				</ol>

				<h3>Setting up the webhook</h3>
				<ol>
					<li>In your Stripe Dashboard, go to <strong>Developers → Workbench → Webhooks</strong> and click <strong>Add destination</strong>.</li>
					<li>Select <strong>Webhook endpoint</strong> as the destination type.</li>
					<li>Copy the <strong>Webhook Endpoint URL</strong> from <strong>Client Octopus → Settings</strong> and paste it into the Endpoint URL field.</li>
					<li>Under events, select: <code>checkout.session.completed</code>, <code>checkout.session.expired</code>, <code>checkout.session.async_payment_succeeded</code>, and <code>checkout.session.async_payment_failed</code>.</li>
					<li>Save the endpoint, then click into it to reveal the <strong>Signing secret</strong> (<code>whsec_…</code>).</li>
					<li>Paste that secret into the <strong>Stripe Webhook Signing Secret</strong> field in <strong>Client Octopus → Settings</strong>.</li>
				</ol>
				<p>The key changes: "Workbench → Webhooks → Add destination" replaces the old "Webhooks → Add endpoint" path, and the two async payment events are added alongside checkout.session.completed (needed for bank transfers and other delayed payment methods).</p>

				<p><strong>Testing with sandbox mode:</strong> Use your <code>pk_test_…</code> / <code>sk_test_…</code> keys and create a separate webhook endpoint in Stripe pointing to your staging/test site. Test card number <code>4242 4242 4242 4242</code> (any future expiry, any CVC) triggers a successful payment.</p>
				
				<h3>Deposit payments</h3>
				<p>On any proposal, enable payment and set a <strong>deposit percentage</strong> (1–100%). The client pays the deposit when they accept. You can mark the balance as due on project completion, which triggers a second Stripe checkout session.</p>

				<h3>Currencies</h3>
				<p>GBP is the default. Any currency supported by your Stripe account can be used — set the currency on each proposal individually.</p>

				<h3>Refunds</h3>
				<p>Refunds can be initiated from <strong>Client Octopus &rarr; Proposals</strong> on any completed payment. This calls the Stripe API directly — no manual action in the Stripe dashboard is needed.</p>
			</section>

			<!-- ─── PROJECTS ────────────────────────────────────────────────── -->

			<section class="docs-section stack" id="projects">
				<h2>Projects &amp; Milestones</h2>
				<p>Projects are available on the <strong>Agency plan</strong> only. When a client accepts a proposal, a project is automatically created and linked to that proposal and client.</p>

				<h3>Project statuses</h3>
				<ul>
					<li><strong>Active</strong> — Work is in progress.</li>
					<li><strong>On Hold</strong> — Paused. Can be reactivated.</li>
					<li><strong>Completed</strong> — Finished. The project is locked for editing.</li>
				</ul>

				<h3>Milestones</h3>
				<p>Break a project into milestones under <strong>Client Octopus &rarr; Projects &rarr; [project name]</strong>. Each milestone has a title, description, due date, and status (<strong>Pending</strong>, <strong>In Progress</strong>, <strong>Submitted</strong>, or <strong>Completed</strong>). Milestones can be reordered by dragging.</p>

				<h3>Approvals</h3>
				<p>Create approval requests against any project for designs, content, deliverables, or other items. The client sees the request in the portal and can approve or reject it with a comment. Statuses: <strong>Pending</strong>, <strong>Approved</strong>, <strong>Rejected</strong>.</p>

				<h3>File uploads</h3>
				<p>Upload files to any project from <strong>Client Octopus &rarr; Projects</strong>. Clients can download them from the portal. Each Agency account has a <strong>1 GB total storage limit</strong> across all projects. Files are stored securely and served via authenticated URLs.</p>

				<h3>Messaging</h3>
				<p>Each project has a message thread visible to both the agency team and the client. Clients send messages from the portal; the agency replies from the WordPress admin. Unread message counts appear as a badge on the <strong>Projects</strong> menu item. Messages are marked read when either party opens the thread.</p>
			</section>

			<!-- ─── TEAM ─────────────────────────────────────────────────────── -->

			<section class="docs-section stack" id="team">
				<h2>Team Management</h2>
				<p>Team seats are available on the <strong>Agency plan</strong>. Agency accounts support up to <strong>5 users</strong> (the account owner plus 4 invited members).</p>

				<h3>Inviting a team member</h3>
				<ol>
					<li>Go to <strong>Client Octopus &rarr; Team &rarr; Invite Member</strong>.</li>
					<li>Enter the member&rsquo;s email address and assign a role.</li>
					<li>The invitee receives an email with a link to accept and set up their WordPress account. They are created with the <code>clientoctopus_member</code> role.</li>
				</ol>

				<h3>Roles</h3>
				<table>
					<thead>
						<tr>
							<th>Role</th>
							<th>What they can do</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><strong>Admin</strong></td>
							<td>Full access to all Client Octopus features and settings</td>
						</tr>
						<tr>
							<td><strong>Editor</strong></td>
							<td>Create and edit proposals, clients, and projects — cannot access Settings or Team</td>
						</tr>
						<tr>
							<td><strong>Viewer</strong></td>
							<td>Read-only access to proposals, clients, projects, and analytics</td>
						</tr>
					</tbody>
				</table>

				<p>All data created by a team member is owned by and counted against the account owner. Usage quotas (AI, storage, proposals) are shared across the team.</p>
			</section>

			<!-- ─── WEBHOOKS ────────────────────────────────────────────────── -->

			<section class="docs-section stack" id="webhooks">
				<h2>Webhooks</h2>
				<p>Webhooks are available on <strong>Pro and Agency</strong>. They allow Client Octopus to notify external services (Zapier, Make, custom endpoints) when events occur.</p>

				<h3>Registering a webhook</h3>
				<ol>
					<li>Go to <strong>Client Octopus &rarr; Webhooks &rarr; Add Webhook</strong>.</li>
					<li>Enter the endpoint URL and select which events should trigger it.</li>
					<li>Copy the generated <strong>signing secret</strong> — you&rsquo;ll use this to verify payloads on your endpoint.</li>
					<li>Use the <strong>Test</strong> button to send a sample payload and confirm delivery.</li>
				</ol>

				<h3>Available events</h3>
				<ul>
					<li><code>proposal.sent</code></li>
					<li><code>proposal.accepted</code></li>
					<li><code>proposal.declined</code></li>
					<li><code>proposal.revision_requested</code></li>
					<li><code>payment.completed</code></li>
					<li><code>project.created</code></li>
					<li><code>project.completed</code></li>
				</ul>

				<h3>Verifying payloads</h3>
				<p>Every request includes an <code>X-ClientOctopus-Signature</code> header containing an HMAC-SHA256 signature of the raw request body, signed with your webhook secret. Verify this on your endpoint before processing the payload. The last 3 delivery attempts for each webhook are logged and visible in the admin.</p>

				<h3>Example verification (PHP)</h3>
<pre><code>$secret   = 'your_webhook_secret';
$payload  = file_get_contents( 'php://input' );
$header   = $_SERVER['HTTP_X_CLIENTOCTOPUS_SIGNATURE'] ?? '';
$expected = 'sha256=' . hash_hmac( 'sha256', $payload, $secret );

if ( ! hash_equals( $expected, $header ) ) {
    http_response_code( 401 );
    exit;
}

$data = json_decode( $payload, true );
// Process $data['event'] and $data['payload'] here</code></pre>
			</section>

			<!-- ─── ANALYTICS ──────────────────────────────────────────────── -->

			<section class="docs-section stack" id="analytics">
				<h2>Analytics</h2>
				<p>The analytics dashboard is available on <strong>Pro and Agency</strong> plans under <strong>Client Octopus &rarr; Analytics</strong>. It gives you an at-a-glance view of your proposal pipeline and revenue performance.</p>

				<h3>Overview metrics</h3>
				<table>
					<thead>
						<tr>
							<th>Metric</th>
							<th>What it shows</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Total Revenue</td>
							<td>Sum of all completed payments in the selected period</td>
						</tr>
						<tr>
							<td>Proposals Sent</td>
							<td>Number of proposals sent to clients</td>
						</tr>
						<tr>
							<td>Acceptance Rate</td>
							<td>Percentage of sent proposals that were accepted</td>
						</tr>
						<tr>
							<td>Avg. Time to Close</td>
							<td>Median days between proposal sent and accepted</td>
						</tr>
					</tbody>
				</table>

				<h3>Revenue chart</h3>
				<p>The revenue chart plots completed payment totals over time. Use the time filter (This Week / This Month / This Year) to narrow the view. Hover over data points to see exact figures.</p>

				<h3>Proposal performance</h3>
				<p>The proposal performance table breaks down each proposal by status, value, and close time, so you can see which types of work convert fastest and at what price point.</p>

				<h3>Exporting data</h3>
				<p>Click <strong>Export CSV</strong> on the analytics page to download all proposal and payment data for the selected period. The export includes proposal ID, client name, value, status, sent date, accepted date, and payment total — suitable for spreadsheets, accountants, or external reporting tools.</p>
			</section>


			<!-- ─── AI ───────────────────────────────────────────────────────── -->

			<section class="docs-section stack" id="ai">
				<h2>AI Features</h2>
				<p>AI writing assistance is available on <strong>Pro and Agency</strong> plans. It works inside the proposal editor.</p>

				<h3>How to use it</h3>
				<p>Select any text in the proposal editor and choose an action from the AI toolbar:</p>
				<ul>
					<li><strong>Improve</strong> — Rewrite the selection to be clearer and more professional.</li>
					<li><strong>Shorten</strong> — Condense the selection without losing meaning.</li>
					<li><strong>Persuasive</strong> — Rewrite the selection to be more compelling.</li>
					<li><strong>Generate</strong> — Produce new content from a brief you enter.</li>
				</ul>

				<h3>Quotas and limits</h3>
				<table>
					<thead>
						<tr>
							<th>Plan</th>
							<th>AI requests per month</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Free</td>
							<td>Not available</td>
						</tr>
						<tr>
							<td>Pro</td>
							<td>100</td>
						</tr>
						<tr>
							<td>Agency</td>
							<td>500</td>
						</tr>
					</tbody>
				</table>
				<p>A 3-second cooldown applies between requests. Quotas reset on the 1st of each month. Shared across your team on Agency.</p>

				<h3>How it works</h3>
				<p>AI requests are processed through a Client Octopus relay server. Your WordPress site never calls the AI provider directly. This keeps your credentials private and allows Client Octopus to track costs and enforce plan quotas server-side. Proposal text is sent to the relay only when you trigger an AI action and is not retained after the response is returned.</p>
			</section>

			<!-- ─── SETTINGS ────────────────────────────────────────────────── -->

			<section class="docs-section stack" id="settings">
				<h2>Settings</h2>
				<p>All settings are under <strong>Client Octopus &rarr; Settings</strong>. This page requires the WordPress <code>manage_options</code> capability (site administrators only).</p>

				<h3>Branding (all plans)</h3>
				<table>
					<thead>
						<tr>
							<th>Field</th>
							<th>Used in</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Business Name</td>
							<td>Emails, portal header</td>
						</tr>
						<tr>
							<td>Sender Name</td>
							<td>The "From" name on all outgoing emails</td>
						</tr>
						<tr>
							<td>Sender Email</td>
							<td>The "From" address on all outgoing emails</td>
						</tr>
						<tr>
							<td>Brand Colour</td>
							<td>Proposal CTA buttons, portal accent colour</td>
						</tr>
						<tr>
							<td>Logo URL</td>
							<td>Emails, portal header — recommended max 180&times;48&nbsp;px</td>
						</tr>
					</tbody>
				</table>

				<h3>Stripe API Keys (Pro / Agency)</h3>
				<p>Enter your Stripe <strong>Publishable Key</strong> (<code>pk_live_&hellip;</code> or <code>pk_test_&hellip;</code>) and <strong>Secret Key</strong> (<code>sk_live_&hellip;</code> or <code>sk_test_&hellip;</code>). A status badge shows whether Client Octopus is in Live or Test mode. See <a href="#payments">Payments &amp; Stripe</a> for webhook setup.</p>

				<h3>Testimonial Emails (Pro / Agency)</h3>
				<p>Enable automated review-request emails sent to clients after their final payment is collected. Configure the email body, the URL you want them to visit (e.g. a Google Reviews or Trustpilot page), and the button label (default: &ldquo;Leave a Review&rdquo;).</p>
			</section>

			<!-- ─── FREE VS PRO ──────────────────────────────────────────────── -->

			<section class="docs-section stack" id="free-vs-pro">
				<h2>Free vs Pro vs Agency</h2>
				<table>
					<thead>
						<tr>
							<th>Feature</th>
							<th>Free</th>
							<th>Pro</th>
							<th>Agency</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Proposals</td>
							<td>Unlimited</td>
							<td>Unlimited</td>
							<td>Unlimited</td>
						</tr>
						<tr>
							<td>Client database</td>
							<td>&#10003;</td>
							<td>&#10003;</td>
							<td>&#10003;</td>
						</tr>
						<tr>
							<td>Proposal templates</td>
							<td>&#10003;</td>
							<td>&#10003;</td>
							<td>&#10003;</td>
						</tr>
						<tr>
							<td>Stripe payments</td>
							<td>&mdash;</td>
							<td>&#10003;</td>
							<td>&#10003;</td>
						</tr>
						<tr>
							<td>Deposit payments</td>
							<td>&mdash;</td>
							<td>&#10003;</td>
							<td>&#10003;</td>
						</tr>
						<tr>
							<td>Analytics</td>
							<td>&mdash;</td>
							<td>&#10003;</td>
							<td>&#10003;</td>
						</tr>
						<tr>
							<td>Webhooks</td>
							<td>&mdash;</td>
							<td>&#10003;</td>
							<td>&#10003;</td>
						</tr>
						<tr>
							<td>Testimonial emails</td>
							<td>&mdash;</td>
							<td>&#10003;</td>
							<td>&#10003;</td>
						</tr>
						<tr>
							<td>AI requests/month</td>
							<td>&mdash;</td>
							<td>100</td>
							<td>500</td>
						</tr>
						<tr>
							<td>Client portal</td>
							<td>&mdash;</td>
							<td>Basic</td>
							<td>Full</td>
						</tr>
						<tr>
							<td>Projects &amp; milestones</td>
							<td>&mdash;</td>
							<td>&mdash;</td>
							<td>&#10003;</td>
						</tr>
						<tr>
							<td>Approvals</td>
							<td>&mdash;</td>
							<td>&mdash;</td>
							<td>&#10003;</td>
						</tr>
						<tr>
							<td>Client messaging</td>
							<td>&mdash;</td>
							<td>&mdash;</td>
							<td>&#10003;</td>
						</tr>
						<tr>
							<td>File uploads</td>
							<td>&mdash;</td>
							<td>&mdash;</td>
							<td>1 GB total</td>
						</tr>
						<tr>
							<td>Team seats</td>
							<td>1</td>
							<td>1</td>
							<td>5</td>
						</tr>
					</tbody>
				</table>
			</section>


			<!-- ─── TROUBLESHOOTING ─────────────────────────────────────────── -->

			<section class="docs-section stack" id="troubleshooting">
				<h2>Troubleshooting</h2>

				<h3>Client portal pages return 404</h3>
				<p>WordPress registers the portal URL on activation. If the pages return 404, the rewrite rules need to be flushed:</p>
				<ol>
					<li>Go to <strong>Settings &rarr; Permalinks</strong> in the WordPress admin.</li>
					<li>Click <strong>Save Changes</strong> without changing anything.</li>
					<li>Reload the portal page.</li>
				</ol>
				<p>This only needs to be done once. If the 404 persists after flushing, check that your web server has <code>mod_rewrite</code> enabled and that <code>.htaccess</code> is writable by WordPress.</p>

				<h3>Stripe webhook not delivering</h3>
				<p>If payment events are not reaching Client Octopus, work through this checklist:</p>
				<ul>
					<li><strong>Correct events selected</strong> — the endpoint must be subscribed to at minimum <code>payment_intent.succeeded</code> and <code>checkout.session.completed</code>. Check <strong>Stripe Dashboard &rarr; Webhooks &rarr; [your endpoint] &rarr; Events</strong>.</li>
					<li><strong>Signing secret copied correctly</strong> — the webhook signing secret (starting with <code>whsec_</code>) must match the value saved in <strong>Client Octopus &rarr; Settings &rarr; Stripe</strong>. It is different from your API secret key.</li>
					<li><strong>Endpoint is publicly accessible</strong> — Stripe cannot reach <code>localhost</code> or sites behind a VPN. Use a live URL or the <a href="https://stripe.com/docs/stripe-cli" rel="noopener noreferrer" target="_blank">Stripe CLI</a> (<code>stripe listen --forward-to</code>) for local testing.</li>
					<li><strong>Test with the Stripe CLI</strong> — run <code>stripe trigger payment_intent.succeeded</code> and check the Client Octopus activity log to confirm receipt.</li>
				</ul>

				<h3>Emails not sending</h3>
				<p>Client Octopus sends email via <code>wp_mail()</code>. If emails are not arriving, check your WordPress mail configuration — many hosts block outgoing PHP mail by default. Install an SMTP plugin (e.g. WP Mail SMTP) and configure a transactional mail provider such as Postmark, SendGrid, or Mailgun.</p>
			</section>


			<!-- ─── PRIVACY & DATA ──────────────────────────────────────────── -->

			<section class="docs-section stack" id="privacy">
				<h2>Privacy &amp; Data</h2>

				<h3>Where your data is stored</h3>
				<p>All client data — names, email addresses, proposal content, project activity, and file attachments — is stored in your own WordPress database on your own server. Client Octopus does not copy or transmit this data to external servers except where explicitly described below.</p>

				<h3>AI relay</h3>
				<p>When you trigger an AI action in the proposal editor, the selected proposal text is sent to the Client Octopus relay server to process the request. The text is not stored after the response is returned. The relay does not share your content with third parties. No AI actions are triggered automatically — data is only sent when you explicitly click an AI action button.</p>

				<h3>Payments</h3>
				<p>Payment card details are handled entirely by Stripe and never pass through your WordPress site or the Client Octopus relay. Client Octopus stores only the Stripe payment intent ID, checkout session ID, and payment status — never card numbers, CVVs, or bank details.</p>

				<h3>Client portal authentication</h3>
				<p>Clients authenticate via a short-lived magic link sent to their email address. Tokens are single-use and expire after 15 minutes. Session cookies are scoped to your domain and are not shared with any third party.</p>

				<h3>GDPR considerations</h3>
				<p>Because all client data lives in your database, you are the data controller. You are responsible for your own privacy policy, cookie notice, and any data subject requests from your clients. Client Octopus does not act as a data processor on your behalf beyond the AI relay described above.</p>
			</section>


			<!-- ─── REST API ────────────────────────────────────────────────── -->

			<section class="docs-section stack" id="api">
				<h2>REST API</h2>
				<p>Client Octopus exposes a REST API under the base path <code>/wp-json/clientoctopus/v1/</code>. All endpoints return JSON.</p>

				<h3>Authentication</h3>
				<p>Admin endpoints require a WordPress nonce passed in the <code>X-WP-Nonce</code> header (the calling user must be logged in to WordPress and have the <code>manage_clientoctopus</code> capability). Client-facing portal routes accept either a short-lived portal token (passed as a query parameter or <code>Authorization: Bearer</code> header) or a portal session cookie.</p>

				<h3>Admin endpoints</h3>
				<table>
					<thead>
						<tr>
							<th>Method</th>
							<th>Route</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody>
						<tr><td>GET</td><td><code>/proposals</code></td><td>List proposals</td></tr>
						<tr><td>POST</td><td><code>/proposals/create</code></td><td>Create a proposal</td></tr>
						<tr><td>POST</td><td><code>/proposals/{id}/send</code></td><td>Send proposal to client</td></tr>
						<tr><td>POST</td><td><code>/proposals/{id}/duplicate</code></td><td>Clone a proposal</td></tr>
						<tr><td>GET</td><td><code>/projects</code></td><td>List projects (Agency)</td></tr>
						<tr><td>GET</td><td><code>/projects/{id}</code></td><td>Project details + milestones</td></tr>
						<tr><td>POST</td><td><code>/ai/process</code></td><td>AI text action (improve / shorten / persuasive / generate)</td></tr>
						<tr><td>GET</td><td><code>/analytics/overview</code></td><td>Revenue KPIs and chart data</td></tr>
						<tr><td>GET</td><td><code>/webhooks</code></td><td>List configured webhooks</td></tr>
						<tr><td>POST</td><td><code>/webhooks</code></td><td>Register a webhook</td></tr>
						<tr><td>POST</td><td><code>/webhooks/{id}/test</code></td><td>Send a test ping</td></tr>
						<tr><td>GET</td><td><code>/user/usage</code></td><td>Live usage stats (AI, proposals, storage, team)</td></tr>
					</tbody>
				</table>

				<h3>Client-facing portal endpoints</h3>
				<p>These routes do not require a WordPress login and are used by the client portal frontend.</p>
				<table>
					<thead>
						<tr>
							<th>Method</th>
							<th>Route</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody>
						<tr><td>GET</td><td><code>/client/proposals/{token}</code></td><td>View a proposal</td></tr>
						<tr><td>POST</td><td><code>/client/proposals/{token}/accept</code></td><td>Accept a proposal</td></tr>
						<tr><td>POST</td><td><code>/portal/send-magic-link</code></td><td>Request a magic link</td></tr>
						<tr><td>POST</td><td><code>/portal/verify</code></td><td>Verify token and log in</td></tr>
						<tr><td>GET</td><td><code>/portal/projects/{id}</code></td><td>Client project view</td></tr>
					</tbody>
				</table>

				<div class="docs-callout docs-callout--info">
					<p><strong>API stability:</strong> The REST API is currently internal and subject to change between minor versions. If you build integrations against it, pin your plugin version and test on upgrades. A stable, versioned public API is planned for a future release.</p>
				</div>
			</section>

		</div><!-- /.docs-content -->

	</div><!-- /.docs-layout -->

</article>

<?php get_footer(); ?>