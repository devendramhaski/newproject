$(document).ready(function(){
	$("#btn").click(function(){
		var a=$("#full_name").val();
		var b=$("#username").val();
		var c=$("#pass").val();
		var d=$("#re_pass").val();
		var e=$("#add").val();
		var f=$("#city").val();
		var g=$("#male").is(":checked");
		var h=$("#female").is("checked");
		var i=$("#contact").val();	

		var x=true;
		
		if (a=="") {
			$("#full_name_msg").html("Enter your full name");
			x=false;
		}
		else{
			$("#full_name_msg").html("");
			
		}
		if (b=="") {
			$("#username_msg").html("Enter your Email address");
			x=false;
		}
		else{
			$("#username_msg").html("");
			
		}

		if (c=="") {
			$("#pass_msg").html("Enter your Password");
			x=false;
		}
		else{
			$("#pass_msg").html("");
			
		}

		if (d=="") {
			$("#re_pass_msg").html("Enter your Re-Password");
			x=false;
		}
		
		else
		{
			if(c != d)
			{
				$("#re_pass_msg").html("Enter Correct Re-Password");
				x=false;
			}
			else
			{
				$("#re_pass_msg").html("");
				
			}
		}

		if (e=="") {
			$("#add_msg").html("Enter your Address");
			x=false;
		}
		else{
			$("#add_msg").html("");
			
		}
		if (f=="Select") {
			$("#city_msg").html("Select your city");
			x=false;
		}
		else{
			$("#city_msg").html("");
			
		}
		if (g==false && h==false) {
			$("#gender_msg").html("Select your Gender");
			x=false;
		}
		else{
			$("#gender_msg").html("");
			
		}


	if(i=="")
		{
			$("#contact_msg").html("Enter your Contact Number");
			x=false;
		}
		else
		{
			$("#contact_msg").html("");
			if(isNaN(i)==true)
			{
				$("#contact_msg").html("Enter Number Only");
				x=false;
			}
			else
			{

				if(i.length!=10)
				{
					$("#contact_msg").html("Enter 10 Number");
					x=false;

				}
				else
				{
					$("#contact_msg").html("");
					
				}
			}
		}

		// alert();
		return x;
	});
});

