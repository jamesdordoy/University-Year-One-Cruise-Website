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
<link rel="stylesheet" href="css/development.css" />
<link rel="stylesheet" href="css/tables.css" /> 

<!-- Scripts -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
<script src="js/functions.js"></script>

<!-- Title -->
<title>Find a Cruise  - Development</title> 

</head>
<body>

<div class="Wrapper">

	<?PHP include"includes/header.php"; ?>
    
	<?PHP include"includes/nav.php"; ?>

	<main>

        <h1>Site Development</h1>
        <h1>Development List</h1>
            <table>
                <tr>
                    <th>Task Number</th>
                    <th>Required Elements For Assignment</th>
                    <th>Evidance Links</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Produce a page that discusses   the planning, design and development of the site, how the technologies you   have used are appropriate, what testing you have done and how usable you feel   the site is. Call this page development.html.</td>
                    <td><a href="#">Development.php</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>The   site must have an initial Home Page (index.html)   that provides the corporate overview. Create a suitable navigation strategy   to allow for logical and intuitive movement around the site.</td>
                    <td><a href="/students/1dordj54/index.php">Index.php</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><p>Use Cascading Style Sheets comprehensively to add   “look and feel” aspects to the layout and formatting of all the pages, using at   least internal and external CSS.</p><br/>
        
        <p>Provide also an external CSS page.<p></td>
                    <td><a href="/students/1dordj54/css/main.css">Main Style Sheet</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Good use throughout of :
                        <ul>
                            <li>Tables</li>
                            <li>Images and image maps</li>
                            <li>Favicon</li>
                            <li>Map that acts as a “How to find us” section.</li>
                        </ul>
                    </td>
                    <td><a href="#">development.php</a>
                    <a href="/students/1dordj54/cruises/UK.php">UK.php</a>
                    <a href="/students/1dordj54/images/favicon.jpg">favicon.jpg</a>
                    <a href="/students/1dordj54/contact.php">contact.php</a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><p>Include a section that   discusses why web standards are important and why usability is important –   call it standards.html.</p><br/>
                        <p>Indication of how site   conforms to accessibility requirements – provide link where evidence of this   is to be found.</p>
                    </td>
                    <td><a href="/students/1dordj54/standards.php">standards.php</a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><p>Create a client-side user feedback form that will also glean information from the user. Ensure it has JavaScript validation (see section 8 below).</p><br/>
                        <p>Call this page form.html</p>
                    </td>
                    <td><a href="/students/1dordj54/contact.php">contact.php</a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Use SSI to assist with the   maintenance of the site.</td>
                    <td>
                    	<a href="/students/1dordj54/index.php">index.php</a>
                    	<a href="/students/1dordj54/SSI.shtml">SSI.shtml</a>
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>
                        <p>Use original JavaScript to   add dynamic aspects to the site:</p>
                        <ol>
                            <li>ensure that the feedback form has logical and thorough client-side validation [this has to be included for site]</li>
                            <li>event driven activities (e.g. rollovers)</li>
                            <li>some calculations</li>
                            <li>evidence of conditional statements and loops</li>
                            <li>evidence of use of arrays</li>
                            <li>evidence of functions</li>
                            <li>evidence of cookies and agreement of user acceptance</li>
                        </ol>
                        <p>If you feel that some of these are not appropriate to your site you have to include and upload alternative examples.</p>            
                    </td>
                    <td>
                    	<ol>
                       		<li><a href="/students/1dordj54/contact.php">contact.php</a></li>
                        	<li><a href="/students/1dordj54/Cruises.php">Cruises.php</a></li>
                        	<li><a href="/students/1dordj54/cruises/UK.php">UK.php</a></li>
                        	<li><a href="/students/1dordj54/index.php">index.php</a></li>
                        	<li><a href="/students/1dordj54/cruises/UK.php">UK.php</a></li>
                        	<li><a href="/students/1dordj54/cruises/UK.php">UK.php</a></li>
                        	<li><a href="/students/1dordj54/index.php">index.php</a></li>
                      	</ol>
                        <a href="/students/1dordj54/js/functions.js">Link to main js file</a>
                    </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Demonstrate site software   model to tutor in class – make amendments as requested.</td>
                    <td></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Good use of title tag, meta   tags and any other data that can help with any potential SEO exercise.</td>
                    <td><a href="seo.php">seo.php</a></td>
                </tr>
            </table>
            
        <h1>Please Click The Blue Bars To Expand Information</h1>
        <h1 class="click">Task</h1>
        <div class="hider" id="Task">   
            <p>You have been asked to build a web site that provides information about available Cruises.</p><br/>
        
            <p>The web site should provide information about available Cruises from at least three different Cruise Lines.</p><br/>
        
            <p>The information for each Cruise Line should reflects the page style.</p><br/>
        
            <p>The site should comprehensively cover all aspects such as:</p>
            <ul>
                <li>Cruise Destinations - maps, image maps, dates & duration, locations;</li>
                <li>Departure ports - how to get there, externals links, weather information, photos;</li>
                <li>Cruise Lines – a brief glance for each operator, Cruise ships photos and short description.</li>
            </ul><br/>
        </div> 
        
        <h1 class="click">Information Gathering</h1>
        <div class="hider">
			<p>I have looked at multiple different cruise websites and i have decided on a colour scheam of white and blue. I am designing the website around simplicty to ensure i am able to reach a larger target audiance.</p>
            
            <p>I was looking to create a fluid grid layout or a responsive website but due to knowledge and time constraints concept was removed.</p>
            
        
        </div>
       
        <h1 class="click">Planning</h1>
        <div class="hider">
            
            <p>We have been tasked to create a website for a cruise company. I have planned to use responsive media queries thenewboston(2014).</p>
            <p>I have included a gantt chart to evidance my progress week by week. I will also be keeping a small diary of what is completed each week and explaining any issues that may arise. This will be a in a dated table format.</p>
           
        </div>
        
        <h1 class="click">Gantt Chart</h1>
        <div class="hider">
			<img src="images/Gantt.png" id="Gantt" alt="Gantt Chart"/>
            
        
        </div>
        
        
        
        <h1 class="click">Design</h1>
        <div class="hider">
        	<p>I am designing a cruise website with simplicity in mind. I have decided to use a simple white, grey and blue colour scheme for my website i am using standard styling over mutilple pages to give the website a standardised layout for simplicity and practicallity.
            
  			<p>My website will use a container to house the unique information and server-side includes.</p><br/>
            
            <p>My design will use many images as an image can tell a thousand words and images are easier to navigate.</p><br/>
            
        
        </div>
        
        <h1 class="click">Development</h1>
        <div class="hider">
             
            <table>
                <caption>Patch Notes</caption>
                <tr>
                    <th>Patch No</th>
                    <th>Notes</th>
                    <th>Date Written</th>
                </tr>
                <tr>
                    <td>0.1</td>
                    <td>This week I have been planning the look and feel of this website. I have created a Index page and this development page. I have decided on a colour theme for the website and also a layout. I intend to use media queries to apply responsive design to the website.</td>
                    <td>15/02/2015</td>
                </tr>
                <tr>
                    <td>0.1.1</td>
                    <td>I have created an image slider this week that will enable dynamic content. I have also decided against using a fluid layout design due to time constraints.</td>
                    <td>23/02/2015</td>
                </tr>
                <tr>
                    <td>0.2</td>
                    <td>I have finished my home page and my main css file. i have also started work on a interactive map i intened to include.</td>
                    <td>02/03/2015</td>
                </tr>
                <tr>
                    <td>0.2.1</td>
                    <td>This week i have looked at the maitanace of the website and i have completed validation for the index, cruises and main css page for the website.</td>
                    <td>09/03/2015</td>
                </tr>
                <tr>
                    <td>0.3</td>
                    <td>I have finished the interactive jquery map.</td>
                    <td>20/03/2015</td>
                </tr>
                <tr>
                    <td>0.4</td>
                    <td>I have added pages for the destinations avilable on the interactive map. I have also started my contact us form.</td>
                    <td>30/03/2015</td>
                </tr>
                <tr>
                    <td>0.5 - Beta</td>
                    <td>I have uploaded a basic version of the site to the aquarius server for testing purposed. I needed to change many different filepaths in my code. All my pages are now completed and i will be polishing the content and implimenting Javascript.</td>
                    <td>05/04/2015</td>
                </tr>
                <tr>
                    <td>0.6 - Beta</td>
                    <td>I have added addiational Javascript to deal with form validation and cookies.</td>
                    <td>12/04/2015</td>
                </tr>
                <tr>
                    <td>0.6.1 - Beta</td>
                    <td>I have been applying polishing toutches this week.</td>
                    <td>19/04/2015</td>
                </tr>
                <tr>
                    <td>1.0</td>
                    <td>I have finished the website and the development page.</td>
                    <td>20/04/2015</td>
                </tr>
            </table>
        </div>
        
        <h1 class="click">Testing And Devilvery</h1>
        <div class="hider">
            <h2>index.php</h2>
            <p>I have done extensive testing on Chrome, Firefox, IE and Safari to ensure that cross compatiblity is not a issue for the users using the website</p>
            <p>I have also done testing for the image slider i built. I have built the image slider with simplicity in mind.</p><br/>
            
            <h2>contact.php</h2>
            <p>The contact page includes the Google Maps API and has been imbedded. I have also created a contact form and this has taken extensive testing to ensure that the escape characters are validating the user input correctly.</p><br/>
            
            <h2>cruises.php</h2>
            <p>The cruises page includes a interactive map that i created using a tutorial found on Lynda.com. The map wasnt fit for purpose but i made some simple changes to the source code and image files to enable the map to be updated with ease.</p><br/>
            
            <h2>Cross Browser Compatiblity</h2>
            <p>I have found multiple issues with using the files in Internet Explorer. I have added multiple different CSS3 propities to deal with the effects i have used that havent been standardised across browsers.</p><br/>
            
            <h2>Javascript and Cookies</h2>
            <p>I have done alot of different tests for the cookies and javascript on my website. i have not been able to validate the javascript but i have ensure there are no errors on the website caused by javascript or jquery</p><br/>
            
            <h2>Devilvery</h2>
            <p>Devilvery of this site will be on time. I have prepared all files for a final upload and i have double checked the validation to ensure the code is correct.</p>
        </div>
        
        <h1 class="click">Maintanance</h1>
        <div class="hider">
        	<p>With maintanance in mind i looked at the Jquery map on the <a href="Cruises.php">Cruise.php</a> webpage and made sure it is easy to add new destinations to the website without effecting any of the other pages. I also designed the image slider with the same purpose to ensure the images can be added simply.</p><br/>
            <p>The website has been built to enable quick additions to the interactive map. This makes the website simple and effective for development</p><br/>
            <p>The website was built using SSI to eable new pages to be developed quickly and allow for dyamic updates to multiple pages quickly.</p>
        </div>
            
        <h1 class="click">Technologies</h1>
        <div class="hider">
            <p>I have used the following technologies in my website:</p>
            <ul>
            	<li>HTML 5</li>
                <li>CSS 3</li>
                <li>Javascript</li>
                <li>PHP</li>
                <li>Jquery</li>
                <li>Google Maps API</li>
            </ul>
        </div>
        
        <h1 class="click">References</h1>
        <div class="hider">
            <ul id="Reference">
                <li>thenewboston, 2014
        Responsive Media Queries [Online], [Viewed 11th Feburary 2015]
        Available from: <a href="https://www.youtube.com/watch?v=FhkQLG04_7Q">https://www.youtube.com/watch?v=FhkQLG04_7Q</a></li>
                <li>Wallpaper2020, 2014
        Cruise Liner Image For Index [Online], [Viewed 11th Feburary 2015]        
        Available from: <a href="http://images7.alphacoders.com/349/349147.jpg">http://images7.alphacoders.com/349/349147.jpg</a></li>
                <li>theamazingpics, 2014
                <a href="http://www.theamazingpics.com/wp-content/uploads/2013/06/Incredible-Shot-of-Seabourn-Cruise-Line-Ship-at-Sunrise.jpg">http://www.theamazingpics.com/wp-content/uploads/2013/06/Incredible-Shot-of-Seabourn-Cruise-Line-Ship-at-Sunrise.jpg</a></li>
                <li>bhmpics, 2014
        Cruise Ship [Online], [Viewed 11th Feburary 2015]
        Available from: <a href="http://www.bhmpics.com/walls/cruise_ship_msc_divina-other.jpg">Cruise Ship 1</a></li>
                <li>TravelDreamz, 2014
        Cruise Ship [Online], [Viewed 11th Feburary 2015]
        Available from: <a href="http://www.traveldreamz101.net/wp-content/uploads/2014/08/Luxary-Cruise-Ship-Free-1080p-Background-27.jpg">Cruise Ship 2</a></li>
            	<li>TravelDreamz, 2014
        Wave Image [Online], [Viewed 11th Feburary 2015]
        Available from: <a href="http://www.sonbet.com/wonderful-cruise-ship-rogue-wave/">Wave Image</a></li>
        		<li>Wikipedia, 2015
        Crusie Ship [Online], [Viewed 11th Feburary 2015]
        Available from: <a href="http://upload.wikimedia.org/wikipedia/commons/b/b6/Cruise_ship_serenade.jpg">Cruise Ship 3</a></li>
                
            </ul>
        </div>
       
    </main>

	<?PHP include"includes/footer.php"; ?>

</div>
</body>
</html>
