<!doctype html>
<html>

<head>

<!-- Meta Tags -->
<meta charset="UTF-8">
<meta name="author" content="James Dordoy">
<meta name="viewport" content="width=device-width">

<!-- Favicon -->
<link rel="icon" href="Images/Favicon.jpg">

<!-- StyleSheets -->
<link rel="stylesheet" href="../css/main.css" />
<link rel="stylesheet" href="../css/forms.css"/>

<!-- Scripts -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
<script src="../js/functions.js"></script>

<!-- Title -->
<title>Cruise Finder - UK</title>

<body>

<div class="Wrapper">

	<?PHP include"../includes/header.php"; ?>
    
	<?PHP include"../includes/nav.php"; ?>
    
    <main>
        
        <div class="ImageMap">
        <img id="UKMap" src="/students/1dordj54/images/Italy_map.jpg" width="300" height="365" alt="England" />
        
        <div id="Content">
        	<p>Please Select a destination on our interatice map to get information for the area.</p><br/>
            <p>We aim to provide accurate information about the cruises you travel on.</p><br/>
            
            <img src="/students/1dordj54/images/cruise1.jpg" alt="CruiseShip" style="width:350px; display:block; border-radius:5px; height:200px; margin:5px auto;"/>
        </div>
        
        </div>
    
        <?PHP include"../includes/sponsers.php"; ?>
      
    </main>
    
	<?PHP include"../includes/footer.php"; ?>

</div>

</body>
</html>