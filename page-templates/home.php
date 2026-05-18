<?php

/**
 * Homepage — Client Octopus
 */

global $meta;

$meta->title = 'Client Octopus — The Client OS for WordPress Freelancers';
$meta->description = 'Create proposals, take payments, and manage clients through a white-label portal — all inside your WordPress site.';
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

				<p class="hero__lede">Create proposals, get paid, and manage your clients in one simple system &mdash; all inside the WordPress site you already own.</p>

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
					<img src="/static/images/screenshots/admin-plan-usage.jpg?v=1" alt="Wordpress plugin Client Octopus admin dashboard" width="1920" height="1180" />
				</div>
			</div>
		</div>
	</section>


	<!-- ═══════════════════════════════════════════════════════════════════════════
     REPLACES — Before vs After
════════════════════════════════════════════════════════════════════════════════ -->

	<section class="section section--replaces bg-white">
		<div class="container animated-up">

			<p class="section-eyebrow">Eight jobs. One plugin.</p>
			<h2 class="section-heading">Running client work shouldn't require multiple tools</h2>
			<p class="section-lede">Most freelancers juggle proposals, invoices, email threads, Google Drive, and project trackers just to deliver one project.</p>
			<p class="section-lede">Client Octopus brings the entire client lifecycle into WordPress — from proposal to payment to delivery.</p>
			<div class="card-grid">

				<div class="card card--before">
					<span class="card__title">Before Client Octopus</span>
					<ul class="card-list">
						<li><iconify-icon class="card-list__icon card-list__icon--no" icon="lucide:x" width="14" height="14"></iconify-icon><span>PDF proposals</span></li>
						<li><iconify-icon class="card-list__icon card-list__icon--no" icon="lucide:x" width="14" height="14"></iconify-icon><span>Payment links</span></li>
						<li><iconify-icon class="card-list__icon card-list__icon--no" icon="lucide:x" width="14" height="14"></iconify-icon><span>Endless email threads</span></li>
						<li><iconify-icon class="card-list__icon card-list__icon--no" icon="lucide:x" width="14" height="14"></iconify-icon><span>"Did you receive the invoice?"</span></li>
						<li><iconify-icon class="card-list__icon card-list__icon--no" icon="lucide:x" width="14" height="14"></iconify-icon><span>Scattered client files</span></li>
					</ul>
				</div>

				<div class="card card--after">
					<span class="card__title card__title--after">After Client Octopus</span>
					<ul class="card-list">
						<li><iconify-icon class="card-list__icon card-list__icon--yes" icon="lucide:check" width="14" height="14"></iconify-icon><span>One proposal flow</span></li>
						<li><iconify-icon class="card-list__icon card-list__icon--yes" icon="lucide:check" width="14" height="14"></iconify-icon><span>Instant payments</span></li>
						<li><iconify-icon class="card-list__icon card-list__icon--yes" icon="lucide:check" width="14" height="14"></iconify-icon><span>Client portal</span></li>
						<li><iconify-icon class="card-list__icon card-list__icon--yes" icon="lucide:check" width="14" height="14"></iconify-icon><span>Project tracking</span></li>
						<li><iconify-icon class="card-list__icon card-list__icon--yes" icon="lucide:check" width="14" height="14"></iconify-icon><span>Automatic notifications</span></li>
						<li><iconify-icon class="card-list__icon card-list__icon--yes" icon="lucide:check" width="14" height="14"></iconify-icon><span>Approvals + delivery</span></li>
					</ul>
				</div>

			</div>

		</div>
	</section>



	<!-- ═══════════════════════════════════════════════════════════════════════════
     PIPELINE — Interactive stepper
