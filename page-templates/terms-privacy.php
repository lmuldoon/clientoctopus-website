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
				<p>Client Octopus is designed to run primarily within WordPress. Some optional features connect to third-party services, and these connections are only used when the relevant feature is enabled or used.</p>

				<p><strong>Stripe and PayPal.</strong> Client Octopus integrates with <strong>Stripe</strong> and <strong>PayPal</strong> for payment processing — you choose one as your active payment provider. Use of Stripe is subject to the <a href="https://stripe.com/gb/legal/ssa" target="_blank" rel="noopener">Stripe Services Agreement</a> and <a href="https://stripe.com/gb/privacy" target="_blank" rel="noopener">Stripe Privacy Policy</a>. Use of PayPal is subject to the <a href="https://www.paypal.com/uk/webapps/mpp/ua/useragreement-full" target="_blank" rel="noopener">PayPal User Agreement</a> and <a href="https://www.paypal.com/uk/webapps/mpp/ua/privacy-full" target="_blank" rel="noopener">PayPal Privacy Statement</a>. Client Octopus passes payment data directly to whichever provider is active via their API and does not store card details within your WordPress installation. If a recurring invoice profile has auto-charge enabled, a reference to the client's payment method (never the underlying card number) is saved with the active provider after their first payment, so future invoices on that profile can be charged automatically.</p>

				<p><strong>Client Octopus Relay.</strong> The plugin's AI writing tools and Google/Microsoft Calendar Sync both route through a relay service operated by the plugin author (clientoctopus.com). The relay authenticates your licence and, depending on the feature, either forwards a request to an AI model or manages your connected Google/Microsoft calendar on your behalf — a single relay-owned OAuth application is used for every install rather than each site registering its own, and your calendar's access tokens are stored on the relay rather than in your WordPress database. These features only run when you explicitly use an AI writing action, or explicitly connect Google Calendar or Microsoft 365 in Settings. See the <a href="https://clientoctopus.clientoctopus.com/privacy-policy/" target="_blank" rel="noopener">Client Octopus Relay Privacy Policy</a>.</p>

				<p><strong>Apple iCloud (CalDAV).</strong> If you connect Apple iCloud as a calendar provider, Client Octopus connects directly from your WordPress site to Apple's iCloud calendar servers using the Apple ID and app-specific password you provide — this connection does not go through the Client Octopus relay. Your app-specific password is encrypted before being stored in your WordPress database. This only happens if you've explicitly connected an Apple iCloud account in Settings. See Apple's <a href="https://www.apple.com/legal/internet-services/icloud/" target="_blank" rel="noopener">iCloud Terms of Service</a> and <a href="https://www.apple.com/legal/privacy/" target="_blank" rel="noopener">Privacy Policy</a>.</p>

				<p><strong>Cloudflare Turnstile.</strong> If you enable Turnstile as the CAPTCHA provider for the lead capture form, Client Octopus verifies each form submission with Cloudflare before saving it, to block automated spam. This only runs when Turnstile is configured in Settings — it is off by default. See Cloudflare's <a href="https://www.cloudflare.com/website-terms/" target="_blank" rel="noopener">Terms of Service</a> and <a href="https://www.cloudflare.com/privacypolicy/" target="_blank" rel="noopener">Privacy Policy</a>.</p>

				<p>Freemius licence management is covered separately under <strong>Freemius licensing</strong> in the Privacy Policy section below.</p>

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
