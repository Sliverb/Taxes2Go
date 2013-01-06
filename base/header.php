<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
function curPageURL() {
	$pageURL = 'http';
	if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
	$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
	$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}

$path = parse_url(curPageURL(), PHP_URL_PATH);
$path = trim($path, ".php");
$path = trim($path, '/');
$pathComponents = explode("/", $path);
$section = $pathComponents[0];
$page = $pathComponents[1];
?>

<html>
<head>
	<title>Taxes 2 Go</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="robots" content="all" />
	<meta name="author" content="Bayo Olatunji" />	
	<meta name="description" content="Taxes 2 Go" />	
	<meta name="keywords" content="" />	
	<meta name="MSSmartTagsPreventParsing" content="true" />
	
	<!-- THE CSS -->
	<link rel="stylesheet" type="text/css" href="../css/T2G.css"/> 

	<!-- THE SCRIPT -->
	<!-- <script type="text/javascript" src="CustomHome.js"></script> -->
</head>

<!-- THE BODY -->
<body>
	<div id="start-dom" class="default">
	
		<!-- The static black bar on the top of the page -->
		<div class="tophub">
			<div class="topnav">
				<div class="container">
					<!-- The left elements on the top bar -->
					<div class="navLeft">
						<a class="mainLogo" href="index.html">
						TAXES2GO
						</a>
					</div> 				
					<!-- The center elements on the top bar -->
					<ul class="navCenter">		
						<li class="litLab naviItem <? if ($section=="Services") echo "navActive" ?>" style="display:block">
							<a href="index.html" class="naviLogoLink naviLink">
								<i class="naviImage"></i>
								Services
								<span class="downCaret"></span>								
							</a>
							<ul class="navHover">
								<li><a class="hoverNaviLink" href="1"> Individuals </a></li>
								<li><a class="hoverNaviLink" href="2"> Businesses </a></li>
								<li><a class="hoverNaviLink" href="3"> Payroll </a></li>
							</ul>							
						</li>
						<li class="litLab naviItem <? if ($section=="Tax") echo "navActive" ?>" style="display:block">
							<a href="index.html" class="naviLogoLink naviLink">
								<i class="naviImage"></i>
								Tax Resources
								<span class="downCaret"></span>
							</a>
							<ul class="navHover">
								<li><a class="hoverNaviLink" href="1"> IRS Forms/Docs </a></li>
								<li><a class="hoverNaviLink" href="2"> Fedral Refund </a></li>
								<li><a class="hoverNaviLink" href="3"> State Refund </a></li>
								<li><a class="hoverNaviLink" href="4"> Tax News </a></li>
							</ul>
						</li>						
						<li class="litLab naviItem <? if ($section=="About") echo "navActive" ?>" style="display:block">
							<a href="index.html" class="naviLogoLink naviLink">
								<i class="naviImage"></i>
								About
								<span class="downCaret"></span>
							</a>
							<ul class="navHover">
								<li><a class="hoverNaviLink" href="2"> Team </a></li>
								<li><a class="hoverNaviLink" href="3"> Privacy Policy </a></li>
								<li><a class="hoverNaviLink" href="4"> Disclaimer </a></li>								
							</ul>							
						</li>		
						<li class="litLab naviItem <? if ($section=="Help") echo "navActive" ?>" style="display:block">
							<a href="index.html" class="naviLogoLink naviLink">
								<i class="naviImage"></i>
								Help
								<span class="downCaret"></span>
							</a>
							<ul class="navHover">
								<li><a class="hoverNaviLink" href="1"> FAQ </a></li>
								<li><a class="hoverNaviLink" href="2"> Contact Us </a></li>
							</ul>							
						</li>							
					</ul>					

					<!-- The right elements on the top bar -->
					<ul class="navRight">		
						<li class="dropDown naviItem" style="display:none">
							<a class="dropDownLink naviLink" href="" id="AccountLink">
								Account
								<span class="caret"></span>
							</a>					
						</li>						
						<li class="dropDown naviItem" style="display:block">
							<a class="dropDownLink naviLink" href="" id="signInLink">
								Login
								<span class="rightCaret"></span>
							</a>					
						</li>					
					</ul>
				</div>
			</div>
		</div>