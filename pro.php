<!DOCTYPE HTML>

<html>
	<head>
		<title>Smoke-in-the-Air</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800" rel="stylesheet" type="text/css" />
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->
	</head>
	<body class="homepage">

		<!-- Header Wrapper -->
			<div id="header-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">
						
							<!-- Header -->
								<header id="header">
									<div class="inner">
									
										<!-- Logo -->
											<h1><a href="#" id="logo">INDIA AND ITS SMOKE</a></h1>
										
										<!-- Nav -->
											<nav id="nav">
												<ul>
													<li class="current_page_item"><a href="indexsame.php">Home</a></li>
													
													<li><a href="index.php#airquality">AIR QUALITY</a></li>
													<li><a href="index.php#news">NEWS</a></li>
													<li><a href="index.php#contact">CONTACT US</a></li>
													
												</ul>
											</nav>
									
									</div>
								</header>
<?php
//echo $at=$_POST['CITY'];
$detail=$_POST['CITY'];
$det=$_POST['year'];
 
  //echo "$yr"."<br>";
include('connection.php');
$q=mysql_query("SELECT * FROM air78910 WHERE CITY='$detail' and YEAR='$det'");
while($row=mysql_fetch_array($q))
{echo "SO2   :  ".$v=$row['SO2']."<br>";
	$v=$row['SO2']."<br>";
	if ($v<30)
	{
	echo "<img src='green.jpg' alt='Smiley face' height='50' width='100'> ";
	echo "<br>";
	echo "SO2 IS LESS THAN THE STANDARD VALUE. HENCE IT IS GOOD FOR HEALTH ";
	
	echo "<br>";
	echo "<br>";
	}
	else if (($v>30)&&($v<60)) {
	echo "<img src='yellow.jpg' alt='Smiley face' height='50' width='100'> ";
	echo "<br>";
	echo "SO2 IS MEDIUM. HENCE IT IS OK BUT NOT GREAT FOR HEALTH ";
	
	echo "<br>";
	echo "<br>";
		}
	else if (($v>60)&&($v<90)) {
	echo "<img src='orange.jpg' alt='Smiley face' height='50' width='100'> ";
	echo "<br>";
	echo "SO2 IS HIGHER THAN THE STANDARD VALUE. HENCE IT IS NOT GOOD FOR HEALTH ";
	echo "<br>";
	echo "<br>";
	}
	else if ($v>90) {
	echo "<img src='red.jpg' alt='Smiley face' height='50' width='100'> ";
	echo "<br>";
	echo "SO2 IS VERY HIGH THAN THE STANDARD VALUE. HENCE IT IS CRITICAL FOR HEALTH ";
	echo "<br>";
	echo "<br>";}
	
	
	
	echo "NO2   :  ".$b=$row['NO2']."<br>";
	$b=$row['NO2']."<br>";
	if ($b<30)
	{
	echo "<img src='green.jpg' alt='Smiley face' height='50' width='100'> ";
	echo "<br>";
	echo "NO2 IS LESS THAN THE STANDARD VALUE. HENCE IT IS GOOD FOR HEALTH ";
	
	echo "<br>";
	echo "<br>";
	}
	else if (($b>30)&&($b<60)) {
	echo "<img src='yellow.jpg' alt='Smiley face' height='50' width='100'> ";
	echo "<br>";
	echo "NO2 IS MEDIUM. HENCE IT IS OK BUT NOT GREAT FOR HEALTH ";
	
	echo "<br>";
	echo "<br>";
		}
	else if (($b>60)&&($b<90)) {
	echo "<img src='orange.jpg' alt='Smiley face' height='50' width='100'> ";
	echo "<br>";
	echo "NO2 IS HIGHER THAN THE STANDARD VALUE. HENCE IT IS NOT GOOD FOR HEALTH ";
	echo "<br>";
	echo "<br>";
	}
	else if ($b>90) {
	echo "<img src='red.jpg' alt='Smiley face' height='50' width='100'> ";
	echo "<br>";
	echo "NO2 IS VERY HIGH THAN THE STANDARD VALUE. HENCE IT IS CRITICAL FOR HEALTH ";
	echo "<br>";
	echo "<br>";}
	
	
	
	
	echo "RSPM  :  ".$c=$row['RSPM']."<br>";
	$c=$row['RSPM']."<br>";
	if ($c<30)
	{
	echo "<img src='green.jpg' alt='Smiley face' height='50' width='100'> ";
	echo "<br>";
	echo "RSPM IS LESS THAN THE STANDARD VALUE. HENCE IT IS GOOD FOR HEALTH ";
	
	echo "<br>";
	echo "<br>";
	}
	else if (($c>30)&&($c<60)) {
	echo "<img src='yellow.jpg' alt='Smiley face' height='50' width='100'> ";
	echo "<br>";
	echo "RSPM IS MEDIUM. HENCE IT IS OK BUT NOT GREAT FOR HEALTH ";
	
	echo "<br>";
	echo "<br>";
		}
	else if (($c>60)&&($c<90)) {
	echo "<img src='orange.jpg' alt='Smiley face' height='50' width='100'> ";
	echo "<br>";
	echo "RSPM IS HIGHER THAN THE STANDARD VALUE. HENCE IT IS NOT GOOD FOR HEALTH ";
	echo "<br>";
	echo "<br>";
	}
	else if ($c>90) {
	echo "<img src='red.jpg' alt='Smiley face' height='50' width='100'> ";
	echo "<br>";
	echo "RSPM IS VERY HIGH THAN THE STANDARD VALUE. HENCE IT IS CRITICAL FOR HEALTH ";
	echo "<br>";
	echo "<br>";}


}

?>
</body>
</html>

