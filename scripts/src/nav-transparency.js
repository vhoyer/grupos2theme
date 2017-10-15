document.addEventListener("DOMContentLoaded", function () {
	function onScroll() {
		var y = window.pageYOffset;
		var nav = document.getElementById('menu');
		if (y <= 0) {
			nav.classList.remove('scrolled');
		} else {
			nav.classList.add('scrolled');
		}
	}
	window.onscroll = onScroll;
});