════════════════════════════════════════════════════════════════════════════════ -->

	<section class="section section--pipeline menu-section bg-stone">
		<div class="container animated-up">

			<p class="section-eyebrow">How it works</p>
			<h2 class="section-heading">One workflow from proposal to delivery</h2>
			<p class="section-lede">From the first proposal to the final payment, Client Octopus keeps your entire client workflow connected inside WordPress.</p>

			<div class="pipeline-stepper">

				<div class="pipeline-track">
					<button class="pipeline-step" data-stage="0" type="button">
						<span class="pipeline-step__dot">01</span>
						<span class="pipeline-step__label">Proposal</span>
					</button>
					<button class="pipeline-step" data-stage="1" type="button">
						<span class="pipeline-step__dot">02</span>
						<span class="pipeline-step__label">Payments</span>
					</button>
					<button class="pipeline-step" data-stage="2" type="button">
						<span class="pipeline-step__dot">03</span>
						<span class="pipeline-step__label">Projects</span>
					</button>
					<button class="pipeline-step" data-stage="3" type="button">
						<span class="pipeline-step__dot">04</span>
						<span class="pipeline-step__label">Delivery</span>
					</button>
					<!-- <button class="pipeline-step" data-stage="5" type="button">
						<span class="pipeline-step__dot">05</span>
						<span class="pipeline-step__label">Retention</span>
					</button> -->
				</div>

				<div class="pipeline-panel is-active">

					<div class="pipeline-panel__content">
						<h3 class="pipeline-panel__headline">Proposals that close themselves</h3>
						<p class="pipeline-panel__desc">
							Create professional proposals in minutes, send them with one click, and let clients review and accept instantly — no PDFs, no back-and-forth.
						</p>
						<ul class="features__list">
							<li>Pre-built templates</li>
							<li>Guided 5-step proposal builder</li>
							<li>Secure client approval links</li>
							<li>AI-assisted proposal writing</li>
						</ul>
					</div>

					<div class="pipeline-screenshot" aria-hidden="true">
						<img src="/static/images/screenshots/proposal-template-wizard.jpg?v=1" alt="Wordpress plugin Client Octopus proposal builder" width="1675" height="1712" />
					</div>

				</div>

				<div class="pipeline-panel">

					<div class="pipeline-panel__content">
						<h3 class="pipeline-panel__headline">Get paid without friction</h3>
						<p class="pipeline-panel__desc">
							Turn accepted proposals into payments instantly with built-in Stripe integration, including deposits and remaining balances — all tracked automatically.
						</p>
						<ul class="features__list">
							<li>Accept deposits and final payments</li>
							<li>One-click "accept & pay" flow</li>
							<li>Payment status tracking</li>
							<li>Automatic email notifications</li>
						</ul>
					</div>

					<div class="pipeline-screenshot" aria-hidden="true">
						<img src="/static/images/screenshots/admin-payment-notification.jpg?v=1" alt="Wordpress plugin Client Octopus payment notification email" width="1264" height="1058" />
					</div>

				</div>

				<div class="pipeline-panel">

					<div class="pipeline-panel__content">
						<h3 class="pipeline-panel__headline">Keep every project organised</h3>
						<p class="pipeline-panel__desc">
							As soon as a proposal is accepted, a project is created automatically — keeping all client activity, messages, and progress organised in one place.
						</p>
						<ul class="features__list">
							<li>Automatic project creation</li>
							<li>Project status tracking</li>
							<li>Client messaging</li>
							<li>Activity timeline</li>
						</ul>
					</div>

					<div class="pipeline-screenshot" aria-hidden="true">
						<img src="/static/images/screenshots/admin-project-2.jpg?v=1" alt="Wordpress plugin Client Octopus admin project interface" width="1920" height="1441" />
					</div>

				</div>

				<div class="pipeline-panel">

					<div class="pipeline-panel__content">
						<h3 class="pipeline-panel__headline">Deliver work in one place</h3>
						<p class="pipeline-panel__desc">
							Collaborate with clients through a dedicated portal where you can share files, request approvals, and keep everything aligned until the work is complete.
						</p>
						<ul class="features__list">
							<li>Dedicated client portal</li>
							<li>File uploads and sharing</li>
							<li>Approval requests</li>
							<li>Final payment requests</li>
						</ul>
					</div>

					<div class="pipeline-screenshot" aria-hidden="true">
						<img src="/static/images/screenshots/client-dashboard.jpg?v=1" alt="Wordpress plugin Client Octopus client dashboard" width="1920" height="1434" />
					</div>

				</div>
			</div>


		</div>
		<div class="container animated-up pt-12 md:pt-20 lg:pt-24">
			<p class="section-eyebrow">Beyond the workflow</p>
			<h2 class="section-heading">See everything Client Octopus can do</h2>
			<p class="section-lede mb-10">
				Explore proposals, projects, client portals, analytics, notifications, integrations, and automation tools built to streamline your entire client process.
			</p>
			<a class="button button--primary" href="/how-it-works">
				View Full Platform
			</a>
		</div>
	</section>

	<!-- ═══════════════════════════════════════════════════════════════════════════
     FEATURES GRID — 6 cells, 3 × 2
