<?php

/**
 * Homepage — Client Octopus
 */

global $meta;

$meta->title = 'How It Works - Client Octopus';
$meta->description = 'Learn how Client Octopus works — create proposals, send them to clients, collect payments, and manage the entire client workflow inside WordPress.';
$meta->slug = 'how-it-works';

get_header();

?>

<article>

	<!-- ═══════════════════════════════════════════════════════════════════════════
     HERO — Apple variant
════════════════════════════════════════════════════════════════════════════════ -->

	<section class="hero section--gradient">
		<div class="container">
			<div class="hero__inner">

				<h1 class="text-white">Everything from proposal to delivery in one workflow</h1>

				<p class="hero__lede text-white">Client Octopus connects proposals, payments, projects, client communication, and delivery into one seamless system inside WordPress.</p>

				<div class="hero__actions">
					<a class="button button--primary plan-button" data-plan-id="48154" href="#">Get Client Octopus free</a>
				</div>

			</div>
		</div>
	</section>


	<!-- ═══════════════════════════════════════════════════════════════════════════
     REPLACES — Before vs After
════════════════════════════════════════════════════════════════════════════════ -->

	<section class="section section--feature">
		<div class="container animated-up">
			<p class="section-eyebrow">Proposals</p>
			<h2 class="section-heading">Create proposals that look professional and close faster</h2>
			<p class="section-lede">Build polished client proposals in minutes with a guided workflow, reusable templates, automated pricing calculations, and AI-assisted writing. Send proposals through a branded client experience where clients can review, request changes, accept, and pay — all from a secure link without needing an account.</p>

			<p class="section-lede">Client Octopus handles the entire proposal lifecycle for you, from draft to payment, with built-in tracking, automated notifications, Stripe integration, and seamless project creation when work is approved.</p>
		</div>
	</section>


	<section class="section section--feature pt-0">
		<div class="container">
			<div class="feature__container">
				<div class="feature__content stack animated-up">
					<h3>Build proposals in minutes</h3>
					<p>Client Octopus includes a guided 5-step proposal builder with customisable templates, AI-assisted writing, and drag-and-drop content sections to help you create polished proposals quickly. It also supports dynamic pricing with VAT, discounts, deposits, and multi-currency handling to keep every proposal accurate and client-ready.</p>
				</div>
				<div class="feature__image animated-up">
					<img src="/static/images/screenshots/proposal-template-wizard.jpg?v=1" alt="Wordpress plugin Client Octopus proposal builder" width="1675" height="1712" loading="lazy" />
				</div>
			</div>
		</div>
	</section>

	<section class="section section--feature pt-0">
		<div class="container">
			<div class="feature__container feature__container-right">
				<div class="feature__content stack animated-up">
					<h3>Give clients a smoother approval experience</h3>
					<p>Client Octopus lets you securely share proposals via email with one click, where clients can accept, decline, or request revisions, with Stripe payments available on acceptance. It also provides real-time proposal status tracking, email notifications, and fully mobile-friendly proposal pages for a smooth client experience across devices.</p>
				</div>
				<div class="feature__image animated-up">
					<div class="browser-frame">
						<div class="browser-frame__bar">
							<span class="browser-dot"></span>
							<span class="browser-dot"></span>
							<span class="browser-dot"></span>
							<!-- <span class="browser-frame__url">wpClient Octopus.co.uk/wp-admin/admin.php?page=Client Octopus</span> -->
						</div>
						<div class="browser-frame__content">
							<img src="/static/images/screenshots/client-proposal.jpg?v=2" alt="Wordpress plugin Client Octopus proposal example" width="1600" height="3538" loading="lazy" />
						</div>
					</div>
					<!-- <img src="/static/images/screenshots/client-proposal.jpg?v=1" alt="WP Mailblox editor" width="1920" height="1080" /> -->
				</div>
			</div>
		</div>
	</section>

	<section class="section section--feature bg-stone">
		<div class="container animated-up">
			<p class="section-eyebrow">Payments</p>
			<h2 class="section-heading">Get paid faster without leaving WordPress</h2>
			<p class="section-lede">Turn accepted proposals into real payments instantly with built-in Stripe integration, automated deposit handling, and seamless client checkout flows. Client Octopus keeps proposals, invoices, payment requests, and project balances connected in one system — so you always know what's been paid, what's outstanding, and what happens next.</p>

			<p class="section-lede">From deposits to final balances, the payment experience is designed to feel simple for clients and effortless for you.</p>
		</div>
	</section>


	<section class="section section--feature pt-0 bg-stone">
		<div class="container">
			<div class="feature__container">
				<div class="feature__content stack animated-up">
					<h3>A smoother payment experience for you and your clients</h3>
					<p>Clients can review pricing, pay deposits or final balances, download receipts, and complete the entire approval process directly from their proposal or client portal — without separate invoices, confusing payment links, or endless email follow-ups.</p>
					<p>Automatic payment tracking, receipt generation, and email notifications keep every stage of the payment lifecycle organised for both sides.</p>
				</div>
				<div class="feature__image animated-up">
					<img src="/static/images/screenshots/client-payment-confirmed.jpg?v=1" alt="Wordpress plugin Client Octopus payment confirmation" width="1675" height="2310" loading="lazy" />
				</div>
			</div>
		</div>
	</section>





	<section class="section section--feature">
		<div class="container animated-up">
			<p class="section-eyebrow">Projects</p>
			<h2 class="section-heading">Keep every client project organised in one place</h2>
			<p class="section-lede">When a proposal is accepted, Client Octopus automatically creates a project workspace where you can manage progress, track activity, communicate with clients, and keep everything related to the job connected in one system.</p>

			<p class="section-lede">Instead of juggling email threads, shared drives, and separate project tools, every project stays organised inside your WordPress dashboard — from kickoff to final delivery.</p>
		</div>
	</section>


	<section class="section section--feature pt-0">
		<div class="container">
			<div class="feature__container feature__container-right">
				<div class="feature__content stack animated-up">
					<h3>Turn approved work into structured projects automatically</h3>
					<p>Accepted proposals instantly become active projects with timelines, activity tracking, client messaging, file management, and status updates already connected. Your team and clients always know what's happening, what's been delivered, and what still needs attention.</p>

					<p>Everything stays centralised, searchable, and tied to the original proposal and payment history — giving you a cleaner workflow and a more professional client experience.</p>
				</div>
				<div class="feature__image animated-up">
					<img src="/static/images/screenshots/admin-project.jpg?v=1" alt="Wordpress plugin Client Octopus project interface" width="1920" height="1493" loading="lazy" />
				</div>
			</div>
		</div>
	</section>




	<section class="section section--feature bg-stone">
		<div class="container animated-up">
			<p class="section-eyebrow">Client Portal</p>
			<h2 class="section-heading">Give clients a professional portal they'll actually use</h2>
			<p class="section-lede">Client Octopus includes a dedicated client portal where clients can view proposals, track project progress, upload files, review deliverables, download receipts, and stay connected throughout the entire project lifecycle.</p>
			<p class="section-lede">Instead of relying on scattered email threads and shared folders, clients get one branded space to access everything related to their work — directly inside your WordPress site.</p>
		</div>
	</section>


	<section class="section section--feature pt-0 bg-stone">
		<div class="container">
			<div class="feature__container">
				<div class="feature__content stack animated-up">
					<h3>Everything your clients need in one secure place</h3>
					<p>Clients can log in to a clean, branded portal to review proposals, approve deliverables, send messages, access shared files, and manage payments without needing separate tools or accounts across multiple platforms.</p>

					<p>The portal keeps communication, project activity, files, and approvals organised in one streamlined experience that feels modern, professional, and easy to use.</p>
				</div>
				<div class="feature__image animated-up">
					<img src="/static/images/screenshots/client-dashboard.jpg?v=2" alt="Wordpress plugin Client Octopus client dashboard" width="1920" height="1197" loading="lazy" />
				</div>
			</div>
		</div>
	</section>


	<section class="section section--feature">
		<div class="container animated-up">
			<p class="section-eyebrow">Notifications</p>
			<h2 class="section-heading">Keep clients informed automatically at every stage</h2>
			<p class="section-lede">Client Octopus sends automated email notifications throughout the entire client lifecycle — from proposal delivery and payment confirmations to project updates, approval requests, and completed work notifications.</p>

			<p class="section-lede">Every interaction stays clear, professional, and timely without requiring manual follow-ups or repetitive admin work.</p>
		</div>
	</section>


	<section class="section section--feature pt-0">
		<div class="container">
			<div class="feature__container feature__container-right">
				<div class="feature__content stack animated-up">
					<h3>Professional communication without the constant follow-ups</h3>
					<p>Clients automatically receive branded email notifications whenever proposals are viewed, payments are completed, files are shared, approvals are requested, or project statuses change — helping projects move forward without missed messages or confusion.</p>

					<p>For you, that means fewer manual emails, fewer “just checking in” conversations, and a smoother experience for everyone involved.</p>
				</div>
				<div class="feature__image animated-up">
					<img src="/static/images/screenshots/client-email.jpg?v=2" alt="Wordpress plugin Client Octopus email notification" width="1675" height="1858" loading="lazy" />
				</div>
			</div>
		</div>
	</section>



	<section class="section section--feature bg-stone">
		<div class="container animated-up">
			<p class="section-eyebrow">Analytics</p>
			<h2 class="section-heading">Understand how your business is performing at a glance</h2>
			<p class="section-lede">Client Octopus gives you a clear overview of your proposal pipeline, revenue, and conversion performance so you can understand how your business is growing over time. Track proposal acceptance rates, monitor revenue trends, measure average time-to-close, and see how efficiently proposals are turning into paid work.</p>

			<p class="section-lede">Everything is centralised into one reporting dashboard designed specifically for freelancers and agencies managing client projects inside WordPress.</p>
		</div>
	</section>


	<section class="section section--feature pt-0 bg-stone">
		<div class="container">
			<div class="feature__container">
				<div class="feature__content stack animated-up">
					<h3>Track revenue, proposal performance, and business growth in real time</h3>
					<p>View revenue over time, proposal conversion rates, average close times, recent activity, and proposal performance through a clean analytics dashboard with filters for this week, month, or year.</p>

					<p>Client Octopus also lets you export reporting data as CSV files, making it easy to share insights, analyse performance externally, or keep records for your business reporting workflows.</p>
				</div>
				<div class="feature__image animated-up">
					<img src="/static/images/screenshots/admin-analytics.jpg?v=1" alt="Wordpress plugin Client Octopus analytics interface" width="1920" height="1663" loading="lazy" />
				</div>
			</div>
		</div>
	</section>


	<section class="section section--feature">
		<div class="container animated-up">
			<p class="section-eyebrow">Webhooks & Automation</p>
			<h2 class="section-heading">Connect Client Octopus to the tools you already use</h2>
			<p class="section-lede">Client Octopus includes webhook and automation support so every key action in your workflow can trigger external tools, internal systems, or third-party integrations. From proposal creation and acceptance to payments, project updates, and completion events — you can automate your entire client lifecycle without manual intervention.</p>

			<p class="section-lede">Build workflows that connect Client Octopus to your existing stack and remove repetitive admin work from your day-to-day process.</p>
		</div>
	</section>


	<section class="section section--feature pt-0">
		<div class="container">
			<div class="feature__container feature__container-right">
				<div class="feature__content stack animated-up">
					<h3>Automate your client workflow end-to-end</h3>
					<p>Trigger real-time webhooks when proposals are sent, viewed, accepted, or declined, when payments are completed, or when projects are created and updated. Connect Client Octopus to tools like Zapier, CRMs, project management platforms, spreadsheets, and internal systems to automate your entire workflow.</p>
					<p>With flexible event-based automation, Client Octopus becomes the central source of truth for your entire client workflow — powering everything from onboarding to delivery without manual updates.</p>
				</div>
				<div class="feature__image animated-up">
					<img src="/static/images/screenshots/admin-webhooks.jpg?v=1" alt="Wordpress plugin Client Octopus webhooks interface" width="1920" height="1107" loading="lazy" />
				</div>
			</div>
		</div>
	</section>

	<section class="section section--cta-strip bg-lightindigo">
		<div class="container animated-up">

			<h2>Ready to streamline your client workflow?</h2>
			<p>Join freelancers and agencies using Client Octopus to manage proposals, payments, projects, and delivery from one connected platform.</p>

			<div class="cta-strip__actions">
				<a class="button button--primary plan-button" data-plan-id="48154" href="#">Get Client Octopus free</a>
				<a class="button button--ghost" href="/#pricing">See pricing</a>
			</div>

		</div>
	</section>


</article>

<?php get_footer(); ?>