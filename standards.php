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
<link rel="stylesheet" href="css/main.css" />
<link rel="stylesheet" href="css/forms.css"/>

<!-- Scripts -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
<script src="js/functions.js"></script>

<!-- Title -->
<title>Find a Cruise - Web Standards</title>

<body>

<div class="Wrapper">
	
    <?PHP include"includes/header.php"; ?>
    
	<?PHP include"includes/nav.php"; ?>
    
    <main>
    	<div class="Text">
            <h1>Web Standards</h1>
            
            <h2>What are Web Standards?</h2>
            <p>Web Standards are the standards we follow when making websites to ensure that code is correct and the content is more accessable to a larger range of audiance.</p><br/>
            
            <h2>HTML 5</h2>
            <p>HTML 5 is the current standard for webdesign. There are still many features that are not commonly implimented across old browsers due them becoming unsupported and this takes a major roll in deciding to design in HTML 5 or a older style such as XHTML 4.0</p><br/>
            
            <h2>CSS 3</h2>
            <p>CSS 3 is the language used to style webpages. The new version on CSS 3 was impliments in ____ and is still in development as some features of CSS 3 are not standard and require features such as the webkit.</p><br/>
            
            <h2>Seperating Files</h2>
            <p>We seperate our files in web design to ensure that the files downloaded via http are no excessivly large and so we can maintain the code easier. I have used these methords to ensure my website is optimal.</p><br/>
            
            <h2>Using alt attributes on img tags</h2>
            <p>Using alt tags on images allow the browser to display alternative text if the image cant be loaded. This is also useful for users with sight difficulties who may use screen readers. I have included alt tages on all images as this is a W3C requirement for validation.</p><br/>
            
            <h2>Correct Markup</h2>
            <p>This is important to reduce the chance of errors and to ensure that code is readable for other users. I have used indentation and comments to seperate my sections and make my code readable</p><br/>
            
            <h2>Web Architecture</h2>
            <p>The web architecture has been put in place to make sure that there is common practice between linking html files and also using HTTP requests. I have ensured my website follows this standard</p><br/>
            
            <h2>Broswer Compatiblity</h2>
            <p>It is important to make sure that webpages you make can be displayed correctly across multiple browsers to reach a larger audiance. I have used different CSS3 values and ensured that my website is cross platform.</p><br/>
          </div>
    </main>
    
	<?PHP include"includes/footer.php"; ?>

</div>

</body>
</html>
