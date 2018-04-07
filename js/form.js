// JavaScript Document

//Event Listeners Must Be Allocated After The Page Has Loaded
document.addEventListener('DOMContentLoaded', startUp, false);

function startUp(){
	
	var contactForm = document.getElementById('submission');
	
	contactForm.addEventListener("click", formValidation());
}

//Form function
function formValidation(){  

	var email = document.getElementById('Email');
	var suggestions = document.getElementById('Suggestions');
	var name = document.getElementById('Name');
	var phone = document.getElementById('Phone');
	
	var numbers = /^[0-9]+$/; 
	var letters = /^[A-Za-z]+$/; 
 
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value)){
		
		if(phone.value.match(numbers)){
			
			if(name.value.match(letters)){
				
				if(suggestions.value != ""){
					  
					phone.value = ""
					email.value = ""
					suggestions.value = ""
					name.value = ""
					alert('Data Submitted');
					return false;
				}else{
					alert("Please Add Suggestions");
				}
			}else{
				alert("Invalid Name");
			}
		}else{
			alert("Invalid Phone Number");
		}
	}else{
		alert("Invalid Email");
	}

return false; 
}