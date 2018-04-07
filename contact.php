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
<script src="js/form.js"></script>

<!-- Title -->
<title>Find a Cruise - Contact Us</title>

<body>

<div class="Wrapper">

	<?PHP include"includes/header.php"; ?>
    
	<?PHP include"includes/nav.php"; ?>
    
    <main>
    	<h1>Contact Us</h1>
        
        <!-- Start Of Form -->
                <form>
                	<!--Feild set is like a border or area assigned to the form -->
                	<fieldset>
                    <!--Legend that sits in the fieldset -->
                    <legend>Give Me Feedback</legend>
                        <p><span class="Required">*</span> Is Required</p><br/>
                        
                        <!-- Input Type Text. Used for inputting small amounts of text. e.g. username -->
                        <p><span class="Required">*</span>Please Enter Your E-mail Adress</p>
                        <input class="uname" id="Email" type="text" name="Email" placeholder="username@example.com" /><br/><br/>
                        
                        <!-- Input Type Text. Used for inputting small amounts of text. e.g. username -->
                        <p><span class="Required">*</span>Please Enter Your Name</p>
                        <input class="uname" id="Name" type="text" name="Name" placeholder="John Smith" /><br/><br/>
                        
                        <!-- Input Type Text. Used for inputting small amounts of text. e.g. username -->
                        <p><span class="Required">*</span>Please Enter Your Phone Number</p>
                        <input class="uname" id="Phone" type="text" name="Phone Number" placeholder="01234567890" /><br/><br/>
                        
                        <!-- Text area used to give larger amounts of text -->
                        <p><span class="Required">*</span>Please Add Your Feedback For The Website.</p>
                        <textarea id="Suggestions" name="suggestions" rows="5" cols="25"> </textarea><br/><br/>
                
                		<!--Radio buttons grouped together -->
                        <p>Please Rate The Content Of My Website.</p>
                        <input type="radio" name="rating" id="E" value="excellent"/>Excellent <br/>
                        <input type="radio" name="rating" id="G" value="good"> Good <br/>
                        <input type="radio" name="rating" id="B" value="bad"> Bad <br/><br/>
                
                        <!-- Checkboxes -->
                        <p>Please Select Out Of The Following Destination What You Want Next</p>
                        <input type="checkbox" name="Location" value="Spain">Spain<br>
                        <input type="checkbox" name="Location" value="Portugal">Portugal<br> 
                        <input type="checkbox" name="Location" value="France">France<br><br/>
                        
                        <!-- Dropdown list -->
                        <p>Rate The Useability Of My Website.</p>
                        <select name="Rating">
                            <option value="low">Low</option>
                            <option value="med">Mediumn</option>
                            <option value="hig">High</option>
                        </select><br/><br/>
                        
                        <!-- Button for submission -->
                        <button onClick="formValidation();">Submit</button><br/>
                        </fieldset>
                </form>
                
                <div class="clear_both"></div>
                
                <div class="Location">
                
                	<h1>Our Location</h1>
               		<iframe style="display:block; margin:10px auto; border:0; width:800px; height:600px;" src="https://www.google.com/maps/embed/v1/place?q=Royal%20Crescent%20Road%2C%20Southampton%2C%20United%20Kingdom&amp;key=secret"></iframe>
        		</div>
                
                <div class="Details">
                	<h2>Address</h2>
                    <p>First Line Address</p>
                    <p>Second Line Address</p>
                    <p>Town</p>
                    <p>Postcode</p>
                    <p>Telephone Num</p>
        		</div>
                
              
    </main>
    
	<?PHP include"includes/footer.php"; ?>

</div>

</body>
</html>
