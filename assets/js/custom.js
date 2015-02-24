/*!
 * Diet & Nutrition Health Center
 * ------------------------------
 * 
 * Copyright 2013 AA-Team
 * 
 * http://themeforest.net/user/AA-Team/portfolio
 *
 */
jQuery(document).ready(function($) {
	var wrap_size = $(".header-container").width();
	
	$("#dn-main-menu").ResponsiveNav({
		'wrapAfter': '.header-container',
		'menuClass': 'dn-main-menu-mobile'
	});

	// Main slider
	$("#dn-main-slider").owlCarousel({
		autoPlay: 3000, //Set AutoPlay to 3 seconds
		items : 1,
		slideSpeed: 300,
		goToFirst: true,
		goToFirstSpeed: 1000,
		navigation: true,
		pagination: true,
		itemsDesktop : [1199,1],
		itemsDesktopSmall : [979,1],
		itemsTablet: [768,1],
		afterInit: function(){
			$("#homepage-slider-container").fadeIn(200);
		},
		blurBackground: {
			'elm': $(".dn-slider-background"),
			'radius' : 22,
			'transitionSpeed': 350
		}
	});

	// Top slider widget
	$("#dn-top-widget-slider").owlCarousel({
		//autoPlay: 3000, //Set AutoPlay to 3 seconds
		items : 1,
		slideSpeed: 300,
		navigation: true,
		itemsDesktop : [1199,1],
		itemsDesktopSmall : [979,1],
		itemsTablet: [768,1],
		itemsMobile : [479,1],
	});
	
	// Parteners carusel
	$("#dn-partners-carusel").owlCarousel({
		//autoPlay: 3000, //Set AutoPlay to 3 seconds
		items : 4,
		pagination: false,
		navigation: true,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,3]
	});
	
	// Main slider
	$("#recipe-gallery").owlCarousel({
		autoPlay: 4000,
		items : 1,
		slideSpeed: 300,
		navigation: true,
		pagination: true,
		itemsDesktop: [1199,1],
		itemsDesktopSmall: [979,1],
		itemsTablet: [768,1],
		itemsMobile : [479,1],
	});
	
	// Google maps
	$('div.dn-map').each(function(){
		var that = $(this);
		that.gMap({ address: that.data('address'), zoom: that.data('zoom') });
	}); 
	
	// Go to Top button
	$(window).scroll(function () {
		if ($(this).scrollTop() > 1) {
			$('.gotop').css({
				bottom: "25px"
			});
		} else {
			$('.gotop').css({
				bottom: "-100px"
			});
		}
	});
	
	$('.gotop').click(function () {
		$('html, body')
			.animate({
				scrollTop: '0px'
			}, 800);
		return false;
	});
	
	// Save Rating
	$('.rating-input').on('click', 'i', function(e)
	{
		var that = $(this),
			value = that.data('value');
			
		jQuery.post(ajaxurl, {
			'action': 'diet_nutrition_theme_save_stars',
			'value': value,
			'recipeid': $('.rating-stars').data('recipeid')
		}, function() {
			window.location.reload();
		}, 'json');
	});
	
	// hide input value on focus
	$('input[name="s"]').each(function() {
		var txtval = $(this).val();
		$(this).focus(function() {
			$(this).val('')
		});
		$(this).blur(function() {
			if ($(this).val() == "") {
				$(this).val(txtval);
			}
		});
	});
	
	// fix submenu width by adding the submenu class 
	$(".menu-items > li").each(function(){
		var that= $(this),
			submenu = that.data('submenu');
			
		if( $.trim(submenu) != "" ){
			that.find('ul').addClass(submenu);
		} 
	});
	// prettyPhoto lightbox
	$("a[rel^='prettyPhoto']").prettyPhoto();
	
	// selectpicker
	$('.selectpicker').selectpicker('show');
	
	$('.product_list_widget a').each(function(){
		var that = $(this),
			the_text = that.text(),
			the_img = that.html(),
			the_img = the_img.split('>'),
			the_img = the_img[0] + '>';
		that.html( the_img + "<div class='text-overflow'>" + the_text + "</div>");
	});

});