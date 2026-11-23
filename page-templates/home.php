<?php

/**
 * Homepage — Client Octopus
 */

global $meta;

$meta->title = 'Client Octopus — The Client OS for WordPress Freelancers';
$meta->description = 'Capture leads, book calls, create proposals and invoices, take payments, and manage clients through a white-label portal — all inside your WordPress site.';
$meta->slug = 'home';

get_header();

?>

<article>

	<!-- ═══════════════════════════════════════════════════════════════════════════
     HERO — Apple variant
════════════════════════════════════════════════════════════════════════════════ -->

	<section class="hero">
		<div class="container">
			<div class="hero__inner">
				<!-- <div class="tentacle">
					<?php include_asset('static/tentacle.svg'); ?>
				</div> -->
				<h1>The all-in-one <br>client workflow system for WordPress</h1>

				<p class="hero__lede">Capture leads, book calls, create proposals, get paid, and manage your clients in one simple system &mdash; all inside the WordPress site you already own.</p>

				<div class="hero__actions">
					<a class="button button--primary plan-button" data-plan-id="48154" href="#">Get Client Octopus free</a>
					<a class="button button--ghost" href="#how-it-works">See how it works</a>
				</div>

			</div>
			<div class="browser-frame">
				<!-- <div class="browser-frame__bar">
					<span class="browser-dot"></span>
					<span class="browser-dot"></span>
					<span class="browser-dot"></span>
					<span class="browser-frame__url">clientoctopus.com/wp-admin/admin.php?page=clientoctopus</span>
				</div> -->
				<div class="browser-frame__content">
					<img src="/static/images/screenshots/admin-plan-usage.jpg?v=3" srcset="/static/images/screenshots/admin-plan-usage-800.jpg 800w, /static/images/screenshots/admin-plan-usage.jpg 1920w" sizes="(max-width: 768px) 100vw, 900px" alt="Wordpress plugin Client Octopus admin dashboard" width="1920" height="1080" fetchpriority="high" />
				</div>
			</div>
		</div>
	</section>


	<!-- ═══════════════════════════════════════════════════════════════════════════
     REPLACES — Before vs After
════════════════════════════════════════════════════════════════════════════════ -->

	<section class="section section--statement bg-lightindigo">
		<div class="statement-tentacle" aria-hidden="true">
			<?php include_asset('static/tentacle.svg'); ?>
		</div>
		<div class="container">

			<div class="statement-card animated-up">
				<h2 class="statement-card__heading">
					Clients say yes.<br>
					Deposits arrive.<br>
					<span class="statement-card__highlight">You get on with the work.</span>
				</h2>
				<p class="statement-card__lede">Client Octopus runs your proposals, payments, projects and client portal from inside your WordPress site.</p>
				<ul class="statement-card__pills animated-up">
					<li>Lead capture</li>
					<li>Call booking</li>
					<li>Proposals</li>
					<li>Invoices</li>
					<li>Payments</li>
					<li>Projects</li>
					<li>Time tracking</li>
					<li>Client portal</li>
				</ul>
			</div>

		</div>
	</section>


	<!-- ═══════════════════════════════════════════════════════════════════════════
     FLOW PARAGRAPH — The whole thing, in one paragraph
════════════════════════════════════════════════════════════════════════════════ -->

	<section class="section section--flow bg-stone">
		<div class="container">

			<div class="flow-paragraph animated-up">
				<h2 class="section-heading">The whole thing, in one paragraph.</h2>
				<p class="flow-paragraph__text" data-split-words>
					Someone fills in your form <span class="flow-tag">Lead captured</span>. They book a call straight off the confirmation <span class="flow-tag">Call booked</span>. You send a proposal <span class="flow-tag">Sent as a secure link</span>. If they go quiet, a reminder follows up automatically <span class="flow-tag">Reminder sent</span>. They say yes and pay the deposit on the spot <span class="flow-tag">E&#8209;signed &amp; paid</span>. Their project sets itself up <span class="flow-tag">Project created</span>. When the work's done, the final invoice goes out <span class="flow-tag">Final payment requested</span>. Once that clears, a review request follows <span class="flow-tag">Testimonial requested</span>.
				</p>
				<p class="flow-paragraph__note"><span class="flow-paragraph__dot"></span> Everything in indigo happens on its own.</p>
			</div>

		</div>
	</section>


	<!-- ═══════════════════════════════════════════════════════════════════════════
     FEATURES GRID — 6 cells, 3 × 2
