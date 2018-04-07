<!DOCTYPE html>
<html>

<head>

<!-- Meta Tags -->
<meta charset="UTF-8">
<meta name="author" content="James Dordoy">
<meta name="viewport" content="width=device-width">

<!-- Favicon -->
<link rel="icon" href="images/favicon.jpg">

<!-- StyleSheets -->
<link rel="stylesheet" href="css/main.css" />
<link rel="stylesheet" href="css/Slider.css"/>
<link rel="stylesheet" href="css/forms.css"/>

<style>

.Welcome{
	width:800px;
	margin:50px 50px;
	text-align:center;
}

</style>

<!-- Scripts -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
<script src="js/functions.js"></script>


<!-- Title -->
<title>Cruise Finder - Home</title>


<!-- Start of HTML body with function onload for slider-->
<body onLoad="slider();">


<!-- Server-Side Include -->
<?PHP include "includes/cookies.php";?>

<?php 
    $url = "http://";
    $url .= $_SERVER['SERVER_NAME'];
    $url .= dirname($_SERVER['REQUEST_URI']);
?>

<!-- Wrapper Div -->
<div class="Wrapper">

	<?PHP include"includes/header.php"; ?>
    
	<?PHP include"includes/nav.php"; ?>
    
    <!-- Image Slider -->
    <div class="Slider">
    	<img id="image1" src="<?php echo $url ?>/images/cruise1.jpg" alt="Cruise Ship 1 Image"/>
        <img id="image2" src="<?php echo $url ?>/images/cruise2.jpg" alt="Cruise Ship 2 Image"/>
        <img id="image3" src="<?php echo $url ?>/images/cruise3.jpg" alt="Cruise Ship 3 Image"/>
    </div>
    <p class="Ref">Image References On Development</p><br/>
    <main>
    
    	<div class="Welcome">
        	<p>Welcome to Cruise Finder where we look to give you the most upto date information on avilable cruises locations and what avilable cruise liners are avilable to travel on.</p>
        
        </div>
    
        <?PHP include"includes/sponsers.php"; ?>
      
    </main>
    
	<?PHP include"includes/footer.php"; ?>

</div>

</body>
</html>