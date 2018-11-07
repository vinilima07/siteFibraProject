$(document).ready(function() {
	$("#page-home").load("home.html");
	$("#page-company").load("company.html");
	$("#page-benefits").load("benefits.html");
	$("#page-plans").load("plans.html");
	$("#page-services").load("services.html");
	$("#box-email").load("formulario.php");

	$("#dropdown-icon").click(function(){
		$(".menu").toggle(500);
	});

	$(".menu-plans").click(function(){
			$('#page-plans').scrollTop(100);
	});

	$('.menu-home').click(function() {
  	$('html, body').animate({scrollTop: 0}, 500);
	});
	$('.menu-plans').click(function() {
  	$('html, body').animate({scrollTop: $("#page-plans").offset().top-40}, 500);
	});
	$('.menu-benefits').click(function() {
		$('html, body').animate({scrollTop: $("#page-benefits").offset().top-40}, 500);
	});
	$('.menu-footer').click(function() {
		$('html, body').animate({scrollTop: $("#page-footer").offset().top-40}, 500);
	});
	$('.menu-company').click(function() {
		$('html, body').animate({scrollTop: $("#page-company").offset().top-40}, 500);
	});
	$('.menu-services').click(function() {
		$('html, body').animate({scrollTop: $("#page-services").offset().top-40}, 500);
	});

	$("#ballon-email").click(function(){
		$("#box-email").toggle(500);
	});

	$("#close-email").click(function(){
		$("#box-email").toggle(500);
	});

})
