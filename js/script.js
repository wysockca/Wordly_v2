$( document ).ready(function() {
	console.log("connected");
	

	$(".login-button").on('click', function(){
		$("#page-landing").hide();
		$("#page-login").show();
	});

	$("#login-submit").on('click',function(){

	});

	$(".signup-button").on('click',function(){
		$("#page-landing").hide();
		$("#signup-form").show("fast", function(){
			$("#page-signup-1").show();
		});		
	});


	$(".next-1").on('click',function(){
		$("#page-signup-1").hide("slow", function(){
			$("#page-signup-2").show();
			$(".progress-bar").css("width","50%");
			$(".snail").css("margin-left","35%");
		});
	});

	$(".previous-0").on('click',function(){
		$("#signup-form").hide();
		$("#page-landing").show();
	});

	$(".next-2").on('click',function(){
		$("#page-signup-2").hide();
		$("#page-signup-3").show();
		$(".progress-bar").css("width","75%");
		$(".snail").css("margin-left","70%");
	});

	$(".previous-2").on('click',function(){
		$("#page-landing").hide();
		$("#page-signup-3").hide();
		$("#page-signup-2").show();
	});

	$("#signup-submit").on('click',function(){
		console.log("form submitted");
	});


});