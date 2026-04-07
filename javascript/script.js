/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

document.addEventListener('DOMContentLoaded', () => {
	const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
	const primaryMenu = document.getElementById('primary-menu');
	const mobileSearchPanel = document.getElementById('mobile-search-panel');

	if (!mobileMenuToggle || !primaryMenu) {
		return;
	}

	mobileMenuToggle.addEventListener('click', () => {
		const isExpanded = mobileMenuToggle.getAttribute('aria-expanded') === 'true';
		mobileMenuToggle.setAttribute('aria-expanded', String(!isExpanded));

		primaryMenu.classList.toggle('hidden', isExpanded);

		if (mobileSearchPanel) {
			mobileSearchPanel.classList.toggle('hidden', isExpanded);
		}
	});
});
