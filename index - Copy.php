<?php
	session_start();
	$lang = 'ar';
	$_SERVER['HTTP_PRAGMA'] = 'no-cache';
	$_SERVER['HTTP_CACHE_CONTROL'] = 'no-cache';
	include('develops/index-front.php');
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
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php"><h1><?php echo $system['website']; ?></h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#contact">اتصل بنا</a></li>
				<li><a href="#about">من نحن</a></li>
				<!--<li><a href="#skill">اعمالنا</a></li>
				<li><a href="#service">خدماتنا</a></li>-->
				<li><a href="#portfolio">الأعمال</a></li>
				<li><a href="projects.php">المشروعات</a></li>
				<?php if(isset($_SESSION['userid'])) { ?>
					<li><a href="projectfile.php">ملف المشروع</a></li>
					<li><a href="logout.php">الخروج</a></li>
				<?php } else { ?>
					<!--<li><a href="register.php">التسجيل</a></li>-->
					<li><a href="login.php">دخول المستخدم</a></li>
				<?php } ?>
				<li><a href="#slider">الرئيسية</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<!-- /navigation -->
<!-- banner section -->
<?php $slides = array_diff(scandir('uploads/slides'), array('.','..')); ?>
<?php if(!empty($slides)) { ?>
<section id="slider" class="content">
	<ul class="slider-wrapper">
		<?php for($sl=2;$sl<count($slides)+2;$sl++) { ?>
		<li class="<?php if($sl == 2) echo 'current-slide'; ?>">
			<img src="uploads/slides/<?php echo $slides[$sl]; ?>" title="" alt="">
			<!--<div class="caption">
				<h3 class="slider-title">مشاريع تم انجازها</h3>
				<p>تم انجاز المشروع منذ سنتين .</p>
			</div>-->
		</li>
		<?php } ?>
	</ul>
	<div class="slider-shadow"></div>
	<ul id="control-buttons" class="control-buttons"></ul>
</section>
<?php } ?>
<!-- /banner section -->
<!-- about section -->
<section class="about-us" id="about">
	<div class="container">
		<div class="col-lg-12">
			<h2 class="text-center slideanim">من نحن</h2>
			<p class="text-center slideanim"><?php echo $about['description']; ?> .</p>
		</div>
	</div>
</section>
<section class="about-us" id="about">
	<div class="container">
		<div class="col-lg-12">
			<h2 class="text-center slideanim">خريطة الموقع</h2>
			<p class="text-center slideanim"><?php echo $about['websitemap']; ?> .</p>
		</div>
	</div>
</section>
<!-- /about section -->
<!-- skill section -->
<!--<section class="our-skills slideanim" id="skill">
	<h3 class="text-center slideanim">نبذة مختصرة</h3>
	<p class="text-center slideanim">نبذة مختصرة لخدماتنا توضح اهدافنا ورؤيتنا فى العمل.</p>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="video slideanim"> 
					<iframe src="https://player.vimeo.com/video/15428374?title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>	
			</div>
			<div class="col-lg-6 col-md-6 slideanim">
				<ul class='skills'>
					<li class='progressbarPhp' data-width='70' data-target='100'>80% تصميم وبناء</li>
					<li class='progressbarPhp' data-width='90' data-target='100'>90% تنفيذ المشاريع</li>
					<li class='progressbarPhp' data-width='65' data-target='100'>65% تصميم الواحدات</li>
					<li class='progressbarPhp' data-width='80' data-target='100'>55% تأهيل مساعدين</li>
				</ul>
			</div>
		</div>
	</div>
</section>-->
<!-- /skill section -->
<!-- service section -->
<!--<section class="our-services" id="service">
	<h3 class="text-center slideanim">حول خدماتنا</h3>
	<p class="text-center slideanim">هنا تفاصيل بعض الخدمات التى نقدمها سوف نكتب نبذة عنها فى كل خانة.</p>
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6">
				<div class="serv-info">
					<i class="fa fa-sun-o slideanim" aria-hidden="true"></i>
					<h4 class="text-center slideanim">مميزاتنا</h4>
					<p class="serv slideanim">'مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا .</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6">
				<div class="serv-info">
					<i class="fa fa-desktop slideanim" aria-hidden="true"></i>
					<h4 class="text-center slideanim">مميزاتنا </h4>
					<p class="serv slideanim"> مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا .</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6">
				<div class="serv-info">
					<i class="fa fa-life-ring slideanim" aria-hidden="true"></i>
					<h4 class="text-center slideanim">مميزاتنا</h4>
					<p class="serv slideanim"> مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا .</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6">
				<div class="serv-info">
					<i class="fa fa-trophy slideanim" aria-hidden="true"></i>
					<h4 class="text-center slideanim">مميزاتنا</h4>
					<p class="serv slideanim"> مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا .</p>
				</div>
			</div>
		</div>
		<div class="row serv-row">
			<div class="col-lg-3 col-md-3 col-sm-6">
				<div class="serv-info">
					<i class="fa fa-hourglass slideanim" aria-hidden="true"></i>
					<h4 class="text-center slideanim">مميزاتنا</h4>
					<p class="serv slideanim"> مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا .</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6">
				<div class="serv-info">
					<i class="fa fa-cubes slideanim" aria-hidden="true"></i>
					<h4 class="text-center slideanim">مميزاتنا</h4>
					<p class="serv slideanim"> مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا .</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6">
				<div class="serv-info">
					<i class="fa fa-shopping-basket slideanim" aria-hidden="true"></i>
					<h4 class="text-center slideanim">مميزاتنا</h4>
					<p class="serv slideanim"> مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا .</p>
				</div>		
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6">
				<div class="serv-info">
					<i class="fa fa-fort-awesome slideanim" aria-hidden="true"></i>
					<h4 class="text-center slideanim">مميزاتنا</h4>
					<p class="serv slideanim"> مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا مميزاتنا .</p>
				</div>
			</div>
		</div>
	</div>	
