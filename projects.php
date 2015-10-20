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
            transition: box-shadow .1s;
        }
        #heading {
            padding-bottom: 7px;
        }
        .longList > li {
            padding-top: 2px;
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
            <!--EMMET Abbreviation for panel: div.col-xs-12>div.panel.panel-default>div.panel-heading+div.panel-body-->
            <!--EMMET Abbreviation for button: div.form-group>input.btn.btn-default-->
            <div class="col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Google Classroom Assignments <small>Oct 19</small></h3>
                    </div>
                    <div class="panel-body">
                        <div id="p4">
                            <p>
                                We will be hosting the code for the assignments that we are given on Google Classroom on our GitHub as well as the projects that we do ourselves. All the classrooms assignments will go in one repository on the GitHub, which can be found at <a href="https://github.com/Skunk-Works-SSHS-Ap-Comp-Sci/Classroom-Assignments" target="blank">https://github.com/Skunk-Works-SSHS-Ap-Comp-Sci/Classroom-Assignments</a>
                            </p>
                            <p>
                                Please follow the following instructions on how to set up your workspace to work on the assignments <strong>very carefully</strong>.
                            </p>
                            <ol class="longList">
                                <li>Go to the GitHub repository: <a href="https://github.com/Skunk-Works-SSHS-Ap-Comp-Sci/Classroom-Assignments" target="_blank">https://github.com/Skunk-Works-SSHS-Ap-Comp-Sci/Classroom-Assignments</a></li>
                                <li>On the top right side of the screen, find the button that says "Fork" and click it</li>
                                <li>
                                    Click on your profile picture to fork the repository into your account
                                    <ul>
                                        <li class="text-info">Note that forking a repository means to make your own version of the repository so that you can make changes independent of the other contributors.</li>
                                    </ul>
                                </li>
                                <li>If you have not already, download GitHub for Desktop from <a href="https://desktop.github.com/" target="_blank">https://desktop.github.com/</a></li>
                                <li>Once GitHub for Desktop has finished installing, run the application.</li>
                                <li>Log into your GitHub Account</li>
                                <li>Click the plus sign at the top left of the window</li>
                                <li>Go to the clone tab</li>
                                <li>Make sure your user is highlighted in the left panel, <strong>not Skunk-Works-SSHS-Ap-Comp-Sci</strong></li>
                                <li>Click on your fork of the repository</li>
                                <li>Click the big check box at the bottom of the panel</li>
                                <li>Choose any location for the folder that you would like</li>
                                <li>Once GitHub has finished cloning, click on the "sync" button at the top right</li>
                                <li>Once the sync button is clickable again, open Eclipse</li>
                                <li>In Eclipse, create a new Java Project called Classroom Assignments, and make sure your uncheck "Use Default Location" and browse to the folder called "Classroom-Assignments"</li>
                                <li>Click finish</li>
                                <li>If everything went well, you should at least see a package with code inside called "com.jose"</li>
                                <li>Right click on "src" and click new->package</li>
                                <li>Name the package: com.yourname (following Jos&eacute;'s model)</li>
                                <li>In that package is where you will be writing all your code.</li>
                                <li>
                                    Do the "Adcanced Student" project from Google Classroom in your package, preferably make a package called com.yourname.advancedstudent so that each project gets its own folder
                                    <ul>
                                        <li class="text-info">If you would like to make your package explorer look nicer, click on the upside down triangle at the top of the panel and change the Package Presentation from Flat to Hierarchal</li>
                                    </ul>
                                </li>
                                <li>Write your code in its appropriate package</li>
                                <li>Once you are done with the project, go to GitHub for Desktop, click on your repository on the left, and click on changes.</li>
                                <li>In the summary field, leave a meaningful description of what you did, and click on Commit to Master</li>
                                <li>When the commit is done, click the sync button</li>
                                <li>After the sync is done, click on the Pull Request button</li>
                                <li>Make sure you select "Skunk-Works-SSHS-Ap-Comp-Sci/master"</li>
                                <li>
                                    Click on Send Pull Request
                                    <ul>
                                        <li class="text-info">Note that a Pull Request is basically requesting the changes you made to your own personal fork to go the repository on the organization</li>
                                    </ul>
                                </li>
                                <li>Click on "View on GitHub" and wait for the board to check your code</li>
                                <li>If your code is correct, then a board member should merge your request, if not, they will add a label to the request marking what needs to be changed</li>
                                <li>If you got a label, go back and fix your code, and repeat steps 23 - 28</li>
                                <li>When your pull request is merged, you can celebrate!</li>
                            </ol>
                            <p>Please keep the following things in mind when working with this repository</p>
                            <ul>
                                <li class="text-danger">This is an AP class, collaborating is allowed, but cheating is <strong>not</strong>.</li>
                                <li class="text-danger">GitHub publicises who made what edit to which file and when. If you edit someone else's code, the board will find out instantly, and Mr. Clarke will be informed.</li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <input type="button" value="Toggle" onclick="togglePanel(4);" class="btn btn-default">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Download Eclipse <small>Oct 17</small></h3>
                    </div>
                    <div class="panel-body">
                        <div id="p3">
                            <p>
                                If we are going to be making entire programs in class now, Dr. Java simply wont be sufficient. We are going to be using a free professional IDE called Eclipse. Please go to their website and follow these instructions: <a href="https://www.eclipse.org/downloads/" target="_blank">www.eclipse.org/downloads/</a>
                            </p>
                            <ol>
                                <li>
                                    Download the Installer
                                    <ol>
                                        <li>Under "Try the Eclipse Installer", select the appropriate operating system you are running. The school computers would be Windows 64-bit</li>
                                        <li>Click on the orange "Download" button on the <strong>left</strong> side of the screen.</li>
                                    </ol>
                                </li>
                                <li>Run the Installer</li>
                                <li>Click on "Java IDE for Java Developers" <strong>It is important you do not click on anything other than that, for example, do not click on "Java IDE for Java EE Developers"</strong></li>
                                <li>Click Install</li>
                            </ol>
                        </div>
                        <div class="form-group">
                            <input type="button" value="Toggle" onclick="togglePanel(3);" class="btn btn-default">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Menu Project <small>Oct 16</small></h3>
                    </div>
                    <div class="panel-body">
                        <div id="p2">
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
                        <div class="form-group">
                            <input type="button" value="Toggle" onclick="togglePanel(2);" class="btn btn-default">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign Up <small>Oct 16</small></h3>
                    </div>
                    <div class="panel-body">
                        <div id="p1">
                          <p>
                            If you have not already, please fill out this form: <a href="http://goo.gl/forms/qFQZQLZiD9" target="_blank">http://goo.gl/forms/qFQZQLZiD9</a>
                        </p>
                        <p>
                            Please make sure to accept the invitation to the GitHub organization by going to: <a href="https://github.com/Skunk-Works-SSHS-Ap-Comp-Sci" target="_blank">https://github.com/Skunk-Works-SSHS-Ap-Comp-Sci</a>
                        </p>  
                        </div>
                        <div class="form-group">
                            <input type="button" value="Toggle" onclick="togglePanel(1);" class="btn btn-default">
                        </div>
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
<script src="/js/konami.js"></script>
<script>
    function togglePanel(num) {
        $("#p" + num).slideToggle(500);
    }
    var run = false;
    function randTrans() {
        $('div div.panel-default').each(function() {
            var x = Math.floor(Math.random() * 10) + 1;
            var y = Math.floor(Math.random() * 10) + 1;
            if(Math.random() > .5) x *= -1;
            if(Math.random() > .5) y *= -1;
            var trans = "translate(" + x + "px, " + y + "px)";
            if(run) {
                $(this).css("transform", trans);
            } else {
                $(this).css("transform", "translate(0px, 0px)");
            }
        });
    }


    var easter_egg = new Konami();

    easter_egg.code = function () {
        run = !run;
        setInterval(randTrans, 100);
    }

    easter_egg.load();
</script>

</body>
</html>