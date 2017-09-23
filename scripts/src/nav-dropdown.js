$('#nav-menu-laucher').click(function(){
	var launcherIcon = id('nav-menu-laucher').children[0]

	$('.nav-main_menu')[0].classList.toggle('open');
	launcherIcon.classList.toggle('fa-bars');
	launcherIcon.classList.toggle('fa-times');
});
