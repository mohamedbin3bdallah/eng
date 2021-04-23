<?php
	session_start();
	if(isset($_GET['id']) && abs((int)($_GET['id'])) > 0)
{
	$_GET['id'] = abs((int)($_GET['id']));
	$lang = 'ar';
	$_SERVER['HTTP_PRAGMA'] = 'no-cache';
	$_SERVER['HTTP_CACHE_CONTROL'] = 'no-cache';
	include('develops/work-front.php');
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
<title><?php if(isset($single['title'])) echo $single['title']; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php if(isset($single['description'])) echo $single['description']; ?>">
<meta name="keywords" content="<?php if(isset($single['title'])) echo $single['title']; ?>" />
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

<!-- Projects -->
<!--<section class="contact-us" id="contact">
	<h3 class="text-center"><?php language('works'); ?></h3>
	<p class="text-center"></p>
	<div class="container">	
		<?php if(!empty($single)) { ?>

			<h2 style="text-align:center; color:#fff; margin-bottom:10px;"><?php echo $single['title']; ?></h2>
			<div class="row">
				<?php $blogimgs = array_diff(scandir('uploads/works/'.$_GET['id']), array('.','..')); ?>
				<?php if(!empty($blogimgs)) { ?>
					<?php for($bim=2;$bim<count($blogimgs)+2;$bim++) { ?>
						<div style="margin-top:15px;" class="<?php if(count($blogimgs) == 1) echo 'col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3'; elseif(count($blogimgs) == 2) echo 'col-lg-6 col-md-6'; elseif(count($blogimgs) == 3) echo 'col-lg-4 col-md-4'; elseif($bim%4 == 2) echo 'col-lg-3 col-md-3 col-lg-push-9 col-md-push-9'; elseif($bim%4 == 3) echo 'col-lg-3 col-md-3 col-lg-push-3 col-md-push-3'; elseif($bim%4 == 0) echo 'col-lg-3 col-md-3 col-lg-pull-3 col-md-pull-3'; elseif($bim%4 == 1) echo 'col-lg-3 col-md-3 col-lg-pull-9 col-md-pull-9'; ?> col-sm-6 col-xs-12">
							<center><img class="img-responsive" src="<?php echo 'uploads/works/'.$_GET['id'].'/'.$blogimgs[$bim]; ?>" alt="<?php echo $single['title']; ?>" style="border-radius:55px;"></center>
						</div>
					<?php } ?>
				<?php } ?>
			</div>
				
			<?php } else echo '<h4 style="color:#fff; margin-bottom:55px;">لا توجد بيانات</h4>'; ?>
	</div>
</section>-->
<!-- /Projects -->

<!-- banner section -->
<?php $slides = array_diff(scandir('uploads/works/'.$_GET['id']), array('.','..')); ?>
<?php if(!empty($slides)) { ?>
<section id="slider" class="contact-us">
	<div class="container" style="background-color:rgba(255, 255, 255, 0.3); padding:15px; border-radius:15px;">
		<h3 class="text-center"><?php echo $single['title']; ?></h3>
		<div class="row">
		<div class="col-md-6 col-md-offset-3">
		<ul class="slider-wrapper" style="margin-top:55px; max-height:555px;">
			<?php for($sl=2;$sl<count($slides)+2;$sl++) { ?>
			<li class="<?php if($sl == 2) echo 'current-slide'; ?>">
				<img class="img-responsive" src="uploads/works/<?php echo $_GET['id']; ?>/<?php echo $slides[$sl]; ?>" title="<?php echo $single['title']; ?>" alt="<?php echo $single['title']; ?>">
			</li>
			<?php } ?>
		</ul>
		<div class="slider-shadow"></div>
		<ul id="control-buttons" class="control-buttons"></ul>
		</div>
		</div>
	</div>
</section>
<?php } ?>
<!-- /banner section -->

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