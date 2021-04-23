<?php
session_start();
if(isset($_SESSION['userid']))
{
	$lang = 'ar';
	$_SERVER['HTTP_PRAGMA'] = 'no-cache';
	$_SERVER['HTTP_CACHE_CONTROL'] = 'no-cache';
	include('develops/addproject-front.php');
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
<title><?php if(isset($thispage['title'])) echo $thispage['title']; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php if(isset($thispage['description'])) echo $thispage['description']; ?>">
<meta name="keywords" content="<?php if(isset($thispage['keywords'])) echo $thispage['keywords']; ?>" />
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
<!-- navigation -->
	<?php include('designs/header.php'); ?>
<!-- /navigation -->

<!-- Register -->
<section class="contact-us" id="contact">
	<h3 class="text-center"><?php language('addproject'); ?></h3>
	<p class="text-center">
	<?php
		if(isset($_GET['message']) && $_GET['message'] == 'm1') language('m5');
		elseif(isset($_GET['message']) && $_GET['message'] == 'm2') language('m2');
		elseif(isset($_GET['message']) && $_GET['message'] == 'm3') language('m9');
		elseif(isset($_GET['message']) && $_GET['message'] == 'm4') language('m13');
		elseif(isset($_GET['message']) && $_GET['message'] == 'm6') language('m18');
	?>
	</p>
	<div class="container">		
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<form action="#" method="post">
					<div class="row">
						<div class="col-sm-4 col-sm-offset-8 form-group" style="margin-bottom:55px;">
							<h3><label style="color:#fff;"><?php language('projectinfo'); ?></label></h3>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3 col-sm-push-9 form-group">
							<label style="color:#fff;"><?php language('projectname'); ?></label>
						</div>
						<div class="col-sm-9 col-sm-pull-3 form-group">
							<input type="text" class="form-control" name="name" id="name" placeholder="<?php language('projectname'); ?>" autocomplete="off" required/>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3 col-sm-push-9 form-group">
							<label style="color:#fff;"><?php language('value'); ?></label>
						</div>
						<div class="col-sm-9 col-sm-pull-3 form-group">
							<input type="text" class="form-control" name="value" id="name" placeholder="<?php language('value'); ?>" required/>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3 col-sm-push-9 form-group">
							<label style="color:#fff;"><?php language('location'); ?></label>
						</div>
						<div class="col-sm-9 col-sm-pull-3 form-group">
							<input type="text" class="form-control" name="location" id="name" placeholder="<?php language('location'); ?>" autocomplete="off" required/>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3 col-sm-push-9 form-group">
							<label style="color:#fff;"><?php language('description'); ?></label>
						</div>
						<div class="col-sm-9 col-sm-pull-3 form-group">
							<textarea class="form-control" name="description" id="comments" placeholder="<?php language('description'); ?>" rows="5" required></textarea><br>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3 col-sm-push-9 form-group">
							<label style="color:#fff;"><?php language('receiptdate'); ?></label>
						</div>
						<div class="col-sm-9 col-sm-pull-3 form-group">
							<input type="date" class="form-control" name="receiptdate" id="name" placeholder="<?php language('receiptdate'); ?>" autocomplete="off" required/>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3 col-sm-push-9 form-group">
							<label style="color:#fff;"><?php language('deliverydate'); ?></label>
						</div>
						<div class="col-sm-9 col-sm-pull-3 form-group">
							<input type="date" class="form-control" name="deliverydate" id="name" placeholder="<?php language('deliverydate'); ?>" autocomplete="off" required/>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3 col-sm-push-9 form-group">
							<label style="color:#fff;"><?php language('contractor'); ?></label>
						</div>
						<div class="col-sm-9 col-sm-pull-3 form-group">
							<input type="text" class="form-control" name="contractor" id="name" placeholder="<?php language('contractor'); ?>" autocomplete="off" required/>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3 col-sm-push-9 form-group">
							<label style="color:#fff;"><?php language('consultant'); ?></label>
						</div>
						<div class="col-sm-9 col-sm-pull-3 form-group">
							<input type="text" class="form-control" name="consultant" id="name" placeholder="<?php language('consultant'); ?>" autocomplete="off" required/>
						</div>
					</div>
					
					<div class="row">
						<div class="col-sm-4 col-sm-offset-8 form-group" style="margin-top:55px; margin-bottom:55px;">
							<h3><label style="color:#fff;"><?php language('projectinfo'); ?></label></h3>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3 col-sm-push-9 form-group">
							<label style="color:#fff;"><?php language('name'); ?></label>
						</div>
						<div class="col-sm-9 col-sm-pull-3 form-group">
							<input type="text" class="form-control" name="ownername" id="name" placeholder="<?php language('name'); ?>" autocomplete="off" required/>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3 col-sm-push-9 form-group">
							<label style="color:#fff;"><?php language('location'); ?></label>
						</div>
						<div class="col-sm-9 col-sm-pull-3 form-group">
							<input type="text" class="form-control" name="ownerlocation" id="name" placeholder="<?php language('location'); ?>" autocomplete="off" required/>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3 col-sm-push-9 form-group">
							<label style="color:#fff;"><?php language('contact'); ?></label>
						</div>
						<div class="col-sm-9 col-sm-pull-3 form-group">
							<textarea class="form-control" name="ownercontact" id="comments" placeholder="<?php language('contact'); ?>" rows="5" required></textarea><br>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 form-group">
							<button type="submit" class="btn btn-outline1 btn-lg" name="submit" id="submit"><?php language('save'); ?></button>
						</div>
					</div>
				</form>			
			</div>
		</div>
	</div>
</section>
<!-- /Register -->

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
<?php include('designs/messages.php'); ?>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<!-- js for banner -->
<script src="js/index.js"></script>
<!-- js for banner -->
<!-- js for skill section -->
<script src="js/progressbar.js"></script>
<script>
    // Display the progress bar calling progressbar.js
	$('.progressbarPhp').progressBar({
		shadow : true,
		percentage : false,
		animation : true,
		animateTarget : true,
		barColor : "rgb(51,122,183)",
	});
	//Menu
	$(".spinDown").click(function() {
		var target = $(this).data("target");
		var scrollFix = -80;
		target = "#" + target;
		$("html,body").animate({
			scrollTop : $(target).offset().top + scrollFix
		}, 1000);
		return false;
	});
</script>
<!-- /js for skill section -->
<!-- js for portfolio section -->
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpGridGallery.js"></script>
<script>
	new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
</script>
<!-- js for portfolio section -->
<!-- js for smooth scrolling -->
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  // Store hash
  var hash = this.hash;

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 900, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
    });
  });
})
</script>
<!-- /js for smooth scrolling -->
<!-- js for sliding animations -->
<script>
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>
<!-- /js for sliding animations -->
<!-- js for back to top -->
<script src="js/main.js"></script>
<!-- /js for back to top -->
<!-- /js files -->
</body>
</html>
<?php } else header('Location: index.php'); ?>