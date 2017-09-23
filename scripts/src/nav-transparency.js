document.addEventListener("DOMContentLoaded", function () {
	window.onscroll = function () {
		var y = window.pageYOffset;
		var nav = document.getElementById('menu');
		if (y <= 0) {
			nav.classList.remove('scrolled');
		} else {
			nav.classList.add('scrolled');
		}
	};
});
