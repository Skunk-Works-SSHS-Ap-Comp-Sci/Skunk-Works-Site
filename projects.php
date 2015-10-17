<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
    
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
        
    ?>  
	<title>Projects | Skunk Works</title>
    <style>
        .panel-default {
            box-shadow: 0 0 7px rgba(136,136,136,.75);
        }
        #heading {
            padding-bottom: 7px;
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
            <div class="col-xs-12">
                <h1 id="heading">Projects</h1>
            </div>
            <div class="col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Menu Project <small>Oct 16</small></h3>
                    </div>
                    <div class="panel-body">
                        First steps:
                        <ul>
                            <li>Create some lists, put them in Java programs in arrays</li>
                            <li>Create a menu to print out whichever list your user selects</li>
                        </ul>

                        Lists can be: 
                        <ul>
                            <li>What an ideal school for preparing you for careers looks, feels like, in reality</li>
                            <li>What an ideal school for preparing you for college looks, feels like, in reality</li>
                            <li>How do we get there?</li>
                            <li>What makes learning hard?</li>
                            <li>What motivates you and your fellow students to work hard for something valuable?</li>
                            <li>What are school's actual goals, in reality?</li>
                            <li>What are your and your fellow students' goals, in reality?</li>
                            <li>What roles do everyone with a vested interest in student (your) success fulfill?</li>
                            <li>etc.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign Up <small>Oct 16</small></h3>
                    </div>
                    <div class="panel-body">
                        <p>
                            If you have not already, please fill out this form: <a href="http://goo.gl/forms/qFQZQLZiD9" target="_blank">http://goo.gl/forms/qFQZQLZiD9</a>
                        </p>
                        <p>
                            Please make sure to accept the invitation to the GitHub organization by going to: <a href="https://github.com/Skunk-Works-SSHS-Ap-Comp-Sci" target="_blank">https://github.com/Skunk-Works-SSHS-Ap-Comp-Sci</a>
                        </p>
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