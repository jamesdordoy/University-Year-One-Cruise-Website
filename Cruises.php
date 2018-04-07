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
<link rel="stylesheet" href="css/map.css" />
<link rel="stylesheet" href="css/forms.css"/>
<link rel="stylesheet" href="css/main.css"/>

<!-- Scripts -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
<script src="js/functions.js"></script>
<script src="js/interactive_map.js"></script>

<!-- Title -->
<title>Find a Cruise - Avilable Cruises</title>

<body>

<div class="Wrapper">
	
    <?PHP include"includes/header.php"; ?>
    
	<?PHP include"includes/nav.php"; ?>
    
    <main>
    	<h1>Destination Information</h1>
    
        <?PHP include"includes/map.php"; ?>
        
        
        <?PHP include"includes/sponsers.php"; ?>

    </main>
    
    <?PHP include"includes/footer.php"; ?>

</div>

</body>
</html>