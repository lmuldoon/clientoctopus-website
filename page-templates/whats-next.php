<?php

/**
 * Homepage — Client Octopus
 */

global $meta;

$meta->title = 'What\'s Next - Client Octopus';
$meta->description = 'Explore what’s next for Client Octopus — upcoming features, improvements, and roadmap updates as we continue building the client workflow platform for WordPress.';
$meta->slug = 'whats-next';

get_header();

?>

<article>

	<!-- ═══════════════════════════════════════════════════════════════════════════
     HERO — Apple variant
════════════════════════════════════════════════════════════════════════════════ -->

	<section class="hero section--gradient">
		<div class="container">
			<div class="hero__inner">

				<h1 class="text-white">The future of Client Octopus is already in motion</h1>

				<p class="hero__lede text-white">From smarter proposal workflows to deeper integrations and agency-focused tools, we're building Client Octopus to become the central platform for managing client work inside WordPress.</p>

				<div class="hero__actions">
					<a class="button button--primary" href="#">Get Client Octopus free</a>
				</div>

			</div>
		</div>
	</section>


	<section class="section section--replaces bg-white">
		<div class="container animated-up">

			<p class="section-eyebrow">Roadmap</p>
			<h2 class="section-heading">What we're working on next</h2>
			<p class="section-lede">Client Octopus is evolving into a complete client workflow platform for freelancers and agencies. These upcoming features focus on improving proposal conversion, payment flexibility, automation, collaboration, and integrations — helping you manage more client work with less friction.</p>
			<div class="card-grid card-grid-3 animated-up">

				<div class="card card--before stack">
					<span class="card__title text-indigo">Flexible payments & smarter proposals</span>
					<p class="section-lede">Upcoming improvements focused on helping you close more deals, increase project value, and give clients more flexible ways to move forward.</p>
					<div>
						<ul class="card-list">
							<li>Payment plans & instalments</li>
							<li>Accept now, pay later workflows</li>
							<li>Optional proposal upsells</li>
							<li>Discount & promo codes</li>
						</ul>
					</div>
				</div>

				<div class="card card--before stack">
					<span class="card__title text-indigo">Faster workflows for growing agencies</span>
					<p class="section-lede">New tools designed to help agencies standardise processes, reduce repetitive work, and manage larger volumes of client projects more efficiently.</p>
					<div>
						<ul class="card-list">
							<li>Reusable custom proposal templates</li>
							<li>AI-generated proposal drafts</li>
							<li>Time tracking & profitability insights</li>
							<li>Team collaboration improvements</li>
						</ul>
					</div>
				</div>

				<div class="card card--before stack">
					<span class="card__title text-indigo">Connect Client Octopus to your existing stack</span>
					<p class="section-lede">Expand your workflow with integrations and automations that keep your proposals, payments, projects, and notifications connected across the tools you already use.</p>
					<div>
						<ul class="card-list">
							<li>Xero & QuickBooks syncing</li>
							<li>Slack notifications</li>
							<li>Calendly & Cal.com integrations</li>
							<li>Expanded webhook events</li>
						</ul>
					</div>
				</div>

			</div>

		</div>
	</section>


</article>

<?php get_footer(); ?>