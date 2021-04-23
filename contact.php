<?php
	session_start();
	$lang = 'ar';
	$_SERVER['HTTP_PRAGMA'] = 'no-cache';
	$_SERVER['HTTP_CACHE_CONTROL'] = 'no-cache';
	include('develops/contact-front.php');
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

<section class="contact-us" id="contact">
	<div class="container" style="background-color:rgba(255, 255, 255, 0.12); padding:15px; border-radius:15px; box-shadow: 10px 10px 5px rgba(255, 255, 255, 0.35);">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<h3 class="text-center">اتصل بنا</h3>
				<p class="text-center">
				<?php
					if(isset($_GET['message']) && $_GET['message'] == 'm1') echo '<div style="color:#ff7077; text-align:center;">ادخل كل الخانات بشكل صحيح</div>';
					elseif(isset($_GET['message']) && $_GET['message'] == 'm2') echo '<div style="color:#ff7077; text-align:center;">حدث خطأ ما</div>';
					elseif(isset($_GET['message']) && $_GET['message'] == 'm6') echo '<div style="color:#70ff7e; text-align:center;">شكرا لك</div>';
				?>
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-5 col-md-5">
				<div class="contact-info">
					<h4 class="">معلومات التواصل :-</h4>
					<?php if($contact['phone'] != '') { ?><p class=""><strong>رقم الهاتف :</strong> <?php echo $contact['phone']; ?></p><?php } ?>
					<?php if($contact['mobile'] != '') { ?><p class=""><strong>رقم الموبايل :</strong> <?php echo $contact['mobile']; ?></p><?php } ?>
					<?php if($contact['email'] != '') { ?><p class=""><strong>البريد الألكترونى :</strong> <a href="mailto:<?php echo $contact['email']; ?>"><?php echo $contact['email']; ?></a></p><?php } ?>
					<?php if($contact['address'] != '') { ?><p class="addr "><strong>العنوان :</strong> <?php echo $contact['address']; ?>.</p><?php } ?>
					<ul class="social-icons2">
						<?php if($contact['facebook'] != '') { ?><li><a href="<?php echo $contact['facebook']; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li><?php } ?>
						<?php if($contact['twitter'] != '') { ?><li><a href="<?php echo $contact['twitter']; ?>"><i class="fa fa-twitter" target="_blank"></i></a></li><?php } ?>
						<?php if($contact['linkedin'] != '') { ?><li><a href="<?php echo $contact['linkedin']; ?>"><i class="fa fa-linkedin" target="_blank"></i></a></li><?php } ?>
						<?php if($contact['googleplus'] != '') { ?><li><a href="<?php echo $contact['googleplus']; ?>"><i class="fa fa-google-plus" target="_blank"></i></a></li><?php } ?>
					</ul>
				</div>
			</div>
			<div class="col-lg-7 col-md-7">
				<form action="#" method="POST">
					<div class="row">
						<div class="col-sm-12 form-group">
							<input class="form-control" id="name" name="name" placeholder="الأسم" type="text" required>
						</div>
					</div>
					<div class="row email-bar">
						<div class="col-sm-12 form-group">
							<input class="form-control" id="email" name="email" placeholder="البريد الألكترونى" type="email" required>
						</div>
					</div>
					<textarea class="form-control" id="comments" name="message" placeholder="تفاصيل الرسالة" rows="5"></textarea><br>
					<div class="row">
						<div class="col-sm-12 form-group">
							<button class="btn btn-outline1 btn-lg" type="submit" name="addmessage">ارسال</button>
						</div>
					</div>
				</form>			
			</div>
		</div>
	</div>
</section>
<!-- /Contact -->
<!-- Google Map -->
<section class="map">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<iframe class="googlemaps" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d380510.6741687111!2d-88.01234121699822!3d41.83390417061058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1455598377120" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>	
		</div>
	</div>
</section>
<!-- /Google Map -->

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