</section>-->
<!-- /service section -->
<!-- portfolio section -->
<?php if(!empty($works)) { ?>
<section class="our-portfolio slideanim" id="portfolio">
	<h3 class="text-center slideanim">اعمال سابقة</h3>
	<!--<p class="text-center slideanim">اعمال سابقة لنا اعمال سابقة لنا اعمال سابقة لنا اعمال سابقة لنا اعمال سابقة لنا.</p>-->
	<div class="container" dir="rtl">
		<?php if(!empty($works)) { ?>
		<div class="row">
			<?php for($pr=0;$pr<count($works);$pr++) { $works[$pr]['picture'] = array_diff(scandir('uploads/works/'.$works[$pr]['id']), array('.','..')); ?>
				<div class="col-lg-4 col-md-4 <?php if($pr%3 == 0) echo 'col-lg-push-8 col-md-push-8'; elseif($pr%3 == 2) echo 'col-lg-pull-8 col-md-pull-8'; ?>">
					<div class="thumbnail" id="product" style="width:100%; height:auto; background-image:url(<?php echo 'uploads/works/'.$works[$pr]['id'].'/'.$works[$pr]['picture'][array_rand($works[$pr]['picture'])]; ?>); background-repeat:no-repeat; background-size:100% 100%;">
						<!--<img src="uploads/works/<?php echo $works[$pr]['id']; ?>/<?php echo $works[$pr]['picture'][array_rand($works[$pr]['picture'])]; ?>" alt="<?php echo $work[$pr]['title']; ?>" style="height:155px;">-->
						<div class="caption" style="/*position: absolute;*/ top: 0; bottom: 0; left: 0; right: 0; text-align: center; margin: 55px; padding: 25px; background: rgba(0, 0, 0, 0.5); color: #fff; border-radius: 15px;">
							<h5 style="text-align:center;margin-bottom:25px;"><?php echo $works[$pr]['title']; ?></h5>
							<br>
							<button type="button" class="btn btn-info" onclick="location.href = 'work.php?id=<?php echo $works[$pr]['id']; ?>'">المشاهدة</button>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
		<div class="row" style="margin-top:55px; text-align:center;">
			<button type="button" class="btn btn-default" onclick="location.href = 'works.php'"><?php language('more'); ?></button>
		</div>
		<?php } ?>
		
		<!--<div id="grid-gallery" class="grid-gallery">
			<section class="grid-wrap">
				<ul class="grid">
					<?php for($wk=0;$wk<count($works);$wk++) { $works[$wk]['picture'] = array_diff(scandir('uploads/works/'.$works[$wk]['id']), array('.','..')); ?>
						<li class="slideanim">
							<figure>
								<img src="uploads/works/<?php echo $works[$wk]['id']; ?>/<?php echo $works[$wk]['picture'][array_rand($works[$wk]['picture'])]; ?>" alt="<?php echo $works[$wk]['title']; ?>"/>
							</figure>
						</li>
					<?php } ?>
			</section>
			<!--<section class="slideshow">
				<ul>
					<?php for($wk=0;$wk<count($works);$wk++) { ?>
						<li>
							<figure>
								<figcaption>
									<h4><?php echo $works[$wk]['title']; ?></h4>
									<p class="port"><?php echo $works[$wk]['description']; ?></p>
								</figcaption>
								<img src="uploads/works/<?php echo $works[$wk]['id']; ?>/<?php echo $works[$wk]['picture'][array_rand($works[$wk]['picture'])]; ?>" alt="<?php echo $works[$wk]['title']; ?>"/>
								<button type="button" class="btn btn-info" onclick="location.href = 'work.php?id=<?php echo $works[$wk]['id']; ?>'"><?php language('more'); ?></button>
							</figure>
						</li>
					<?php } ?>
				</ul>
				<nav>
					<span class="icon nav-prev"></span>
					<span class="icon nav-next"></span>
					<span class="icon nav-close"></span>
				</nav>
			</section>
		</div>-->
	</div>
</section>
<?php } ?>
<!-- portfolio section -->
<!-- team section -->
<?php if(!empty($employees)) { ?>
<section class="our-team" id="team">
	<h3 class="text-center slideanim">فريق العمل</h3>
	<!--<p class="text-center slideanim">فريق عمل شركتنا فريق عمل شركتنافريق عمل شركتنافريق عمل شركتنافريق عمل شركتنا.</p>-->
	<div class="container">
		<div class="main">
			<?php for($ep=0;$ep<count($employees);$ep++) { ?>
				<div class="view view-first slideanim">
					<img src="uploads/employees/<?php echo $employees[$ep]['picture']; ?>" />
					<div class="mask">
						<h4><?php echo $employees[$ep]['name']; ?></h4>
							<ul class="social-icons1">
								<?php if($employees[$ep]['facebook'] != '') { ?><li><a href="<?php echo $employees[$ep]['facebook']; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li><?php } ?>
								<?php if($employees[$ep]['twitter'] != '') { ?><li><a href="<?php echo $employees[$ep]['twitter']; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li><?php } ?>
								<?php if($employees[$ep]['linkedin'] != '') { ?><li><a href="<?php echo $employees[$ep]['linkedin']; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li><?php } ?>
								<?php if($employees[$ep]['googleplus'] != '') { ?><li><a href="<?php echo $employees[$ep]['googleplus']; ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li><?php } ?>
							</ul>
						<a href="#" class="info"><?php echo $employees[$ep]['job']; ?></a>
					</div>
				</div>  
            <?php } ?>
        </div>
	</div>
</section>
<?php } ?>
<!-- /team section -->
<!-- skill section -->
<section class="our-skills slideanim" id="skill">
	<h3 class="text-center slideanim">نبذة مختصرة</h3>
	<p class="text-center slideanim">نبذة مختصرة لخدماتنا توضح اهدافنا ورؤيتنا فى العمل.</p>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="video slideanim"> 
					<iframe src="https://player.vimeo.com/video/15428374?title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>	
			</div>
			<div class="col-lg-6 col-md-6 slideanim">
				<p style="margin-top:55px; color:#fff; text-align:justify; line-height:200%;"><?php echo $about['videotext']; ?></p>
			</div>
			<!--<div class="col-lg-6 col-md-6 slideanim">
				<ul class='skills'>
					<li class='progressbarPhp' data-width='70' data-target='100'>80% تصميم وبناء</li>
					<li class='progressbarPhp' data-width='90' data-target='100'>90% تنفيذ المشاريع</li>
					<li class='progressbarPhp' data-width='65' data-target='100'>65% تصميم الواحدات</li>
					<li class='progressbarPhp' data-width='80' data-target='100'>55% تأهيل مساعدين</li>
				</ul>
			</div>-->
		</div>
	</div>
</section>
<!-- /skill section -->
<!-- Google Map -->
<section class="map">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 slideanim">
				<iframe class="googlemaps" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d380510.6741687111!2d-88.01234121699822!3d41.83390417061058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1455598377120" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>	
		</div>
	</div>
</section>
<!-- /Google Map -->
<section class="contact-us slideanim" id="contact">
	<h3 class="text-center slideanim">اتصل بنا</h3>
	<p class="text-center slideanim">
		<?php
			if(isset($_GET['message']) && $_GET['message'] == 'm1') echo '<div style="color:#ff7077; text-align:center;">ادخل كل الخانات بشكل صحيح</div>';
			elseif(isset($_GET['message']) && $_GET['message'] == 'm2') echo '<div style="color:#ff7077; text-align:center;">حدث خطأ ما</div>';
			elseif(isset($_GET['message']) && $_GET['message'] == 'm6') echo '<div style="color:#70ff7e; text-align:center;">شكرا لك</div>';
		?>
	</p>
	<div class="container">		
		<div class="row">
			<div class="col-lg-5 col-md-5">
				<div class="contact-info">
					<h4 class="slideanim">معلومات التواصل :-</h4>
					<?php if($contact['phone'] != '') { ?><p class="slideanim"><strong>رقم الهاتف :</strong> <?php echo $contact['phone']; ?></p><?php } ?>
					<?php if($contact['mobile'] != '') { ?><p class="slideanim"><strong>رقم الموبايل :</strong> <?php echo $contact['mobile']; ?></p><?php } ?>
					<?php if($contact['email'] != '') { ?><p class="slideanim"><strong>البريد الألكترونى :</strong> <a href="mailto:<?php echo $contact['email']; ?>"><?php echo $contact['email']; ?></a></p><?php } ?>
					<?php if($contact['address'] != '') { ?><p class="addr slideanim"><strong>العنوان :</strong> <?php echo $contact['address']; ?>.</p><?php } ?>
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
						<div class="col-sm-12 form-group slideanim">
							<input class="form-control" id="name" name="name" placeholder="الأسم" type="text" required>
						</div>
					</div>
					<div class="row email-bar">
						<div class="col-sm-12 form-group slideanim">
							<input class="form-control" id="email" name="email" placeholder="البريد الألكترونى" type="email" required>
						</div>
					</div>
					<textarea class="form-control slideanim" id="comments" name="message" placeholder="تفاصيل الرسالة" rows="5"></textarea><br>
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