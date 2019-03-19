$( document ).ready(function() {
	console.log("connected");
	

	$("#login-button").on('click', function(){
		$("#page-landing").hide("slide", {direction: "up" }, 500, function(){
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

	$("#previous-0").on('click',function(){
		$("#signup-form").hide("slide", {direction: "right" }, 500, function(){
			$("#page-landing").show();
		});
	});

	$("#next-1").on('click',function(){
		$("#page-signup-1").hide("slide", {direction: "left" }, 500, function(){
			$("#page-signup-2").show();
			$(".progress-bar").css("width","50%");
			$(".snail").css("margin-left","35%");
		});
	});

	$("#previous-1").on('click',function(){
		$("#page-signup-2").hide("slide", {direction: "right" }, 500, function(){
			$("#page-signup-1").show();
		});
	});

	$("#next-2").on('click',function(){
		$("#page-signup-2").hide("slide", {direction: "left" }, 500, function(){
			$("#page-signup-3").show();
			$(".progress-bar").css("width","90%");
			$(".snail").css("margin-left","80%");
		});
	});

	$("#previous-2").on('click',function(){
		$("#page-signup-3").hide("slide", {direction: "right" }, 500, function(){
			$("#page-signup-2").show();
		});
	});

	$("#signup-submit").on('click',function(){
		console.log("form submitted");
	});


});