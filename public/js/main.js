$("body").on('click', '[href*="#"]', function(e){ $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - 50 }, 1000); e.preventDefault(); });
$('input[type="tel"]').inputmask("+7 (999) 999-99-99");
$('nav .search .tgl').click(function(){ $('nav').toggleClass('searchfrom') });
$('header .menutgl').click(function(){ $('body').toggleClass('mobmenu') });
$('.supportcard .head a').click(function(){$(this).parent('.head').parent('.supportcard').toggleClass('active') });
$('footer .footbtn').click(function(){ $('#popup').fadeIn();
	if($(this).hasClass('request')) { $('#popup .form1').fadeIn(); };
	if($(this).hasClass('callback')) { $('#popup .form2').fadeIn(); };
});
$('#popup a.closepopup').click(function(){ $('#popup').fadeOut(); $('#popup .formblock').fadeOut(); });
$(document).mouseup(function(e){if($('#popup .formblock').has(e.target).length === 0){ $('#popup').fadeOut();$('#popup .formblock').fadeOut();}});
$('.solutionsfilter button').click(function(){
	if($(this).hasClass('active')) {$(this).removeClass('active'); $('.solutionsrow .col-xs-12').removeClass('hide');}
	else {$('.solutionsrow .col-xs-12').addClass('hide');
	$('.solutionsfilter button.active').removeClass('active'); $(this).addClass('active');
	$('.solutionsrow .col-xs-12[data-filter='+$(this).data('filter')+']').removeClass('hide')};
});
$('.fslider').slick({
	infinite: true,
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: true,
	dots: true
});
$('.newslider').slick({
	infinite: false,
	slidesToShow: 4,
	slidesToScroll: 1,
	arrows: true,
	dots: false,
	responsive: [
	{ breakpoint: 992, settings: { slidesToShow: 2, } },
	{ breakpoint: 768, settings: { slidesToShow: 1, } }]
});
setTimeout(function(){
	var elem = document.createElement('script');
	elem.type = 'text/javascript';
	elem.src = 'https://api-maps.yandex.ru/2.0/?load=package.standard&lang=ru-RU&onload=getYaMap';
	document.getElementsByTagName('body')[0].appendChild(elem);
}, 2000);
function getYaMap(){
	var myMap = new ymaps.Map("map", {
		center: [55.437837, 65.340382],
		zoom: 17,
		controls: []
	});
	myMap.geoObjects.add(new ymaps.Placemark([55.437837, 65.340382], {}));
};
