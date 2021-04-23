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
	<?php include('designs/header.php'); ?>
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
	<div class="container" style="padding-top:15px; padding-bottom:15px; border: 2px solid #ccc; border-radius:15px; box-shadow: 10px 10px 5px #888888;">
		<div class="col-lg-12">
			<h2 class="text-center slideanim">من نحن</h2>
			<p class="text-center slideanim" style="text-align:justify; color:#000;"><?php echo $about['description']; ?> .</p>
		</div>
	</div>
</section>
<section class="about-us" id="about">
	<div class="container" style="padding-top:15px; padding-bottom:15px; border: 2px solid #ccc; border-radius:15px; box-shadow: 10px 10px 5px #888888;">
		<div class="col-lg-12">
			<h2 class="text-center slideanim">شرح التعامل مع مركز المعلومات</h2>
			<p class="text-center slideanim" style="text-align:justify; color:#000;"><?php echo $about['websitemap']; ?> .</p>
		</div>
	</div>
</section>
<!-- /about section -->


<section class="about-us" id="about">
	<div class="container">
		<div class="col-lg-12">
			<h2 class="text-center slideanim">خطة مركز المعلومات</h2>
			<p class="text-center slideanim" style="text-align:justify; color:#000;">
				<img class="img-responsive" src="uploads/index1.jpg" width="100%" />
			</p>
		</div>
	</div>
</section>

<section class="about-us" id="about">
	<div class="container">
		<div class="col-lg-12">
			<h2 class="text-center slideanim">الهدف من مركز المعلومات</h2>
			<p class="text-center slideanim" style="text-align:justify; color:#000;">
				<img class="img-responsive" src="uploads/index2.jpg" width="100%" />
			</p>
		</div>
	</div>
</section>

<!-- about section -->
<section class="about-us" id="about">
	<div class="container" style="padding-top:15px; border: 2px solid #ccc; border-radius:15px; box-shadow: 10px 10px 5px #888888;">
		<div class="col-lg-7" style="border-right: 1px solid #ccc;">
			<h3 class="text-center slideanim">Scope of work for The Information center of construction projects</h3>
			<p class="text-center slideanim" style="text-align:justify; color:#000;" dir="ltr">
				1-	Establish unified information center for all the construction projects and update on according client’s request.<br>
				2-	Inspect the work, files and personnel through random visits. Submit the report for each visit to home it my concern.<br>
				3-	Provide the projects sites with technical assistance and establish clear procedure for the construction supervision, furnish the projects with the updated standards and technical specifications.<br>
				4-	Evaluate the executed works and personnel performance using the standard forms generated for this purpose.<br>
				5-	Check the perfection of contract documents and availability in the project site.<br>
				6-	Check the procedure for preparing, presenting and approval of the change orders.<br>
				7-	Evaluate the relation between the contractor and the supervision personnel and correspondence with the contractor.<br>
				8-	Review the daily, weekly and monthly project reports.<br>
				9-	Review the procedure for preparing the monthly payment and the role of each person in this procedure.<br>
				10-	Verify that handing over, review and approval of work shop drawings and as- built drawings are performed properly.

			</p>
		</div>
		<div class="col-lg-5" style="border-left: 1px solid #ccc;">
			<h3 class="text-center slideanim">نطاق عمل مركز المعلومات للمشاريع الإنشائية</h3>
			<p class="text-center slideanim" style="text-align:justify; color:#000;">
				1-	إحداث مركز معلومات موحد لكافة أنواع المشاريع الإنشائية، وتحديثة تبعا لرغبة العميل.<br>
				2-	تفقد العمل والملفات والعناصر من خلال زيارات دورية للمشاريع وإعداد التقرير الخاص بكل زيارة ورفعة لمن يهمة الأمر أو مالك المشروع.<br>
				3-	تقديم المساعدة الفنية للمواقع ووضع أسس واضحة لإعمال الإشراف على التنفيذ وتزويد المشاريع بأحدث النظم والمواصفات الفنية.<br>
				4-	تقييم الأعمال المنجزة بالمشاريع وتقييم طريقة الأداء لكافة العناصر بإستخدام النماذج المعدة لهذا الغرض.<br>
				5-	التأكد من إكتمال وثائق العقد وتوافرها بالموقع.<br>
				6-	تقييم العلاقة بين المقاول وعناصر جهاز الإشراف والمراسلات فيما بينها.<br>
				7-	الإطلاع على نماذج التقارير اليومية والأسبوعية والشهرية.<br>
				8-	مراجعة عملية إعداد المستخلصات الشهرية ودور كل عنصر فيها.<br>
				9-	التأكد من أن عملية استلام ومراجعة مخططات الورشة والمخططات كما نفذ تتم بشكل صحيح

			</p>
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
			<div class="col-lg-6 col-md-6 slideanim" style="margin-top:7px; border: 2px solid #fff;">
				<h3 style="margin-top:1%; color:#fff; text-align:center;"><?php //echo $about['videotitle']; ?></h3>
				<p style="margin-top:3%; margin-bottom:1%; color:#fff; text-align:justify; line-height:200%;"><?php //echo $about['videotext']; ?></p>
			</div>
		</div>
	</div>
</section>-->
<section class="our-skills slideanim" id="skill">
	<h3 class="text-center slideanim">نبذة مختصرة</h3>
	<p class="text-center slideanim">نبذة مختصرة لخدماتنا توضح اهدافنا ورؤيتنا فى العمل.</p>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="video slideanim"> 
					<iframe src="https://player.vimeo.com/video/15428374?title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen style="height:555px;"></iframe>
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 slideanim" style="margin-top:7px; border: 2px solid #fff;">
				<h3 style="margin-top:1%; color:#fff; text-align:center;"><?php echo $about['videotitle']; ?></h3>
				<p style="margin-top:3%; margin-bottom:1%; color:#fff; text-align:justify; line-height:200%;"><?php echo $about['videotext']; ?></p>
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
<section class="our-portfolio" id="team">
	<h3 class="text-center slideanim">فريق العمل الإستشاري</h3>
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
	<div class="container" style="background-color:rgba(255, 255, 255, 0.12); padding:15px; border-radius:15px; box-shadow: 10px 10px 5px rgba(255, 255, 255, 0.35);">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<h3 class="text-center slideanim">اتصل بنا</h3>
				<p class="text-center slideanim">
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