════════════════════════════════════════════════════════════════════════════════ -->

	<section class="section section--features menu-section" id="features">
		<div class="container animated-up">

			<div class="features-heading-block">
				<h2 class="section-heading">Why Client Octopus</h2>
			</div>

			<div class="cf-features-grid animated-up">

				<div class="feature-cell feature-cell--indigo">
					<h3>One place. One login.</h3>
					<p>Proposals, invoices, projects and files, all the way from first proposal to final payment, without switching tools.</p>
				</div>

				<div class="feature-cell feature-cell--stone">
					<h3>Looks like you hired a designer.</h3>
					<p>A branded portal where clients review proposals, pay invoices, approve work, and download files.</p>
				</div>

				<div class="feature-cell feature-cell--grey">
					<h3>Made for people who do the work.</h3>
					<p>Built for freelancers and agencies managing proposals, projects, payments, and client communication.</p>
				</div>

				<div class="feature-cell feature-cell--stone">
					<h3>Your site. Your data.</h3>
					<p>Everything, including your proposals, projects, files and client data, stays inside the WordPress site you already own.</p>
				</div>

				<div class="feature-cell feature-cell--grey">
					<h3>Admin that does itself.</h3>
					<p>Reminders, final payment requests, project creation and webhook-triggered workflows all run without you lifting a finger.</p>
				</div>

				<div class="feature-cell feature-cell--indigo">
					<h3>A first draft in seconds.</h3>
					<p>Built-in AI helps you generate proposal sections, improve wording, and create client-ready copy.</p>
				</div>

			</div>

		</div>
	</section>


	<!-- ═══════════════════════════════════════════════════════════════════════════
     PRICING — 3 tiers
