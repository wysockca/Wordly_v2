$( document ).ready(function() {
	console.log("connected");
	

	$("#login-button").on('click', function(){
		$("#page-landing").hide("slide", {direction: "left" }, 500, function(){
			$("#page-login").show();
		});
		
	});

	$("#login-submit").on('click',function(){

	});

	$("#signup-button").on('click',function(){
		$("#page-landing").hide("slide", {direction: "left" }, 500, function(){
			$("#signup-form").show({complete: $("#page-signup-1").show()});
				
		});
	});

	$("#previous-0").on('click', function(){
		$("#signup-form").hide("slide", {direction: "right" }, 500, function(){
			$("#page-landing").show();
		});
	});

	$("#next-1").on('click', function(){
		$("#page-signup-1").hide("slide", {direction: "left" }, 500, function(){
			$("#page-signup-2").show();
			$(".progress-bar").css("width","25%");
			$(".snail").css("margin-left","15%");
		});
	});

	$("#previous-1").on('click',function(){
		$("#page-signup-2").hide("slide", {direction: "right" }, 500, function(){
			$("#page-signup-1").show();
		});
	});

	$("#next-2").on('click', function(){
		$("#page-signup-2").hide("slide", {direction: "left" }, 500, function(){
			$("#page-signup-3").show();
			$(".progress-bar").css("width","50%");
			$(".snail").css("margin-left","40%");
		});
	});

	$("#previous-2").on('click', function(){
		$("#page-signup-3").hide("slide", {direction: "right" }, 500, function(){
			$("#page-signup-2").show();
		});
	});

	$("#signup-submit").on('click',function(){
		console.log("form submitted");
	});

	$("#next-3").on('click', function(){
		$("#page-signup-3").hide("slide", {direction: "left" }, 500, function(){
			$("#page-signup-4").show();
			$(".progress-bar").css("width","75%");
			$(".snail").css("margin-left","65%");
		});
	});

	$("#previous-3").on('click', function(){
		$("#page-signup-4").hide("slide", {direction: "right" }, 500, function(){
			$("#page-signup-3").show();
		});
	});

	$("#buddy-box").click(function(e) {
		$("#buddy-box img").css("opacity","1");
		$("#buddy-box img").not($(e.target)).css("opacity","0.5");
		// $(e.target).css("border","1px solid red");
	});

});