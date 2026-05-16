<?php

/**
 * The 404 page of the site.
 */

$meta->title = '404 Page Not Found — Client Octopus';
$meta->description = 'We couldn\'t find the page you were looking for.';

get_header();

?>

<article>

	<div class="sections-header section bg-indigo">
		<div class="container">
			<div class="animated-up" style="text-align: center;">
				<p class="text-white" style="font-size: var(--size-800); font-weight: 700; line-height: 1; margin-bottom: 1rem; letter-spacing: -0.04em;">404</p>
				<h1 class="text-white" style="margin-bottom: 1rem;">Page not found</h1>
				<p style="color: rgba(255,255,255,0.65); max-width: 480px; margin-inline: auto; margin-bottom: 2rem;">The page you were looking for doesn't exist or may have been moved. Check the URL, or head back to the homepage.</p>
				<a class="button button--primary button--navy" href="/">Back to Home</a>
			</div>
		</div>
	</div>

</article>

<?php get_footer(); ?>
