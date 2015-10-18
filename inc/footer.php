<?php
echo'
	<footer>
		<div id="ftr-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-xs-12" id="ftr-nav">
						<ul>';
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/inc/nav.php";
include($path);
echo'
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row" id="ftr-row2">
				<div class="col-xs-12 col-sm-3" id="git">
					<p>
						GitHub:
					</p>
					<p id="gitHub">
						<a href="https://github.com/Skunk-Works-SSHS-Ap-Comp-Sci" target="_blank"><i class="fa fa-github"></i></a>
					</p>
				</div>
				<div class="col-xs-12 col-sm-5" id="copy">
					&copy;2015, <a href="https://www.tinycountrygames.com/" target="_blank">Tiny Country Games</a>. All Rights Reserved
				</div>
				<div class="col-xs-12 col-sm-4" id="dev">
					<p>
						Designed and Developed By:
					</p>
					<p>
						Jos&eacute; Rodriguez-Rivas, <a href="https://www.tinycountrygames.com/" target="_blank">Tiny Country Games</a>.
					</p>
				</div>
			</div>
		</div>
	</footer>';
?>