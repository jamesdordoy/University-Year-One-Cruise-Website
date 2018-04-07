// Main JS Document


//Cookies
function SetAcceptance(){
	setCookie("accepted","Accept",100);
	
	$('#Cookie-Banner').slideUp("slow");
	
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}



function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
}


// Random number function
function ReturnRandomNumber(min,max)
{
    return Math.floor(Math.random()*(max-min+1)+min);
}


// Slider Function For Homepage

function slider(){
	
	/* Variables */
	var x = 2
	var sc = $(".Slider img").size();
	
	$(".Slider #image1").show("fade",500);
	$(".Slider #image1").delay(6000).hide("slide",{direction:"left"},500);
	
	/* Function To Be Called Every 7 Seconds Used To Change The Image */
	setInterval(function(){	
	
		$(".Slider #image" + x).show("fade",500);
		$(".Slider #image" + x).delay(6000).hide("slide",{directon:"right"},500);
			
		if(x == sc){
				x = 1;	
		}
		else{
			x++;
		}
	}, 7000);
	
	if(getCookie("accepted") == ""){
		$('#Cookie-Banner').slideDown("slow");
		
	}
	
	if(getCookie("uname") == ""){
		 var person = prompt("Please enter your name", "Harry Potter");
		 setCookie("uname",person,100);
	}
	else{
		alert("Welcome Back " + getCookie("uname"));
	}
}


//use random numbers to create fake weather data
function genWeather(){
	var x = document.getElementById("Weather");
	var rand = 0;
	
	
	for(i = 0; i !=7 ;i++){
		
		rand = ReturnRandomNumber(20,30);
		
		if(i == 0){
			x.innerHTML = '<td style="text-align:center;">' + rand + '</td>';
		}
		else{
			x.innerHTML += '<td style="text-align:center;">' + rand + '</td>';
		}
	}
}

/* Function used with image map to add dynamic content */
$(document).ready(function() {
    $('.target').click(function() {
		
		var x = this.id;
		
		var contries = [];
		contries[0] = 'Englands terrain mostly comprises low hills and plains, especially in central and southern England. The capital of England is London, which is the largest metropolitan area in the United Kingdom and the largest urban zone in the European Union by most measures. <br/> <img style="display:block; margin:0 auto;" src="/students/1dordj54/images/citys/london.jpg" alt="London"/>';
		contries[1] = "Wales is unlike England as it has two different languages that are spoken. Some people can still speak old Welsh.";
		contries[2] = "Scotland recently tried to leave the UK so we dont want to take you there!";
		contries[3] = "Ireland is the home of Guinnus and the ginger beard.";
		
		if(x == "England"){
			document.getElementById("Content").innerHTML = "<p>" + contries[0] + "</p>";
		}
		if(x == "Wales"){
			document.getElementById("Content").innerHTML = "<p>" + contries[1] + "</p>";
		}
		if(x == "Scotland"){
			document.getElementById("Content").innerHTML = "<p>" + contries[2] + "</p>";
		}
		if(x == "Ireland"){
			document.getElementById("Content").innerHTML = "<p>" + contries[3] + "</p>";
		}
    });
});


function checkmylist(){
	
	for(i = 1; i < 7 ;i++){
		if(document.getElementById("Checkbox" + i).checked != true) {
			alert("Please Check The Checkboxs");
			return false
		}
	}
	alert("SEO Optamised");
}



/* Function For Development Page */
$(document).ready(function() {
    $('.click').click(function() {
		
        $( this ).next().slideToggle();
    });
});
