<?php
session_start();
if(isset($_GET['id']) && abs((int)($_GET['id'])) > 0)
{
	$lang = 'ar';
	$_GET['id'] = abs((int)($_GET['id']));
	$_SERVER['HTTP_PRAGMA'] = 'no-cache';
	$_SERVER['HTTP_CACHE_CONTROL'] = 'no-cache';
	include('develops/sitepages-front.php');
	if(!empty($sitepage) && $sitepage['title'] != '')
	{
?>
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<html dir="rtl">
<head>
<title><?php echo $sitepage['title']; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo $sitepage['description']; ?>">
<meta name="keywords" content="<?php echo $sitepage['title']; ?>" />
<meta name="author" content="">
<link rel="shortcut icon" href="<?php if(isset($system['logo']) && $system['logo'] != '') echo 'uploads/'.$system['logo']; ?>">
<!-- css files -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/team.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/portfolio.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/progressbar.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css files -->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css">
<!-- /fonts -->
<!-- js files -->
<script src="js/modernizr.custom.js"></script>
<!-- /js files -->
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<!-- Use any element to open the sidenav -->
<!-- navigation -->
	<?php include('designs/header.php'); ?>
<!-- /navigation -->

<!-- about section -->
<section class="contact-us" id="about">
	<div class="container" style="background-color:rgba(23,23,23,0.8); padding:15px; border-radius:15px;">
		<div class="col-lg-4 col-md-4 col-xs-4">
			<br><br><br>
			<?php for($im=2;$im<(round(count($blogimgs)/2)+2);$im++) { ?>
				<br><img class="img-responsive" src="uploads/sitepages/<?php echo $_GET['id']; ?>/<?php echo $blogimgs[$im]; ?>" />
			<?php } ?>
		</div>
		<div class="col-lg-4 col-md-4 col-xs-4">
			<h3 class="text-center" style="font-size:24px;"><?php echo $sitepage['title']; ?></h4>
			<p class="text-center" style="text-align:justify;"><?php echo $sitepage['description']; ?></p>
		</div>
		<div class="col-lg-4 col-md-4 col-xs-4">
			<br><br><br>
			<?php for($im=(round(count($blogimgs)/2)+2);$im<(count($blogimgs)+2);$im++) { ?>
				<br><img class="img-responsive" src="uploads/sitepages/<?php echo $_GET['id']; ?>/<?php echo $blogimgs[$im]; ?>" />
			<?php } ?>
		<div>
	</div>
</section>
<!-- /about section -->

<!-- Footer Section -->
<section class="footer">
	<div class="container">
		<div class="copyright">
			<p>&copy; 2016 Clientele. All Rights Reserved | Design by <a href="http://onetrusted.com/" target="_blank"> onetrusted </a></p>
		</div>
	</div>
</section>
<!-- /Footer Section -->
<!-- back to top -->
<a href="#0" class="cd-top">Top</a>
<!-- /back to top -->

<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<!-- js for back to top -->
<script src="js/main.js"></script>
<!-- /js for back to top -->
<!-- /js files -->
</body>
</html>
<?php } else header('Location: index.php'); ?>
<?php } else header('Location: index.php'); ?>