════════════════════════════════════════════════════════════════════════════════ -->

	<section class="section section--pricing menu-section bg-stone" id="pricing">
		<div class="container animated-up">

			<p class="section-eyebrow">Pricing</p>
			<h2 class="section-heading">Simple pricing that scales with your business</h2>
			<p class="section-lede">Whether you're sending your first proposal or managing multiple client projects, Client Octopus grows with your workflow.</p>

			<div class="cf-billing-toggle">
				<span class="cf-billing-toggle__label">Monthly</span>
				<button class="cf-billing-toggle__switch" id="js-billing-toggle" role="switch" aria-checked="false" aria-label="Toggle annual billing">
					<span class="cf-billing-toggle__knob"></span>
				</button>
				<span class="cf-billing-toggle__label">Annually</span>
			</div>
			<p class="cf-billing-toggle__save">Pay annually and save up to 26%</p>

			<div class="cf-pricing-grid" id="js-pricing-grid">

				<!-- FREE -->
				<div class="cf-pricing-tier">
					<span class="cf-pricing-tier__name">Free (Forever)</span>
					<div class="cf-pricing-tier__month-price"><span><sup>&dollar;</sup>0</span></div>
					<div class="cf-pricing-tier__year-price"><span><sup>&dollar;</sup>0</span></div>
					<hr class="cf-pricing-divider">
					<ul class="cf-pricing-features">
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Lead Capture</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Unlimited proposals</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Proposal builder</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Package Selector pricing</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Payment Plans</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Client Tags</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> 1 team seat</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Track viewed, accepted, and declined proposals</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Collect client feedback and revisions</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Automated status notification emails</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Standalone invoices</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Recurring invoices</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Automated proposal reminders</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Client e-signature</li>
					</ul>
					<a class="button button--ghost plan-button" data-plan-id="48154" style="width:100%; justify-content:center;" href="#">Download free</a>
				</div>

				<!-- PRO -->
				<div class="cf-pricing-tier cf-pricing-tier--featured">
					<span class="cf-pricing-tier__pill">Most popular</span>
					<span class="cf-pricing-tier__name">Pro</span>
					<div class="cf-pricing-tier__month-price"><span><sup>&dollar;</sup>9.99</span><span class="cf-pricing-tier__period">/ month</span></div>
					<div class="cf-pricing-tier__year-price"><span><sup>&dollar;</sup>89</span><span class="cf-pricing-tier__period">/ year</span><span class="cf-save-badge">Save 26%</span></div>
					<hr class="cf-pricing-divider">
					<p class="cf-pricing-features__intro">Everything in Free, plus:</p>
					<ul class="cf-pricing-features">
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Client portal</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Call Booking</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Calendar Sync</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Stripe or PayPal payments</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> "Pay Now" on invoices</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Auto-charge recurring invoices</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Analytics</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Time tracking & hourly billing</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Automated testimonial request</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> 100 AI requests/month</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Email support</li>
					</ul>
					<a class="button button--primary plan-button" data-plan-id="48155" style="width:100%; justify-content:center;" href="#">Get Pro</a>
				</div>

				<!-- AGENCY -->
				<div class="cf-pricing-tier">
					<span class="cf-pricing-tier__name">Agency</span>
					<div class="cf-pricing-tier__month-price"><span><sup>&dollar;</sup>24.99</span><span class="cf-pricing-tier__period">/ month</span></div>
					<div class="cf-pricing-tier__year-price"><span><sup>&dollar;</sup>229</span><span class="cf-pricing-tier__period">/ year</span><span class="cf-save-badge">Save 24%</span></div>
					<hr class="cf-pricing-divider">
					<p class="cf-pricing-features__intro">Everything in Pro, plus:</p>
					<ul class="cf-pricing-features">
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> 10 team seats (up from 1)</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Team timesheets</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> 500 AI requests/month</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Priority email support</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Project &amp; milestone management</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Approval workflows</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Client messaging</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> File uploads</li>
					</ul>
					<a class="button button--ghost plan-button" data-plan-id="48156" style="width:100%; justify-content:center;" href="#">Get Agency</a>
				</div>

			</div>

		</div>
	</section>


	<!-- ═══════════════════════════════════════════════════════════════════════════
     FAQ — Accordion
