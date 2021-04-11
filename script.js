function onSigniIn(googleUser)
{
	var profile=googleUser.getBasicProfile();
	$(".g-signin2").css("display","none");
	$(".data").css("display","block");
    $("#pic").attr('src',profile.getImageUrl());
    $("#email").text(profile.getEmail());
}


function SignOut()
{
	var auth2=gapi.auth2.getAuthInstance();
	auth2.SignOut().then(function(){
		alert("you have been successfully signed out");
		$(".g-signin2").css("display","block");
		$(".data").css("display","none");
	});
}