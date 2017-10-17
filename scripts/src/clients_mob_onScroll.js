function clientsMobOnScroll() {
	if (window.navigator.maxTouchPoints || 'ontouchstart' in document){
		$('#clientsContainer').children().each(function(){
			var y = window.pageYOffset + 250;
			var ttop = $(this).offset().top;
			var tbot = $(this).outerHeight() + ttop;
			if(!(y >= ttop && y <= tbot)){
				this.classList.remove('hover');
				return;
			}
			this.classList.add('hover');
		});
	}
}
