<!-- Header PHP Include  -->
<?php 
    $url = "http://";
    $url .= $_SERVER['SERVER_NAME'];
    $url .= dirname($_SERVER['REQUEST_URI']);
?>
<header>
    <div class="Logo">
        <a href="/students/1dordj54/index.php"><img src="<?php echo $url ?>/images/logo.jpg" alt="Logo"/></a>
    </div>
    
    <div id="Welcome">
        <?PHP date_default_timezone_set('Europe/London'); echo $date = date('m/d/Y h:i:s a', time()); ?>
    </div>
    
</header>