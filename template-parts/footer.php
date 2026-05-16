<?php

/**
 * The footer of the site.
 */

global $meta;

?>

</main> <!-- /.site-main -->

	<footer class="site-footer" role="contentinfo">
		<div class="container">
			<div class="site-footer__inner animated-up">

				<div class="site-footer__brand">
					<a href="/" aria-label="Client Octopus home">
						<?php include_asset('static/logo.svg'); ?>
					</a>
					<p class="site-footer__tagline">The client OS for WordPress freelancers.</p>
				</div>

				<div class="site-footer__col">
					<span class="site-footer__col-title">Product</span>
					<ul>
						<li><a href="/how-it-works">How it works</a></li>
						<li><a href="/#pricing">Pricing</a></li>
						<li><a href="/whats-next">What's next</a></li>
						<li><a href="/changelog">Changelog</a></li>
					</ul>
				</div>

				<div class="site-footer__col">
					<span class="site-footer__col-title">Resources</span>
					<ul>
						<li><a href="/docs">Documentation</a></li>
						<li><a href="/#faq">FAQ</a></li>
						<li><a href="https://customers.freemius.com/store/13667" target="_blank" rel="noopener">Manage licence</a></li>
					</ul>
				</div>

				<div class="site-footer__col">
					<span class="site-footer__col-title">Company</span>
					<ul>
						<li><a href="/terms-privacy">Terms &amp; Privacy</a></li>
						<!-- <li><a href="https://wordpress.org/plugins/clientoctopus/" target="_blank" rel="noopener">WordPress.org</a></li> -->
					</ul>
				</div>

			</div>

			<div class="site-footer__bottom">
				<p class="site-footer__copy">&copy; <?php echo date('Y'); ?> <a href="https://codievolt.com" target="_blank" rel="noopener">Codievolt</a>. All rights reserved.</p>
			</div>
		</div>
	</footer> <!-- /.site-footer -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="/<?php echo get_revision('footer.js'); ?>"></script>
</body>

</html>
