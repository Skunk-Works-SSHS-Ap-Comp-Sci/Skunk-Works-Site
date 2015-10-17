<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
    
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
        
    ?>  
	<title>Skunk Works</title>

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
            <!--Div.col goes here-->
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