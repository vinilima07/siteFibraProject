$(document).ready(function() {
	$("#page-home").load("home.html");
	$("#page-company").load("company.html");
	$("#page-benefits").load("benefits.html");
	$("#page-plans").load("plans.html");
	$("#page-services").load("services.html");

	$("#dropdown-icon").click(function(){
		$(".menu").toggle(1000);
	});

})