════════════════════════════════════════════════════════════════════════════════ -->

	<section class="section section--features menu-section" id="features">
		<div class="container animated-up">

			<div class="features-heading-block">
				<p class="section-eyebrow">Why Client Octopus</p>
				<h2 class="section-heading">Run your entire client workflow from one place</h2>
			</div>

			<div class="cf-features-grid">

				<div class="feature-cell">
					<div class="feature-cell__icon">
						<iconify-icon icon="lucide:file-text" width="22" height="22"></iconify-icon>
					</div>
					<h3>From proposal to payment</h3>
					<p>Create proposals, collect deposits, request final balances, and track payments without switching between multiple tools.</p>
				</div>

				<div class="feature-cell">
					<div class="feature-cell__icon">
						<iconify-icon icon="lucide:layout-dashboard" width="22" height="22"></iconify-icon>
					</div>
					<h3>A professional client experience</h3>
					<p>Give clients a branded portal where they can review proposals, pay invoices, approve work, download files, and track progress.</p>
				</div>

				<div class="feature-cell">
					<div class="feature-cell__icon">
						<iconify-icon icon="lucide:users" width="22" height="22"></iconify-icon>
					</div>
					<h3>Built for freelancers & agencies</h3>
					<p>Designed specifically for client-based businesses managing proposals, projects, payments, and ongoing communication.</p>
				</div>

				<div class="feature-cell">
					<div class="feature-cell__icon">
						<iconify-icon icon="lucide:shield-check" width="22" height="22"></iconify-icon>
					</div>
					<h3>Everything stays inside WordPress</h3>
					<p>Your proposals, projects, files, and client data stay on infrastructure you already own and control.</p>
				</div>

				<div class="feature-cell">
					<div class="feature-cell__icon">
						<iconify-icon icon="lucide:zap" width="22" height="22"></iconify-icon>
					</div>
					<h3>Automate repetitive admin work</h3>
					<p>Trigger emails, payment requests, project creation, and external workflows automatically with built-in automation and webhooks.</p>
				</div>

				<div class="feature-cell">
					<div class="feature-cell__icon">
						<iconify-icon icon="lucide:sparkles" width="22" height="22"></iconify-icon>
					</div>
					<h3>AI-assisted proposal writing</h3>
					<p>Generate proposal sections, improve wording, and create persuasive client-ready copy in seconds using built-in AI tools.</p>
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
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> 3 proposals per month</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Proposal builder</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> 1 team seat</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Track viewed, accepted, and declined proposals</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Collect client feedback and revisions</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Automated status notification emails</li>
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
					<ul class="cf-pricing-features">
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Unlimited proposals</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Proposal builder</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> 1 team seat</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Track viewed, accepted, and declined proposals</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Collect client feedback and revisions</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Automated status notification emails</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Client portal</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Stripe payments</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Analytics</li>
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
					<ul class="cf-pricing-features">
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Unlimited proposals</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Proposal builder</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> 5 team seats</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Track viewed, accepted, and declined proposals</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Collect client feedback and revisions</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Automated status notification emails</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Client portal</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Stripe payments</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Analytics</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Automated testimonial request</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> 500 AI requests/month</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Priority email support</li>
						<li><span class="cf-check"><iconify-icon icon="lucide:check" width="12" height="12"></iconify-icon></span> Project & milestone management</li>
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

			<p class="section-eyebrow">FAQ</p>
			<h2 class="section-heading">Common questions</h2>

			<div class="faq-layout">
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
							<p>Client Octopus integrates with Stripe so clients can pay deposits or full balances directly from proposals and project portals. Payment statuses, receipts, and activity are tracked automatically inside WordPress.</p>
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

				<div class="faq-contact">
					<p>Still have a question? <a href="mailto:info@clientoctopus.com?subject=Website%20Inquiry">Drop us a message →</a></p>
				</div>
			</div>

		</div>
	</section>


	<!-- ═══════════════════════════════════════════════════════════════════════════
     CTA STRIP
════════════════════════════════════════════════════════════════════════════════ -->

	<section class="section section--cta-strip bg-lightindigo">
		<div class="container animated-up">

			<h2>Stop running your business<br>across seven different tools</h2>
			<p>Get Client Octopus free and see how much simpler it can be to run client work from inside WordPress.</p>

			<div class="cta-strip__actions">
				<a class="button button--primary plan-button" data-plan-id="48154" href="#">Get Client Octopus free</a>
				<a class="button button--ghost" href="#pricing">See pricing</a>
			</div>

		</div>
	</section>


</article>

<?php get_footer(); ?>