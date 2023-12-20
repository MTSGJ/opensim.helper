function bgImgRotate() 
{ 
	//////////////////////////////////////////////////////////////////////////////////////////////
	var images = Array( "images/login_screens/login2-1.jpg", "images/login_screens/login2-2.jpg", 
						"images/login_screens/login2-3.jpg", "images/login_screens/login2-4.jpg",
	                    "images/login_screens/login2-5.jpg", "images/login_screens/login2-6.jpg", 
						"images/login_screens/login2-7.jpg", "images/login_screens/login2-8.jpg"); 
	//////////////////////////////////////////////////////////////////////////////////////////////

	var myDate = new Date();
	var hour = myDate.getHours(); 
	var min  = myDate.getMinutes();
	var uxtm = myDate.getTime(); 
//	var index = Math.floor(hour/8); 
	var index; 

    index = min % 8;
	document.getElementById('mainImage').src = images[index]+'?'+uxtm;
} 


function closeSurvey(div_id)
{
	document.getElementById(div_id).style.display = "none";
}


function locationTextColor(){
	if ((document.getElementById('specifyLocation').checked == 1) && !(document.getElementById('specificLocation').value == 'Region Name')) {
		document.getElementById('specificLocation').style.color = '#FFFFFF';
	} else {
		document.getElementById('specificLocation').style.color = '#666666';
	}
}


function selectRegionRadio(){
	document.getElementById('specifyLocation').checked = 1;
}


function CheckFieldsNotEmpty(){
	var mUsername = document.getElementById('firstname_input');
	var mLastname = document.getElementById('lastname_input');
	var mPassword = document.getElementById('password_input');
	var myButton  = document.getElementById('conbtn');
		
	if (( mUsername.value != "") && (mLastname.value != "") && (mPassword.value != "") )
	{
			myButton.disabled = false;
			myButton.className = "input_over";
	}else
	{
		myButton.disabled = true;
		myButton.className = "pressed";
	}
}
