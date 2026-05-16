<?php

/**
 * Terms & Privacy Policy page.
 */

global $meta;

$meta->title = 'Terms & Privacy Policy — Client Octopus';
$meta->description = 'Terms of use and privacy policy for Client Octopus and clientoctopus.com.';

get_header();

?>

<article>

	<div class="sections-header section section--gradient">
		<div class="container">
			<div class="animated-up">
				<h1 class="text-white">Terms &amp; Privacy Policy</h1>
				<p style="color: rgba(255,255,255,0.75);">Last updated: May 2026</p>
			</div>
		</div>
	</div>

	<div class="section">
		<div class="container animated-up">
			<div class="text-container content">

				<h2 class="mt-0">Terms of Use</h2>

				<h3>Use of the plugin</h3>
				<p>Client Octopus is a WordPress plugin distributed under the <a href="https://www.gnu.org/licenses/gpl-2.0.html" target="_blank" rel="noopener">GNU General Public License v2.0 or later (GPL-2.0+)</a>. You are free to use, modify and distribute the plugin subject to the terms of that licence.</p>

				<h3>Pro licence</h3>
				<p>Client Octopus Pro licences are sold through Freemius. By purchasing a licence you agree to the Freemius <a href="https://freemius.com/terms/" target="_blank" rel="noopener">Terms of Service</a>. Licences are per-site and non-transferable unless otherwise stated at the time of purchase.</p>
				<p>Refunds are available within 30 days of purchase if the plugin does not work as described and the issue cannot be resolved through support. Refund requests should be made via the support contact on this site.</p>

				<h3>Limitation of liability</h3>
				<p>Client Octopus is provided "as is", without warranty of any kind. We are not liable for any direct, indirect, incidental or consequential damages arising from your use of the plugin, including but not limited to email delivery failures, data loss or API service interruptions from third-party platforms.</p>

				<h3>Third-party services</h3>
				<p>Client Octopus integrates with <strong>Stripe</strong> for payment processing. Use of Stripe is subject to the <a href="https://stripe.com/gb/legal/ssa" target="_blank" rel="noopener">Stripe Services Agreement</a> and <a href="https://stripe.com/gb/privacy" target="_blank" rel="noopener">Stripe Privacy Policy</a>. Client Octopus passes payment data directly to Stripe via their API and does not store card details within your WordPress installation.</p>

				<hr>

				<h2>Privacy Policy</h2>

				<h3>This website (clientoctopus.com)</h3>
				<p>This site uses cookies and similar technologies. Some are strictly necessary for the site to function; others are used for analytics purposes to help us understand how visitors use the site and how we can improve it.</p>

				<h4>Analytics</h4>
				<p>We use <strong>Google Analytics</strong> to collect anonymised data about site usage — such as pages visited, time on site, and general geographic region. This data is aggregated and does not identify you personally. Google Analytics cookies are only set if you have consented to analytics cookies. For more information on how Google handles data collected via Analytics, see <a href="https://policies.google.com/privacy" target="_blank" rel="noopener">Google's Privacy Policy</a>.</p>

				<h4>Cookie consent</h4>
				<p>We use <strong>CookieHub</strong> to manage cookie consent on this site. When you first visit, a banner will invite you to accept or decline non-essential cookies. You can review or change your preferences at any time using the button below.</p>

				<p><a class="button button--ghost button--sm" href="javascript:void 0" onclick="window.cookiehub.openSettings(); document.querySelector('[href=\'#ch2-declaration\']').click();">Manage Cookie Preferences</a></p>

				<h4>Contact and enquiries</h4>
				<p>If you contact us via a form or email, we retain your message and contact details solely for the purpose of responding to your enquiry. We do not sell or share your personal information with third parties.</p>

				<h3>The Client Octopus plugin</h3>
				<p>The Client Octopus plugin itself does not collect, transmit or store any personal data from your website visitors. It operates entirely within your WordPress installation.</p>


				<h4>Freemius licensing</h4>
				<p>Client Octopus uses <a href="https://freemius.com" target="_blank" rel="noopener">Freemius</a> for licence management. Freemius may collect diagnostic and usage data from your WordPress installation as part of the licence activation process. You can opt out during activation. Please refer to the <a href="https://freemius.com/privacy/" target="_blank" rel="noopener">Freemius Privacy Policy</a> for full details of what data is collected and how it is used.</p>

				<h3>Contact</h3>
				<p>If you have questions about this policy or wish to request deletion of any data we hold, please contact us at <a href="mailto:info@clientoctopus.com">info@clientoctopus.com</a>.</p>

			</div>
		</div>
	</div>

</article>

<?php get_footer(); ?>