════════════════════════════════════════════════════════════════════════════════ -->

	<section class="section section--faq menu-section" id="faq">
		<div class="container animated-up">

			<div class="faq-layout">

				<div class="faq-intro">
					<h2 class="section-heading">Common questions</h2>
					<p class="faq-intro__lede">Straight answers about how Client Octopus works, where your data lives and what's free.</p>

					<div class="faq-contact">
						<p class="faq-contact__title">Still have a question?</p>
						<a class="faq-contact__link" href="mailto:info@clientoctopus.com?subject=Website%20Inquiry">Drop us a message &rarr;</a>
					</div>
				</div>

				<div class="accordions-wrapper">


					<div class="accordion">
						<div class="js-accordion-trigger">
							<h3>Do I need WordPress to use Client Octopus?</h3>
						</div>
						<div class="accordion-content">
							<p>Yes. Client Octopus is a self-hosted WordPress plugin that runs directly inside your existing WordPress website. There’s no separate SaaS dashboard, external platform, or additional software to manage.</p>
						</div>
					</div>

					<div class="accordion">
						<div class="js-accordion-trigger">
							<h3>Who is Client Octopus built for?</h3>
						</div>
						<div class="accordion-content">
							<p>Client Octopus is designed for freelancers, studios, and agencies who manage client work and want a more organised workflow for proposals, payments, projects, and client communication — without stitching together multiple tools.</p>
						</div>
					</div>

					<div class="accordion">
						<div class="js-accordion-trigger">
							<h3>Can I collect leads before they become clients?</h3>
						</div>
						<div class="accordion-content">
							<p>Yes, on all plans. Embed the lead capture form on any page with the [clientoctopus_lead_form] shortcode. You choose which fields to show and require, add a consent line, and optionally enable Cloudflare Turnstile CAPTCHA and submission rate limits to help prevent automated spam. Every submission lands in a dedicated Leads admin screen where you can track status, mark as contacted, archive, or convert a lead straight into a client record.</p>
						</div>
					</div>

					<div class="accordion">
						<div class="js-accordion-trigger">
							<h3>Can I let clients or visitors book a call with me?</h3>
						</div>
						<div class="accordion-content">
							<p>Yes, on the Pro and Agency plans. Add the [clientoctopus_booking_form] shortcode to any page and visitors can book a call based on your configured weekly availability, buffer time, minimum notice, and maximum booking window. Both you and the client get a confirmation email with a calendar invite, followed by a 1-hour reminder. Connect Google Calendar, Microsoft 365/Outlook, or Apple iCloud to automatically block your existing events and push confirmed bookings out to your calendar.</p>
						</div>
					</div>

					<div class="accordion">
						<div class="js-accordion-trigger">
							<h3>Can clients view proposals without logging in?</h3>
						</div>
						<div class="accordion-content">
							<p>Yes. Proposals are shared using secure private links, allowing clients to review, accept, request changes, and pay directly from their browser without needing a WordPress account.</p>
						</div>
					</div>

					<div class="accordion">
						<div class="js-accordion-trigger">
							<h3>How do payments work?</h3>
						</div>
						<div class="accordion-content">
							<p>Client Octopus integrates with Stripe or PayPal so clients can pay deposits or full balances directly from proposals, invoices, and project portals. Payment statuses, receipts, and activity are tracked automatically inside WordPress.</p>
						</div>
					</div>

					<div class="accordion">
						<div class="js-accordion-trigger">
							<h3>Does Client Octopus replace my existing tools?</h3>
						</div>
						<div class="accordion-content">
							<p>That’s exactly what it’s built for. Client Octopus combines proposals, payments, project management, client portals, messaging, approvals, analytics, and automation into one connected workflow — reducing the need for multiple disconnected platforms.</p>
						</div>
					</div>

					<div class="accordion">
						<div class="js-accordion-trigger">
							<h3>Where is my data stored?</h3>
						</div>
						<div class="accordion-content">
							<p>Your proposals, projects, files, client records, and activity data stay inside your own WordPress installation and hosting environment. You remain in control of your data at all times.</p>
						</div>
					</div>

					<div class="accordion">
						<div class="js-accordion-trigger">
							<h3>What happens to my data if I uninstall the plugin?</h3>
						</div>
						<div class="accordion-content">
							<p>Nothing — by default, uninstalling Client Octopus only removes the plugin's code. Your proposals, clients, projects, and invoices stay in your database and are there again if you reinstall or upgrade. A permanent-delete option is available under Settings &rarr; Danger Zone if you want to wipe everything for good.</p>
						</div>
					</div>

					<div class="accordion">
						<div class="js-accordion-trigger">
							<h3>Can I customise the client experience?</h3>
						</div>
						<div class="accordion-content">
							<p>Yes. Client Octopus is designed to feel like part of your own business, with branded proposals, client portals, emails, colours, and logos that match your website and workflow.</p>
						</div>
					</div>

					<div class="accordion">
						<div class="js-accordion-trigger">
							<h3>Is there a free version?</h3>
						</div>
						<div class="accordion-content">
							<p>Yes. The free plan includes the core proposal workflow so you can try Client Octopus before upgrading to Pro or Agency for payments, portals, projects, AI tools, collaboration, and advanced workflow features.</p>
						</div>
					</div>

				</div>

			</div>

		</div>
	</section>


	<!-- ═══════════════════════════════════════════════════════════════════════════
     CTA STRIP
════════════════════════════════════════════════════════════════════════════════ -->

	<section class="section section--cta-strip section--gradient">
		<div class="container animated-up">

			<h2>Start free.<br>Upgrade when you're ready.</h2>

			<div class="cta-strip__actions">
				<a class="button button--primary plan-button" data-plan-id="48154" href="#">Get Client Octopus free</a>
				<a class="button button--ghost button--white" href="#pricing">See pricing</a>
			</div>

		</div>
	</section>


</article>

<?php get_footer(); ?>