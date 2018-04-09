<!-- Navbar PHP Include -->
<?php 
    $url = "http://";
    $url .= $_SERVER['SERVER_NAME'];
    $url .= dirname($_SERVER['REQUEST_URI']);
?>
<nav>
    <ul>
        <li><a href="<?php echo $url ?>index.php">Home</a></li>
        <li><a href="<?php echo $url ?>Cruises.php">Cruise Information</a></li>
        <li><a href="<?php echo $url ?>contact.php">Contact Us</a></li>
        <li><a href="<?php echo $url ?>standards.php">Web Standards</a></li>
        <li><a href="<?php echo $url ?>development.php">Site Development</a></li>
    </ul>
</nav>




