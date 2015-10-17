<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
    
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
        
    ?>  
	<title>Skunk Works</title>
	<style>
		#affSites {
			margin-top: 0;
		}
	</style>
</head>
<body>


<?php
    
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/inc/header.php";
include($path);

?>

<section id="content-wrapper">
	<div class="container">
		<div class="row">
            <div class="col-xs-12 col-sm-9">
            	<h1>Santa Susana High School AP Computer Science <small>Skunk Works</small></h1>
            	<p>
            		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis doloremque, id quas quasi accusantium expedita iure ad maxime praesentium earum dicta recusandae in fuga obcaecati pariatur animi eaque natus distinctio debitis ipsa enim, quae consequatur laborum? Facilis, nobis ipsam minima quas repellendus repellat cumque numquam neque recusandae illo eveniet, aperiam autem alias non quasi minus obcaecati maiores eius, odio ipsum rerum! Cum eos sed accusantium cumque veniam deleniti quod officia sunt quis maxime modi voluptatum dolores, a laudantium at consequatur magni nihil corrupti impedit tempora? Quasi excepturi saepe et, illo corporis provident ratione! Reiciendis, aspernatur fuga! Aperiam eveniet, animi. Voluptatem.
            	</p>
            </div>
            <div class="col-xs-12 col-sm-3">
            	<h2>Board</h2>
            	<p>CEO - Spencer Forman</p>
            	<p>COO - Tristan Hennerty</p>
            	<p>CIO - Jos&eacute; Rodriguez-Rivas</p>
            	<h2 id="affSites">Affiliated Sites</h2>
            	<div class="row">
            		<div class="col-xs-12">
            			<a href="https://www.tinycountrygames.com/" target="_blank"><img src="/images/layout/tcg.png" alt="Tiny Country Games" class="img-responsive img-logo"></a>
            			<a href="http://sshsgamedev.tinycountrygames.com/" target="_blank"><img src="/images/layout/sshsgamedev.png" alt="Santa Susana Game Development Club" class="img-responsive img-logo"></a>
            		</div>
            	</div>
            	<div class="row">
            		<div class="col-xs-6">
            			<a href="http://santasusana.org/" target="_blank"><img src="/images/layout/SSHS-logo.png" alt="Santa Susana High School" class="img-responsive img-logo"></a>
            		</div>
            		<div class="col-xs-6">
            			<a href="https://github.com/" target="_blank"><img src="/images/layout/github.png" alt="GitHub" class="img-responsive img-logo"></a>
            		</div>
            	</div>
            </div>
        </div>
	</div>
</section>

<?php
    
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/inc/footer.php";
include($path);
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/inc/javascript.php";
include($path);

?>
</body>
</html>