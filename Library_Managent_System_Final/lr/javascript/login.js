function validate(){  
	var name=document.f1.name.value;  
	var passwordlength=document.f1.password.value.length;  
	var status=false;  

	if(name==""){  
		document.getElementById("namelocation").innerHTML=  "Please enter your name";  
 		status=false;
		} 
		else{}
			if(password==""){
				document.getElementById("passwordlocation").innerHTML= "please enter your password";  
				status=false; 
			}
  
			else if(passwordlength<6){  
				document.getElementById("passwordlocation").innerHTML= "Password must be greater than 6";  
				status=false; 
			}
			
		return status; 
}