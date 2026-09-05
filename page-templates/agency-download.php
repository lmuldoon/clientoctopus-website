<?php

/**
 * Unlisted download page for free 6-month Agency licence giveaway recipients.
 * Not linked in navigation, not in sitemap.xml, noindexed.
 */

global $meta;

$meta->title = 'Download Client Octopus Agency — Client Octopus';
$meta->description = 'Download the Client Octopus plugin.';
$meta->noindex = true;

get_header();

?>

<article>

	<div class="sections-header section section--gradient">
		<div class="container">
			<div class="animated-up">
				<h1 class="text-white">Download Client Octopus</h1>
				<p style="color: rgba(255,255,255,0.75);">Thanks for taking part — here's your plugin download.</p>
			</div>
		</div>
	</div>

	<div class="section">
		<div class="container small-text-container">
			<div class="stack animated-up">
				<p>Download the latest version of Client Octopus below, then upload and activate it the same way as any other WordPress plugin (<strong>Plugins &rarr; Add New &rarr; Upload Plugin</strong>).</p>
				<p>Your Agency licence key will be sent to you separately by email — activate it under <strong>Client Octopus &rarr; Account</strong> once the plugin is installed.</p>

				<a class="button button--primary" href="/static/downloads/clientoctopus-premium.1.3.1.zip" download>Download Client Octopus (v1.3.1)</a>
			</div>
		</div>
	</div>

</article>

<?php get_footer(); ?>
