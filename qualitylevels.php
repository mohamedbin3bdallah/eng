<?php
session_start();
if(isset($_SESSION['userid']))
{
	$lang = 'ar';
	$_SERVER['HTTP_PRAGMA'] = 'no-cache';
	$_SERVER['HTTP_CACHE_CONTROL'] = 'no-cache';
	include('develops/qualitylevels-front.php');
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
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
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
	<h3 class="text-center"><?php if(isset($thispage['title'])) echo $thispage['title']; ?></h3>
	<p class="text-center">
		<?php if(isset($_SESSION['userid'])) { ?><button type="button" class="btn btn-success" onclick="location.href = 'qualitylevel.php'">مستوى جودة جديد</button><?php } ?>
	</p>
	<div class="container">	
		<?php if(!empty($qualitylevels)) { ?>
		<div class="row">
			<?php for($i=0;$i<count($qualitylevels);$i++) { ?>
				<div class="col-lg-4 col-md-4 <?php if($i%3 == 0) echo 'col-lg-push-8 col-md-push-8'; elseif($i%3 == 2) echo 'col-lg-pull-8 col-md-pull-8'; ?>">
					<div class="thumbnail" id="product" style="background:rgba(255, 255, 255, 0); border:0;">
						<div class="caption" style="/*position: absolute;*/ top: 0; bottom: 0; left: 0; right: 0; text-align: center; margin: 55px; padding: 25px; background: rgba(0, 0, 0, 0.5); color: #fff; border-radius: 15px;">
							<h5 style="text-align:center;margin-bottom:25px;"><?php echo $qualitylevels[$i]['id']; ?></h5>
							<br>
							<a class="btn btn-info" href="#" data-toggle="modal" data-target="#details-<?php echo $qualitylevels[$i]['id']; ?>"><?php language('more'); ?></a>
							<!--<button type="button" class="btn btn-info" onclick="location.href = 'project.php?id=<?php //echo $qualitylevels[$i]['id']; ?>'"><?php //language('more'); ?></button>-->
							<?php if(isset($_SESSION['userid'])) { ?><!--<button type="button" class="btn btn-warning" onclick="location.href = 'editproject.php?id=<?php //echo $qualitylevels[$i]['id']; ?>'"><?php //language('edit'); ?></button>-->
							<button type="submit" class="btn btn-danger" onclick="location.href = 'delqualitylevel.php?id=<?php echo $qualitylevels[$i]['id']; ?>'"><?php language('delete'); ?></button><?php } ?>
						</div>
					</div>
				</div>
				<div id="details-<?php echo $qualitylevels[$i]['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<br>
        					</div>
							<div class="modal-body">
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">مستوى جودة الجداول الزمنية بكافة أنوعها</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	الجدول الزمني للإنشاء</h5>
										<h6><?php echo $qualitylevels[$i]['timecreate']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	الجدول الزمني لتسليم المخططات</h5>
										<h6><?php echo $qualitylevels[$i]['timeplan']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">3-	الجدول الزمني لتسليم المواد</h5>
										<h6><?php echo $qualitylevels[$i]['timematerial']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">مستوى الجودة من خلال مطابقة المواصفات</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	الموردين المعتمدين للمواد والعينات (القسم المعماري – الميكانيكا – الكهرباء)</h5>
										<h6><?php echo $qualitylevels[$i]['suppliers']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	جميع العينات مطابقة للمواصفات ومعتمدة من المالك والإستشاري</h5>
										<h6><?php echo $qualitylevels[$i]['samples']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">مستوى الجودة من خلال مخططات الورشة</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	مقياس الرسم المناسب للمخططات</h5>
										<h6><?php echo $qualitylevels[$i]['scale']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	الإعتبارات الشكلية للمخططات</h5>
										<h6><?php echo $qualitylevels[$i]['shape']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">3-	الإعتبارات الفنية للمخططات</h5>
										<h6><?php echo $qualitylevels[$i]['technical']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">تحريات الجودة من خلال مستوى عمالة المقاول</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	بنود الأعمال المعمارية</h5>
										<h6><?php echo $qualitylevels[$i]['architectworks']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	بنود الأعمال الإنشائية</h5>
										<h6><?php echo $qualitylevels[$i]['createworks']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">3-	بنود الأعمتال الميكانيكية</h5>
										<h6><?php echo $qualitylevels[$i]['mechanicworks']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">4-	بنود الأعمال الكهربية</h5>
										<h6><?php echo $qualitylevels[$i]['electricworks']; ?></h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-4<?php if($lang == 'ar') echo ' col-lg-push-7 col-md-push-7'; ?>">
			</div>
			<div class="col-lg-8 col-md-8<?php if($lang == 'ar') echo ' col-lg-pull-5 col-md-pull-5'; ?>">
			<nav>
				<ul class="pagination">
					<?php if($totalPages > 1) { ?><li><a style="background:rgba(0, 0, 0, 0.5); color:#fff;" href="?page=<?php echo $totalPages; ?>"><?php language("last"); ?></a></li><?php } ?>
					<?php if($page < $totalPages-1) { ?><li>
						<a style="background:rgba(0, 0, 0, 0.5); color:#fff;" href="?page=<?php echo $page+2; ?>" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li><?php } ?>
					<?php if($page < $totalPages) { ?><li><a style="background:rgba(0, 0, 0, 0.5); color:#fff;" href="?page=<?php echo $page+1; ?>"><?php echo $page+1; ?></a></li><?php } ?>
					<?php if($totalPages > 1) { ?><li><a style="background:rgba(0, 0, 0, 0.5); color:#fff;" href="?page=<?php echo $page; ?>"><?php echo $page; ?></a></li><?php } ?>
					<?php if($page > 1) { ?><li><a style="background:rgba(0, 0, 0, 0.5); color:#fff;" href="?page=<?php echo $page-1; ?>"><?php echo $page-1; ?></a></li><?php } ?>
					<?php if($page > 3) { ?><li>
						<a style="background:rgba(0, 0, 0, 0.5); color:#fff;" href="?page=<?php echo $page-2; ?>" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li><?php } ?>
					<?php if($totalPages > 1) { ?><li><a style="background:rgba(0, 0, 0, 0.5); color:#fff;" href="?page=1"><?php language("first"); ?></a></li><?php } ?>
				</ul>
			</nav>
			</div>
		</div>
		<?php } ?>
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
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script src="js/form.js"></script>
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