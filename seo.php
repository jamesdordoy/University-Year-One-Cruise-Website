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
<link rel="stylesheet" href="css/main.css" />
<link rel="stylesheet" href="css/forms.css"/>
<link rel="stylesheet" href="css/tables.css" /> 

<!-- Scripts -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
<script src="js/functions.js"></script>

<!-- Title -->
<title>Cruise Finder - SEO</title>

<body>

<div class="Wrapper">
	
    <?PHP include"includes/header.php"; ?>
    
	<?PHP include"includes/nav.php"; ?>
    
    <main>
    	<h1>SEO Optermiseation</h1>
	
	<table>
    	<tr>
    		<th>Title</th>
        	<th>Discription</th>
            <th>Check</th>
        </tr>
        <tr>
        	<td>Meta Keywords</td>
            <td>Meta Keywords are defined in the head of the page. They are used by search engines to pull results using the defined keywords. It is possible to have many keywords defined. </td>
            <td><input id="Checkbox1" class="checkbox" type="checkbox"/></td>
        </tr>
        <tr>
        	<td>Meta Discription</td>
            <td>Meta Discriptions are used by search engine and are offten displayed on search engine result pages or SERPs.</td>
            <td><input id="Checkbox2" class="checkbox" type="checkbox"/></td>
        </tr>
        <tr>
        	<td>Title Tag</td>
            <td>Title tag is used to define what that webpage is about. Each title tag should be different but relevant to the webpage.</td>
            <td><input id="Checkbox3" class="checkbox" type="checkbox"/></td>
        </tr>
        <tr>
        	<td>Bold Text</td>
            <td>Bold text is scanned by robots provided by search engines. The text is used to help decided when the webpage should be used as a result.</td>
            <td><input id="Checkbox4" class="checkbox" type="checkbox"/></td>
        </tr>
        <tr>
        	<td>Headers</td>
            <td>Headers are important to declare a section of a document. These should be used in a deincrementing order to show the importance of particular sections.</td>
            <td><input id="Checkbox5" class="checkbox" type="checkbox"/></td>
        </tr>
        <tr>
        	<td>Site Map</td>
            <td>Site Maps are used by search engines to show what pages are avilable on the website. Site Maps are created with XML and can be used by search engines to display the pages avilable in the site.</td>
            <td><input id="Checkbox6" class="checkbox" type="checkbox"/></td>
        </tr>
        <tr>
        	<td colspan="3"><button onClick="checkmylist()">Submit</button></td>
        </tr>
    </table>
        
    </main>
    
	<?PHP include"includes/footer.php"; ?>

</div>

</body>
</html>
