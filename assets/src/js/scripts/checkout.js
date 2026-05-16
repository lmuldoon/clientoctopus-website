export function initCheckout() {
	window.addEventListener('load', () => {
		const toggle = document.getElementById('js-billing-toggle');
		const grid = document.getElementById('js-pricing-grid');

		if (toggle && grid) {
			toggle.addEventListener('click', () => {
				const isAnnual = toggle.getAttribute('aria-checked') === 'true';
				toggle.setAttribute('aria-checked', isAnnual ? 'false' : 'true');
				grid.classList.toggle('is-annual', !isAnnual);
			});
		}

		if (!window.FS || !FS.Checkout) return;

		const checkout = new FS.Checkout({
			product_id: 29266,
		});

		document.querySelectorAll(".plan-button").forEach((button) => {
			button.addEventListener("click", function (e) {
				e.preventDefault();
				const planId = this.getAttribute("data-plan-id");
				const isAnnual = grid && grid.classList.contains('is-annual');
				checkout.open({
					plan_id: planId,
					licenses: 1,
					billing_cycle: isAnnual ? "annual" : "monthly",
				});
			});
		});
	});
}