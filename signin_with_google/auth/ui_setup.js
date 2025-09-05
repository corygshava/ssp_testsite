// path to the auth scripts relative to the page (might need to modify it on certain pages)
let authpath = 'auth/';

function setupbtns() {
	let btns = document.querySelectorAll('[data-role="google-signin-btn"]');

	btns.forEach(el => {
		el.dataset.picker = "google signin";

		el.addEventListener('click',() => {
			setTimeout(() => {
				window.location.assign(`${authpath}/initiate_signin`);
			},200)
		})
	})
}


window.addEventListener('load',() => {
	setupbtns();
});