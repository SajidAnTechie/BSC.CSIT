

$(document).ready(function(){
	$("#show").click(function(){
		if($(this).html() == "Get Start"){
			$(this).html("Hide");
			$(this).animate({left:"20%"},500);
		$(".header-regitration").toggle(600);
		}else{
			$(this).animate({left:"47%"},500);
			$(this).html("Get Start");
		$(".header-regitration").toggle(600);
		}
			
	});
});
	
$(document).ready(function(){
	$("#mem").click(function(){
		$("#jque").hide();
		$("#coders").show();
	});
	$("#abt").click(function(){
		$("#coders").hide();
		$("#jque").show();
	});
});

$(document).ready(function(){
	$("#forlogoutoption").click(function(){
		$("#forlogout-session").show();
		$("#user-profile").hide();
	});
	$("#cancle").click(function(){
		$("#forlogout-session").hide();
	});
	$("#for-profile").click(function(){
		$("#user-profile").show();
		$("#forlogout-session").hide();
		
	});
	$("#cancle-profile").click(function(){
			$("#user-profile").hide();
		
	});
});
	
	
	$("html").on("input",function(){
		var initialPassword = $("#passwordFirst").val();
		var finalPassword = $("#passwordSecond").val();
		var firstlength = initialPassword.length;
		var secondlength = finalPassword.length;
		var email = $("#emailconform").val();
		var emaillength = email.length;
		
		var name = $("#nameconfirm").val();
		var namelength = name.length;
	
	

	
	
	
	
	if(name == ""){
		$("#forname").text("Name is required");
		$("#forname").css("color","red");
	}
	if(namelength <=3 && namelength >=1){
		$("#forname").text("Name should be Equal or greter than three");
		$("#forname").css("color","red");
	}
	if(namelength >3){
		$("#forname").text("");
	}
	
	
	
	
	if(email == ""){
		$("#foremail").text("Email is required");
		$("#foremail").css("color","red");
	}
	if(emaillength <=3 && emaillength >=1){
		$("#foremail").text("Write valid email as @gmail.com");
		$("#foremail").css("color","red");
	}
	if(emaillength >3){
		$("#foremail").text("Try to Write Valid Email");
		$("#foremail").css("color","green");
	}
	
	
	
	if(initialPassword != finalPassword){
		$("#sajid").text("Password Does Not Match");
		$("#sajid").css("color","red");
	}
	if(initialPassword == "" && finalPassword == ""){
		$("#sajid").text("Enter Both Password Feild");
		$("#sajid").css("color","red");
	}
	if(initialPassword == finalPassword && initialPassword.length > 0 && finalPassword.length > 0 && firstlength == secondlength){
		$("#sajid").text("Password  Match");
		$("#sajid").css("color","green");
	}
		
	});





var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

