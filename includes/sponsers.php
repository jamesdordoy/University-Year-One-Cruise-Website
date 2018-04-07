<!-- Sponser Bar PHP Include -->
<h1>Book Through</h1>
<p class="Ref">Image files pulled from websites.</p><br/>

<?php 
    $url = "http://";
    $url .= $_SERVER['SERVER_NAME'];
    $url .= dirname($_SERVER['REQUEST_URI']);
?>
<div class="Sponsers">
    <figure>
        <a href="http://www.royalcaribbean.co.uk/"><img src="<?php echo $url ?>/images/Sponsers/royal.png" alt="Royal Caribbean Cruises"/></a>
    </figure>
    <figure>
        <a href="http://disneycruise.disney.go.com"><img src="<?php echo $url ?>/images/Sponsers/disney.png" alt="Disney Cruises"/></a>
    </figure>
    <figure>
        <a href="http://www.ncl.com"><img src="<?php echo $url ?>/images/Sponsers/nor.png" alt="Norwigan Cruises"/></a>
    </figure>
    <figure>
        <a href="http://www.celebritycruises.co.uk"><img src="<?php echo $url ?>/images/Sponsers/cele.png" alt="Celebrity Cruises"/></a>
    </figure>
</div>
