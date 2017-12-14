$(window).scroll(function () {

	if ($(window).scrollTop() > 1 ){

		$('#color-menu').addClass('menu-fixed-color');
		$('#color-menu').removeClass('navbar-menu-color');

	}else{
		
		$('#color-menu').addClass('navbar-menu-color');
		$('#color-menu').removeClass('menu-fixed-color');

	}

});

