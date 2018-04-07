<!doctype html>
<html>

<head>

<!-- Meta Tags -->
<meta charset="UTF-8">
<meta name="author" content="James Dordoy">
<meta name="viewport" content="width=device-width">

<!-- Favicon -->
<link rel="icon" href="images/favicon.jpg">

<!-- StyleSheets -->
<link rel="stylesheet" href="../css/main.css" />
<link rel="stylesheet" href="../css/forms.css"/>

<!-- Scripts -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
<script src="../js/functions.js"></script>

<!-- Title -->
<title>Cruise Finder - UK</title>

<body onLoad="genWeather();">

<div class="Wrapper">

	<?PHP include"../includes/header.php"; ?>
    
	<?PHP include"../includes/nav.php"; ?>
    
    <main>
        
        <div class="ImageMap">
        <img id="UKMap" src="/students/1dordj54/images/UK_map.jpg" width="300" height="365" usemap="#image-map" alt="England" />

		<map name="image-map" id="image-map">
			<area id="England" class="target" alt="England" title="England" shape="poly" coords="225,147,235,158,236,181,241,199,253,201,260,224,261,238,267,252,261,269,261,277,273,268,288,268,299,287,297,301,278,319,265,330,285,338,267,353,248,358,220,352,194,355,170,347,155,358,130,353,112,361,98,352,134,340,161,325,184,316,198,302,190,291,190,267,189,248,192,227,197,212,187,208,178,195,189,183,194,176,210,168,219,159" href="#" target="_self"  />
        
			<area id="Wales" class="target" alt="Wales" title="Wales" shape="poly" coords="187,242,171,240,160,233,148,237,157,246,144,255,161,259,159,277,144,282,122,286,128,302,145,299,156,309,169,316,180,312,187,309,199,301,189,285,191,264" style="outline:none;" target="_self"  href="#"   />
        
			<area id="Scotland" class="target" alt="Scotland" title="Scotland" shape="poly" coords="224,143,215,160,193,174,182,178,167,181,154,175,158,156,168,145,145,151,133,136,137,121,136,98,120,74,127,50,160,22,197,16,222,10,238,16,241,63,244,93,236,117" style="outline:none;" href="#" target="_self"/>
        
			<area id="Ireland" class="target" alt="Ireland" title="Ireland" shape="poly" coords="106,141,120,151,136,172,136,196,116,208,113,237,96,267,70,271,35,283,12,275,4,252,38,222,26,203,33,165,60,180,69,167,77,148" style="outline:none;" target="_self" href="#"    />
		</map>
        
        <div id="Content">
        	<p>Please Select a destination on our interatice map to get information for the area.</p><br/>
            <p>We aim to provide accurate information about the cruises you travel on.</p><br/>
            
            <img src="/students/1dordj54/images/cruise1.jpg" alt="CruiseShip" style="width:350px; display:block; border-radius:5px; height:200px; margin:5px auto;"/>
        </div>
        
        </div>
        
        <div class="DepaturePorts">
        	
        
        </div>
        
        
        <div class="Weather">
        
        	<h1>7 day forcast - Degrees</h1>
        	<table>
            	<tr>
                	<th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th>
                    <th>Thursday</th>
                    <th>Friday</th>
                    <th>Saturday</th>
                    <th>Sunday</th>
                </tr>
                <tr id="Weather">
                	<td></td>
                </tr>
                
        	</table>
        </div>
        <p class="Ref">Random numbers generated using Javascript</p><br/>
    
        <?PHP include"../includes/sponsers.php"; ?>
      
    </main>
    
	<?PHP include"../includes/footer.php"; ?>

</div>

</body>
</html>