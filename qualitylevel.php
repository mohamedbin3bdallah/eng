<?php
session_start();
if(isset($_SESSION['userid']))
{
	$lang = 'ar';
	$_SERVER['HTTP_PRAGMA'] = 'no-cache';
	$_SERVER['HTTP_CACHE_CONTROL'] = 'no-cache';
	include('develops/qualitylevel-front.php');
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
	<?php
		if(isset($_GET['message']) && $_GET['message'] == 'm1') { echo '<h3 style="margin-bottom:55px; text-align:center; color:#4dff4d;">'; language('m1'); echo '</h3>'; }
		elseif(isset($_GET['message']) && $_GET['message'] == 'm2') { echo '<h3 style="margin-bottom:55px; text-align:center; color:#ff4d4d;">';language('m2'); echo '</h3>'; }
	?>
	</p>
	<div class="container" style="background-color:rgba(23,23,23,0.8); padding:15px; border-radius:15px;">		
		<div class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
        <p style="color:#fff;">نموذج 1</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
        <p style="color:#fff;">نموذج 2</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        <p style="color:#fff;">نموذج 3</p>
      </div>
	  <div class="stepwizard-step">
        <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
        <p style="color:#fff;">نموذج 4</p>
      </div>
    </div>
  </div>
  
  <form role="form" action="" method="POST">
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12 col-md-12">
          <h4 style="color:#fff; margin:55px; text-align:center;">مستوى جودة الجداول الزمنية بكافة أنوعها</h4>
		  
		  <!--<h4 style="color:#6ca4d5; margin:15px;">1-	أحوال عناصر المقاول</h4>-->
		  <div class="form-group white">
            <label class="control-label">1-	الجدول الزمني للإنشاء</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[timecreate]" value="غير مرض" autofocus required="required">&nbsp;&nbsp;&nbsp;غير مرض
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[timecreate]" value="يحتاج تطوير">&nbsp;&nbsp;&nbsp;يحتاج تطوير
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[timecreate]" value="مقبول">&nbsp;&nbsp;&nbsp;مقبول
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[timecreate]" value="جيد">&nbsp;&nbsp;&nbsp;جيد
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[timecreate]" value="فائق الجودة">&nbsp;&nbsp;&nbsp;فائق الجودة
		  </div>
		  <br>
          <div class="form-group white">
            <label class="control-label">2-	الجدول الزمني لتسليم المخططات</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[timeplan]" value="غير مرض" autofocus required="required">&nbsp;&nbsp;&nbsp;غير مرض
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[timeplan]" value="يحتاج تطوير">&nbsp;&nbsp;&nbsp;يحتاج تطوير
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[timeplan]" value="مقبول">&nbsp;&nbsp;&nbsp;مقبول
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[timeplan]" value="جيد">&nbsp;&nbsp;&nbsp;جيد
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[timeplan]" value="فائق الجودة">&nbsp;&nbsp;&nbsp;فائق الجودة
		  </div>
		<br>
		  <div class="form-group white">
            <label class="control-label">3-	الجدول الزمني لتسليم المواد</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[timematerial]" value="غير مرض" autofocus required="required">&nbsp;&nbsp;&nbsp;غير مرض
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[timematerial]" value="يحتاج تطوير">&nbsp;&nbsp;&nbsp;يحتاج تطوير
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[timematerial]" value="مقبول">&nbsp;&nbsp;&nbsp;مقبول
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[timematerial]" value="جيد">&nbsp;&nbsp;&nbsp;جيد
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[timematerial]" value="فائق الجودة">&nbsp;&nbsp;&nbsp;فائق الجودة
		  </div>
		  <br><br>
          <button class="btn btn-primary nextBtn btn-lg center-block" type="button" >التالي</button>
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12 col-md-12">
          <h4 style="color:#fff; margin:55px; text-align:center;">مستوى الجودة من خلال مطابقة المواصفات</h4>
		  
		  <!--<h4 style="color:#6ca4d5; margin:15px;">1-	أحوال عناصر المقاول</h4>-->
		  <div class="form-group white">
            <label class="control-label">1-	الموردين المعتمدين للمواد والعينات (القسم المعماري – الميكانيكا – الكهرباء)</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[suppliers]" value="معتمد" autofocus required="required">&nbsp;&nbsp;&nbsp;معتمد
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[suppliers]" value="غير معتمد">&nbsp;&nbsp;&nbsp;غير معتمد
		  </div>
		  <br>
          <div class="form-group white">
            <label class="control-label">2-	جميع العينات مطابقة للمواصفات ومعتمدة من المالك والإستشاري</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[samples]" value="معتمد" autofocus required="required">&nbsp;&nbsp;&nbsp;معتمد
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[samples]" value="غير معتمد">&nbsp;&nbsp;&nbsp;غير معتمد
		  </div>
		  <br><br>
          <button class="btn btn-primary nextBtn btn-lg center-block" type="button" >التالي</button>
        </div>
    </div>
	<div class="row setup-content" id="step-3">
        <div class="col-xs-12 col-md-12">
          <h4 style="color:#fff; margin:55px; text-align:center;">مستوى الجودة من خلال مخططات الورشة</h4>
		  
		  <!--<h4 style="color:#6ca4d5; margin:15px;">1-	أحوال عناصر المقاول</h4>-->
		  <div class="form-group white">
            <label class="control-label">1-	مقياس الرسم المناسب للمخططات</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[scale]" value="مناسب" autofocus required="required">&nbsp;&nbsp;&nbsp;مناسب
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[scale]" value="غير مناسب">&nbsp;&nbsp;&nbsp;غير مناسب
		  </div>
		  <br>
          <div class="form-group white">
            <label class="control-label">2-	الإعتبارات الشكلية للمخططات</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[shape]" value="جيدة" autofocus required="required">&nbsp;&nbsp;&nbsp;جيدة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[shape]" value="غير جيدة">&nbsp;&nbsp;&nbsp;غير جيدة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[shape]" value="رديئة">&nbsp;&nbsp;&nbsp;رديئة
		  </div>
		  <br>
		  <div class="form-group white">
            <label class="control-label">3-	الإعتبارات الفنية للمخططات</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[technical]" value="جيدة" autofocus required="required">&nbsp;&nbsp;&nbsp;جيدة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[technical]" value="غير جيدة">&nbsp;&nbsp;&nbsp;غير جيدة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[technical]" value="رديئة">&nbsp;&nbsp;&nbsp;رديئة
		  </div>
		  <br><br>
          <button class="btn btn-primary nextBtn btn-lg center-block" type="button" >التالي</button>
        </div>
    </div>
	<div class="row setup-content" id="step-4">
        <div class="col-xs-12 col-md-12">
          <h4 style="color:#fff; margin:55px; text-align:center;">تحريات الجودة من خلال مستوى عمالة المقاول</h4>
		  
		  <!--<h4 style="color:#6ca4d5; margin:15px;">1-	أحوال عناصر المقاول</h4>-->
		  <div class="form-group white">
            <label class="control-label">1-	بنود الأعمال المعمارية</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[architectworks]" value="عمالة جيدة" autofocus required="required">&nbsp;&nbsp;&nbsp;عمالة جيدة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[architectworks]" value="عمالة مختلطة">&nbsp;&nbsp;&nbsp;عمالة مختلطة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[architectworks]" value="عمالة غير جيدة">&nbsp;&nbsp;&nbsp;عمالة غير جيدة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[architectworks]" value="مرفوضة">&nbsp;&nbsp;&nbsp;مرفوضة
		  </div>
		  <br>
          <div class="form-group white">
            <label class="control-label">2-	بنود الأعمال الإنشائية</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[createworks]" value="عمالة جيدة" autofocus required="required">&nbsp;&nbsp;&nbsp;عمالة جيدة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[createworks]" value="عمالة مختلطة">&nbsp;&nbsp;&nbsp;عمالة مختلطة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[createworks]" value="عمالة غير جيدة">&nbsp;&nbsp;&nbsp;عمالة غير جيدة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[createworks]" value="مرفوضة">&nbsp;&nbsp;&nbsp;مرفوضة
		  </div>
		  <br>
		  <div class="form-group white">
            <label class="control-label">3-	بنود الأعمتال الميكانيكية</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[mechanicworks]" value="عمالة جيدة" autofocus required="required">&nbsp;&nbsp;&nbsp;عمالة جيدة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[mechanicworks]" value="عمالة مختلطة">&nbsp;&nbsp;&nbsp;عمالة مختلطة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[mechanicworks]" value="عمالة غير جيدة">&nbsp;&nbsp;&nbsp;عمالة غير جيدة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[mechanicworks]" value="مرفوضة">&nbsp;&nbsp;&nbsp;مرفوضة
		  </div>
		  <br>
		  <div class="form-group white">
            <label class="control-label">4-	بنود الأعمال الكهربية</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[electricworks]" value="عمالة جيدة" autofocus required="required">&nbsp;&nbsp;&nbsp;عمالة جيدة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[electricworks]" value="عمالة مختلطة">&nbsp;&nbsp;&nbsp;عمالة مختلطة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[electricworks]" value="عمالة غير جيدة">&nbsp;&nbsp;&nbsp;عمالة غير جيدة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="qualitylevels[electricworks]" value="مرفوضة">&nbsp;&nbsp;&nbsp;مرفوضة
		  </div>
		  <br><br>
          <button class="btn btn-primary nextBtn btn-lg center-block" type="submit" name="submit">حفظ</button>
        </div>
    </div>
  </form>
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