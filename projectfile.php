<?php
session_start();
if(isset($_SESSION['userid']))
{
	$lang = 'ar';
	$_SERVER['HTTP_PRAGMA'] = 'no-cache';
	$_SERVER['HTTP_CACHE_CONTROL'] = 'no-cache';
	include('develops/projectfile-front.php');
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
      </div>
	  <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">></a>
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
      </div>
      <div class="stepwizard-step">
        <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
      </div>
      <div class="stepwizard-step">
        <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
      </div>
	  <div class="stepwizard-step">
        <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
      </div>
	  <div class="stepwizard-step">
        <a href="#step-7" type="button" class="btn btn-default btn-circle" disabled="disabled">7</a>
      </div>
	  <div class="stepwizard-step">
        <a href="#step-8" type="button" class="btn btn-default btn-circle" disabled="disabled">8</a>
      </div>
	  <div class="stepwizard-step">
        <a href="#step-9" type="button" class="btn btn-default btn-circle" disabled="disabled">9</a>
      </div>
	  <div class="stepwizard-step">
        <a href="#step-10" type="button" class="btn btn-default btn-circle" disabled="disabled">10</a>
      </div>
	  <div class="stepwizard-step">
        <a href="#step-11" type="button" class="btn btn-default btn-circle" disabled="disabled">11</a>
      </div>
	  
	  <div class="stepwizard-step">
        <a href="#step-12" type="button" class="btn btn-default btn-circle" disabled="disabled">></a>
      </div>
	  <div class="stepwizard-step">
        <a href="#step-13" type="button" class="btn btn-default btn-circle" disabled="disabled">13</a>
      </div>
      <div class="stepwizard-step">
        <a href="#step-14" type="button" class="btn btn-default btn-circle" disabled="disabled">14</a>
      </div>
      <div class="stepwizard-step">
        <a href="#step-15" type="button" class="btn btn-default btn-circle" disabled="disabled">15</a>
      </div>
	  <div class="stepwizard-step">
        <a href="#step-16" type="button" class="btn btn-default btn-circle" disabled="disabled">16</a>
      </div>
	  <div class="stepwizard-step">
        <a href="#step-17" type="button" class="btn btn-default btn-circle" disabled="disabled">17</a>
      </div>
	  <div class="stepwizard-step">
        <a href="#step-18" type="button" class="btn btn-default btn-circle" disabled="disabled">18</a>
      </div>
	  <div class="stepwizard-step">
        <a href="#step-19" type="button" class="btn btn-default btn-circle" disabled="disabled">19</a>
      </div>
	  <div class="stepwizard-step">
        <a href="#step-20" type="button" class="btn btn-default btn-circle" disabled="disabled">20</a>
      </div>
	  <div class="stepwizard-step">
        <a href="#step-21" type="button" class="btn btn-default btn-circle" disabled="disabled">21</a>
      </div>
	  <div class="stepwizard-step">
        <a href="#step-22" type="button" class="btn btn-default btn-circle" disabled="disabled">22</a>
      </div>
      <div class="stepwizard-step">
        <a href="#step-23" type="button" class="btn btn-default btn-circle" disabled="disabled">23</a>
      </div>
      <div class="stepwizard-step">
        <a href="#step-24" type="button" class="btn btn-default btn-circle" disabled="disabled">24</a>
      </div>
	  <div class="stepwizard-step">
        <a href="#step-25" type="button" class="btn btn-default btn-circle" disabled="disabled">25</a>
      </div>
	  <div class="stepwizard-step">
        <a href="#step-26" type="button" class="btn btn-default btn-circle" disabled="disabled">26</a>
      </div>
	  
	  <div class="stepwizard-step">
        <a href="#step-27" type="button" class="btn btn-default btn-circle" disabled="disabled">></a>
      </div>
	  <div class="stepwizard-step">
        <a href="#step-28" type="button" class="btn btn-default btn-circle" disabled="disabled">28</a>
      </div>
	  <div class="stepwizard-step">
        <a href="#step-29" type="button" class="btn btn-default btn-circle" disabled="disabled">29</a>
      </div>
	  <div class="stepwizard-step">
        <a href="#step-30" type="button" class="btn btn-default btn-circle" disabled="disabled">30</a>
      </div>
	  <div class="stepwizard-step">
        <a href="#step-31" type="button" class="btn btn-default btn-circle" disabled="disabled">31</a>
      </div>
    </div>
  </div>
  
  <form role="form" action="" method="POST">
	<div class="row setup-content" id="step-1">
        <div class="col-xs-12 col-md-12">
			<h4 style="color:#fff; margin:55px; text-align:center;">البيانات الاساسية للمشروع</h4>
			
			<h4 style="color:#6ca4d5; margin:15px;"><?php language('projectinfo'); ?></h4>
			<div class="form-group white">
				<label class="control-label">نوع المشروع</label>
				<br>
				<select class="form-control" name="projects[kind]" id="kind">
					<option value="مباني">مباني</option>
					<option value="طرق">طرق</option>
					<option value="كهرباء">كهرباء</option>
					<option value="صحي">صحي</option>
					<option value="بنية أساسية">بنية أساسية</option>
				</select>
			</div>
			<div class="form-group white">
				<label class="control-label"><?php language('projectname'); ?></label>
				<br>
				<input type="text" class="form-control" name="projects[name]" id="name" placeholder="<?php language('projectname'); ?>" autocomplete="off" required="required">
			</div>
			<div class="form-group white">
				<label class="control-label"><?php language('value'); ?></label>
				<br>
				<input type="text" class="form-control" name="projects[value]" id="name" placeholder="<?php language('value'); ?>" autocomplete="off" required="required">
			</div>
			<div class="form-group white">
				<label class="control-label"><?php language('location'); ?></label>
				<br>
				<input type="text" class="form-control" name="projects[location]" id="name" placeholder="<?php language('location'); ?>" autocomplete="off" required="required">
			</div>
			<div class="form-group white">
				<label class="control-label">وصف المشروع</label>
				<br>
				<textarea class="form-control" name="projects[description]" id="comments" placeholder="وصف المشروع" autocomplete="off" required="required"></textarea>
			</div>
			<div class="form-group white">
				<label class="control-label"><?php language('receiptdate'); ?></label>
				<br>
				<input type="date" class="form-control" name="projects[receiptdate]" id="name" placeholder="<?php language('receiptdate'); ?>" required="required">
			</div>
			<div class="form-group white">
				<label class="control-label"><?php language('deliverydate'); ?></label>
				<br>
				<input type="date" class="form-control" name="projects[deliverydate]" id="name" placeholder="<?php language('deliverydate'); ?>" required="required">
			</div>
			<div class="form-group white">
				<label class="control-label"><?php language('contractor'); ?></label>
				<br>
				<input type="text" class="form-control" name="projects[contractor]" id="name" placeholder="<?php language('contractor'); ?>" autocomplete="off" required="required">
			</div>
			<div class="form-group white">
				<label class="control-label">عناصر المقاول</label>
				<br>
				<textarea class="form-control" name="projects[contractorelements]" id="comments" placeholder="عناصر المقاول" autocomplete="off" required="required"></textarea>
			</div>
			<div class="form-group white">
				<label class="control-label"><?php language('consultant'); ?></label>
				<br>
				<input type="text" class="form-control" name="projects[consultant]" id="name" placeholder="<?php language('consultant'); ?>" autocomplete="off" required="required">
			</div>
			<div class="form-group white">
				<label class="control-label">عناصر الاستشاري</label>
				<br>
				<textarea class="form-control" name="projects[consultantelements]" id="comments" placeholder="عناصر الاستشاري" autocomplete="off" required="required"></textarea>
			</div>
			
			<h4 style="color:#6ca4d5; margin:15px;">ممثل المالك</h4>
			<div class="form-group white">
				<label class="control-label"><?php language('name'); ?></label>
				<br>
				<input type="text" class="form-control" name="projects[ownername]" id="name" placeholder="<?php language('name'); ?>" autocomplete="off" required="required">
			</div>
			<div class="form-group white">
				<label class="control-label"><?php language('location'); ?></label>
				<br>
				<input type="text" class="form-control" name="projects[ownerlocation]" id="name" placeholder="<?php language('location'); ?>" autocomplete="off" required="required">
			</div>
			<div class="form-group white">
				<label class="control-label">التواصل مع المالك</label>
				<br>
				<textarea class="form-control" name="projects[ownercontact]" id="comments" placeholder="التواصل مع المالك" autocomplete="off" required="required"></textarea>
			</div>
			<br><br>
          <button class="btn btn-primary nextBtn btn-lg center-block" type="button" >التالي</button>
		</div>
	</div>
	
	<div class="row setup-content" id="step-2">
        <div class="col-xs-12 col-md-12">
          <h4 style="color:#fff; margin:55px; text-align:center;">
			<button class="btn btn-success nextBtn btn-lg center-block" type="button" >ملفات المشروع</button>
		  </h4>
		</div>
	</div>  
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12 col-md-12">
          <h4 style="color:#fff; margin:55px; text-align:center;">الإجراءات المتخذه من الإستشاري في حال النقص في عناصر المقاول او عدم الكفاءة من خلال المراسلات</h4>
		  
		  <h4 style="color:#6ca4d5; margin:15px;">1-	أحوال عناصر المقاول</h4>
		  <div class="form-group white">
            <label class="control-label">1-1-	النقص في المهندسين والمراقبين</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[engineers]" value="العناصر كافية" autofocus required="required">&nbsp;&nbsp;&nbsp;العناصر كافية
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[engineers]" value="العناصر غير كافية">&nbsp;&nbsp;&nbsp;العناصر غير كافية
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[engineers]" value="لا يوجد عناصر">&nbsp;&nbsp;&nbsp;لا يوجد عناصر
		  </div>
          <div class="form-group white">
            <label class="control-label">2-1-	النقص في العمالة المدربة</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[employees]" value="العناصر كافية" autofocus required="required">&nbsp;&nbsp;&nbsp;العناصر كافية
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[employees]" value="العناصر غير كافية">&nbsp;&nbsp;&nbsp;العناصر غير كافية
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[employees]" value="لا يوجد عناصر">&nbsp;&nbsp;&nbsp;لا يوجد عناصر
          </div>
		<br>
		  <h4 style="color:#6ca4d5; margin:15px;">2-	أثر النقص في العناصر على التقدم بالمشروع</h4>
		  <div class="form-group white">
            <label class="control-label">1-2-	النقص في العناصر على التقدم بالمشروع</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[elements]" value="تم ذكر جوانب النقص في المراسلات" autofocus required="required">&nbsp;&nbsp;&nbsp;تم ذكر جوانب النقص في المراسلات
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[elements]" value="لم يتم ذكر جوانب النقص في المراسلات">&nbsp;&nbsp;&nbsp;لم يتم ذكر جوانب النقص في المراسلات
          </div>
		 <br>
		  <h4 style="color:#6ca4d5; margin:15px;">3-	الإجراءات التي تمت بواسطة الإستشاري</h4>
		  <div class="form-group white">
            <label class="control-label">1-3-	المقاول</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[contractor1]" value="تم مراسلة المقاول" autofocus required="required">&nbsp;&nbsp;&nbsp;تم مراسلة المقاول
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[contractor1]" value="لم يتم مراسلة المقاول">&nbsp;&nbsp;&nbsp;لم يتم مراسلة المقاول
          </div>
		  <div class="form-group white">
            <label class="control-label">2-3-	المالك</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[owner1]" value="تم مراسلة المالك" autofocus required="required">&nbsp;&nbsp;&nbsp;تم مراسلة المالك
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[owner1]" value="لم يتم مراسلة المالك">&nbsp;&nbsp;&nbsp;لم يتم مراسلة المالك
          </div>
		 <br>
		  <h4 style="color:#6ca4d5; margin:15px;">4-	فحص مؤهلات عناصر المقاول</h4>
		  <div class="form-group white">
            <label class="control-label">1-4-	اعتماد مدير المشروع</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[manageragree]" value="معتمدة" autofocus required="required">&nbsp;&nbsp;&nbsp;معتمدة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[manageragree]" value="غير معتمدة">&nbsp;&nbsp;&nbsp;غير معتمدة
          </div>
		  <div class="form-group white">
            <label class="control-label">2-4-	اعتماد المالك</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[owneragree]" value="معتمدة" autofocus required="required">&nbsp;&nbsp;&nbsp;معتمدة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[owneragree]" value="غير معتمدة">&nbsp;&nbsp;&nbsp;غير معتمدة
          </div>
		 <br>
		  <h4 style="color:#6ca4d5; margin:15px;">5-	الإستنتاج</h4>
		  <div class="form-group white">
            <label class="control-label">1-5-	الإستنتاج</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[conclusion1]" value="تم حل المشكلة الخاصة بالنقص بعناصر المفاول" autofocus required="required">&nbsp;&nbsp;&nbsp;تم حل المشكلة الخاصة بالنقص بعناصر المفاول
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[conclusion1]" value="تم حل المشكلة جزئيا">&nbsp;&nbsp;&nbsp;تم حل المشكلة جزئيا
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[conclusion1]" value="لا يوجد استجابة من المقاول">&nbsp;&nbsp;&nbsp;لا يوجد استجابة من المقاول
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[conclusion1]" value="أخرى">&nbsp;&nbsp;&nbsp;أخرى
          </div>
          <!--<div class="form-group white">
            <label class="control-label">العنوان</label>
            <textarea required="required" name="name" id="comments" class="form-control"></textarea>
          </div>-->
		  <br><br>
          <button class="btn btn-primary nextBtn btn-lg center-block" type="button" >التالي</button>
        </div>
    </div>
    <div class="row setup-content" id="step-4">
		<div class="col-xs-12 col-md-12">
		  <h4 style="color:#fff; margin:55px; text-align:center;">الإجراءات المتخذة من الإستشاري في حال النقص في معدات المقاول</h4>
		  
          <h4 style="color:#6ca4d5; margin:15px;">1-	أحوال معدات المقاول بالتفصيل</h4>
		  <div class="form-group white">
            <label class="control-label">1-1-	الأحوال العامة لنقص المعدات</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[equipments]" value="النقص في الأنواع" autofocus required="required">&nbsp;&nbsp;&nbsp;النقص في الأنواع
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[equipments]" value="النقص في الأعداد">&nbsp;&nbsp;&nbsp;النقص في الأعداد
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[equipments]" value="النقص بكلاهما">&nbsp;&nbsp;&nbsp;النقص بكلاهما
		  </div>
          <div class="form-group white">
            <label class="control-label">2-1-	تفاصيل المعدات الناقصة</label>
            <br>
            <textarea required="required" name="projectfiles[equipmentstext]" id="comments" class="form-control"></textarea>
          </div>
		<br>
		  <h4 style="color:#6ca4d5; margin:15px;">2-	تأثير النقص في معدات المقاول على التقدم بالعمل</h4>
		  <div class="form-group white">
            <label class="control-label">1-2-	قام الإستشاري بذكر كافة الجوانب السلبية التي تعرض لها التقدم بالمشروع بسبب النقص في المعدات وذلك في المراسلات</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[equipmentssend]" value="ذكر ذلك في المراسلات" autofocus required="required">&nbsp;&nbsp;&nbsp;ذكر ذلك في المراسلات
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[equipmentssend]" value="لم يذكر شيئا">&nbsp;&nbsp;&nbsp;لم يذكر شيئا
		  </div>
		 <br>
		  <h4 style="color:#6ca4d5; margin:15px;">3-	الإجراءات المتخذة من الإستشاري</h4>
		  <div class="form-group white">
            <label class="control-label">1-3-	المقاول</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[contractor2]" value="راسل المقاول" autofocus required="required">&nbsp;&nbsp;&nbsp;راسل المقاول
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[contractor2]" value="لم يراسل المقاول">&nbsp;&nbsp;&nbsp;لم يراسل المقاول
		  </div>
		  <div class="form-group white">
            <label class="control-label">2-3-	المالك</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[owner2]" value="راسل المالك " autofocus required="required">&nbsp;&nbsp;&nbsp;راسل المالك 
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[owner2]" value="لم يراسل المالك">&nbsp;&nbsp;&nbsp;لم يراسل المالك
          </div>
		 <br>
		  <h4 style="color:#6ca4d5; margin:15px;">4-	الإستنتاج</h4>
		  <div class="form-group white">
            <label class="control-label">1-4-	الإستنتاج</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[conclusion2]" value="تم حل المشكلة الخاصة بالنقص بعناصر المفاول" autofocus required="required">&nbsp;&nbsp;&nbsp;تم حل المشكلة الخاصة بالنقص بعناصر المفاول 
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[conclusion2]" value="تم حل المشكلة جزئيا">&nbsp;&nbsp;&nbsp;تم حل المشكلة جزئيا
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[conclusion2]" value="لا يوجد استجابة من المقاول">&nbsp;&nbsp;&nbsp;لا يوجد استجابة من المقاول
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[conclusion2]" value="أخرى">&nbsp;&nbsp;&nbsp;أخرى
          </div>
		<br><br>
          <button class="btn btn-primary nextBtn btn-lg center-block" type="button" >التالي</button>
        </div>
    </div>
    <div class="row setup-content" id="step-5">
		<div class="col-xs-12 col-md-12">
		  <h4 style="color:#fff; margin:55px; text-align:center;">الإجراءات المتخذة من الإستشاري في حال عدم وجود جداول زمنية بمختلف أنواعها</h4>
		  
          <h4 style="color:#6ca4d5; margin:15px;">1-	الجداول الزمنية للإنشاء</h4>
		  <div class="form-group white">
            <label class="control-label">1-1-	الجدول الزمني الأساسي</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[timebasiccreate]" value="تم تقديم الجدول الزمني" autofocus required="required">&nbsp;&nbsp;&nbsp;تم تقديم الجدول الزمني
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[timebasiccreate]" value="لم يتم تقديمة">&nbsp;&nbsp;&nbsp;لم يتم تقديمة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[timebasiccreate]" value="الجدول متبع">&nbsp;&nbsp;&nbsp;الجدول متبع
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[timebasiccreate]" value="الجدول متبع نسبيا">&nbsp;&nbsp;&nbsp;الجدول متبع نسبيا
		  </div>
          <div class="form-group white">
            <label class="control-label">2-1-	الجدول الزمني المحدث</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[timeupdatecreate]" value="تم تقديم الجدول الزمني" autofocus required="required">&nbsp;&nbsp;&nbsp;تم تقديم الجدول الزمني
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[timeupdatecreate]" value="لم يتم تقديمة">&nbsp;&nbsp;&nbsp;لم يتم تقديمة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[timeupdatecreate]" value="الجدول متبع">&nbsp;&nbsp;&nbsp;الجدول متبع
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[timeupdatecreate]" value="الجدول متبع نسبيا">&nbsp;&nbsp;&nbsp;الجدول متبع نسبيا
          </div>
		<br>
		  <h4 style="color:#6ca4d5; margin:15px;">2-	الجداول الزمنية للتقديمات</h4>
		  <div class="form-group white">
            <label class="control-label">1-2-	الجدول الزمني الأساسي</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[timebasicapply]" value="تم تقديم الجدول الزمني" autofocus required="required">&nbsp;&nbsp;&nbsp;تم تقديم الجدول الزمني
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[timebasicapply]" value="لم يتم تقديمة">&nbsp;&nbsp;&nbsp;لم يتم تقديمة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[timebasicapply]" value="الجدول متبع">&nbsp;&nbsp;&nbsp;الجدول متبع
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[timebasicapply]" value="الجدول متبع نسبيا">&nbsp;&nbsp;&nbsp;الجدول متبع نسبيا
		  </div>
          <div class="form-group white">
            <label class="control-label">2-2-	الجدول الزمني المحدث</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[timeupdateapply]" value="تم تقديم الجدول الزمني" autofocus required="required">&nbsp;&nbsp;&nbsp;تم تقديم الجدول الزمني
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[timeupdateapply]" value="لم يتم تقديمة">&nbsp;&nbsp;&nbsp;لم يتم تقديمة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[timeupdateapply]" value="الجدول متبع">&nbsp;&nbsp;&nbsp;الجدول متبع
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[timeupdateapply]" value="الجدول متبع نسبيا">&nbsp;&nbsp;&nbsp;الجدول متبع نسبيا
          </div>
		<br>
		  <h4 style="color:#6ca4d5; margin:15px;">3-	تأثير غياب الجداول الزمنية على المشروع</h4>
		  <div class="form-group white">
            <label class="control-label">1-3-	تم مراجعة جميع البنود المتأخرة في التنفيذ وغير مطابقة للجداول الزمنية من قبل مدير المشروع وتم ذكر ذلك في المراسلات</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[timesend]" value="تم احتواء المراسلات على ذلك" autofocus required="required">&nbsp;&nbsp;&nbsp;تم احتواء المراسلات على ذلك
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[timesend]" value="لم يتم احتواء ذلك في المراسلات">&nbsp;&nbsp;&nbsp;لم يتم احتواء ذلك في المراسلات
		  </div>
		 <br>
		  <h4 style="color:#6ca4d5; margin:15px;">4-	الإجراءات المتخذة من الإستشاي تجاه عدم وجود جداول زمنية</h4>
		  <div class="form-group white">
            <label class="control-label">1-4-	المقاول</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[contractor3]" value="تم مراسلة المقاول" autofocus required="required">&nbsp;&nbsp;&nbsp;تم مراسلة المقاول
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[contractor3]" value="لم يتم مراسلة المقاول">&nbsp;&nbsp;&nbsp;لم يتم مراسلة المقاول
		  </div>
		  <div class="form-group white">
            <label class="control-label">2-4-	المالك</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[owner3]" value="تم مراسلة المالك" autofocus required="required">&nbsp;&nbsp;&nbsp;تم مراسلة المالك 
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[owner3]" value="لم يتم مراسلة المالك">&nbsp;&nbsp;&nbsp;لم يتم مراسلة المالك
          </div>
		 <br>
		  <h4 style="color:#6ca4d5; margin:15px;">5-	الإستنتاج</h4>
		  <div class="form-group white">
            <label class="control-label">1-5-	الإستنتاج</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[conclusion3]" value="تم حل المشكلة الخاصة بالنقص بعناصر المفاول" autofocus required="required">&nbsp;&nbsp;&nbsp;تم حل المشكلة الخاصة بالنقص بعناصر المفاول 
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[conclusion3]" value="تم حل المشكلة جزئيا">&nbsp;&nbsp;&nbsp;تم حل المشكلة جزئيا
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[conclusion3]" value="لا يوجد استجابة من المقاول">&nbsp;&nbsp;&nbsp;لا يوجد استجابة من المقاول
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[conclusion3]" value="أخرى">&nbsp;&nbsp;&nbsp;أخرى
          </div>
		<br><br>
          <button class="btn btn-primary nextBtn btn-lg center-block" type="button" >التالي</button>
        </div>
    </div>
	<div class="row setup-content" id="step-6">
		<div class="col-xs-12 col-md-12">
		  <h4 style="color:#fff; margin:55px; text-align:center;">الإجراءات المتخذة من الإستشاري في حال وجود معوقات للتنفيذ</h4>
		  
          <h4 style="color:#6ca4d5; margin:15px;">1-	أنواع معوقات التنفيذ للمشروع خلال آخر ثلاث شهور</h4>
		  <div class="form-group white">
            <label class="control-label">1-1-	أنواع معوقات</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[challengesex]" value="معوقات خاصة بقطعة الأرض" autofocus required="required">&nbsp;&nbsp;&nbsp;معوقات خاصة بقطعة الأرض
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[challengesex]" value="معوقات خاصة بأطراف المشروع">&nbsp;&nbsp;&nbsp;معوقات خاصة بأطراف المشروع
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[challengesex]" value="لا يوجد مخططات">&nbsp;&nbsp;&nbsp;لا يوجد مخططات
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[challengesex]" value="لم يتم مراجعة المخططات">&nbsp;&nbsp;&nbsp;لم يتم مراجعة المخططات
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[challengesex]" value="مشكلات مالية">&nbsp;&nbsp;&nbsp;مشكلات مالية
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[challengesex]" value="المناخ غير ملائم">&nbsp;&nbsp;&nbsp;المناخ غير ملائم
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[challengesex]" value="طبوغرفيا الموقع">&nbsp;&nbsp;&nbsp;طبوغرفيا الموقع
		  </div>
		<br>
		  <h4 style="color:#6ca4d5; margin:15px;">2-	الإجراءات المتخذة من الإستشاري (قام الإستشاري بمراسلة الجهات التالية خلال الثلاث شهور الماضية)</h4>
		  <div class="form-group white">
            <label class="control-label">1-2-	المقاول</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[contractor4]" value="تم مراسلة المقاول" autofocus required="required">&nbsp;&nbsp;&nbsp;تم مراسلة المقاول
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[contractor4]" value="لم يتم مراسلة المقاول">&nbsp;&nbsp;&nbsp;لم يتم مراسلة المقاول
		  </div>
		  <div class="form-group white">
            <label class="control-label">2-2-	المالك</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[owner4]" value="تم مراسلة المالك" autofocus required="required">&nbsp;&nbsp;&nbsp;تم مراسلة المالك 
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[owner4]" value="لم يتم مراسلة المالك">&nbsp;&nbsp;&nbsp;لم يتم مراسلة المالك
          </div>
		 <br>
		  <h4 style="color:#6ca4d5; margin:15px;">3-	الإستنتاج</h4>
		  <div class="form-group white">
            <label class="control-label">1-3-	الإستنتاج</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[conclusion4]" value="تم حل المشكلة الخاصة بالنقص بعناصر المفاول" autofocus required="required">&nbsp;&nbsp;&nbsp;تم حل المشكلة الخاصة بالنقص بعناصر المفاول 
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[conclusion4]" value="تم حل المشكلة جزئيا">&nbsp;&nbsp;&nbsp;تم حل المشكلة جزئيا
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[conclusion4]" value="لا يوجد استجابة من المقاول">&nbsp;&nbsp;&nbsp;لا يوجد استجابة من المقاول
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[conclusion4]" value="أخرى">&nbsp;&nbsp;&nbsp;أخرى
          </div>
		<br><br>
          <button class="btn btn-primary nextBtn btn-lg center-block" type="button" >التالي</button>
        </div>
    </div>
	<div class="row setup-content" id="step-7">
		<div class="col-xs-12 col-md-12">
		  <h4 style="color:#fff; margin:55px; text-align:center;">الإجراءات المتخذة من الإستشاري في حال وجود معوقات إدارية</h4>
		  
          <h4 style="color:#6ca4d5; margin:15px;">1-	أنواع المعوقات الإدارية للمشروع خلال آخر ثلاث شهور</h4>
		  <div class="form-group white">
            <label class="control-label">1-1-	أنواع معوقات</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[challengesma]" value="التعديلات المتكررة" autofocus required="required">&nbsp;&nbsp;&nbsp;التعديلات المتكررة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[challengesma]" value="التعارض في اتخاذ القرارات">&nbsp;&nbsp;&nbsp;التعارض في اتخاذ القرارات
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[challengesma]" value="القدرة على اتخاذ القرار">&nbsp;&nbsp;&nbsp;القدرة على اتخاذ القرار
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[challengesma]" value="تغيير ممثل المالك للمشروع">&nbsp;&nbsp;&nbsp;تغيير ممثل المالك للمشروع
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[challengesma]" value="الإجازات الخاصة بالموظفين">&nbsp;&nbsp;&nbsp;الإجازات الخاصة بالموظفين
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[challengesma]" value="أخرى">&nbsp;&nbsp;&nbsp;أخرى
		  </div>
		<br>
		  <h4 style="color:#6ca4d5; margin:15px;">2-	الإجراءات المتخذة من الإستشاري (قام الإستشاري بمراسلة الجهات التالية خلال الثلاث شهور الماضية)</h4>
		  <div class="form-group white">
            <label class="control-label">1-2-	المقاول</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[contractor5]" value="تم مراسلة المقاول" autofocus required="required">&nbsp;&nbsp;&nbsp;تم مراسلة المقاول
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[contractor5]" value="لم يتم مراسلة المقاول">&nbsp;&nbsp;&nbsp;لم يتم مراسلة المقاول
		  </div>
		  <div class="form-group white">
            <label class="control-label">2-2-	المالك</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[owner5]" value="تم مراسلة المالك" autofocus required="required">&nbsp;&nbsp;&nbsp;تم مراسلة المالك 
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[owner5]" value="لم يتم مراسلة المالك">&nbsp;&nbsp;&nbsp;لم يتم مراسلة المالك
          </div>
		 <br>
		  <h4 style="color:#6ca4d5; margin:15px;">3-	الإستنتاج</h4>
		  <div class="form-group white">
            <label class="control-label">1-3-	الإستنتاج</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[conclusion5]" value="تم حل المشكلة الخاصة بالنقص بعناصر المفاول" autofocus required="required">&nbsp;&nbsp;&nbsp;تم حل المشكلة الخاصة بالنقص بعناصر المفاول 
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[conclusion5]" value="تم حل المشكلة جزئيا">&nbsp;&nbsp;&nbsp;تم حل المشكلة جزئيا
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[conclusion5]" value="لا يوجد استجابة من المقاول">&nbsp;&nbsp;&nbsp;لا يوجد استجابة من المقاول
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[conclusion5]" value="أخرى">&nbsp;&nbsp;&nbsp;أخرى
          </div>
		<br><br>
          <button class="btn btn-primary nextBtn btn-lg center-block" type="button" >التالي</button>
        </div>
    </div>
	<div class="row setup-content" id="step-8">
		<div class="col-xs-12 col-md-12">
		  <h4 style="color:#fff; margin:55px; text-align:center;">الأجراءات المتخذة من الإستشاري في حال النقص في اجراءات الأمن والسلامة</h4>
		  
          <h4 style="color:#6ca4d5; margin:15px;">1-	تفاصيل النقص في اجراءات الأمن والسلامة</h4>
		  <div class="form-group white">
            <label class="control-label">1-1-	تفاصيل النقص</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[safety]" value="تأمين الموقع" autofocus required="required">&nbsp;&nbsp;&nbsp;تأمين الموقع
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[safety]" value="تامين مناطق المشروع">&nbsp;&nbsp;&nbsp;تامين مناطق المشروع
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[safety]" value="تأمين المكاتب والمخازن">&nbsp;&nbsp;&nbsp;تأمين المكاتب والمخازن
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[safety]" value="تأمين الأفراد بجميع وسائل الأمن والسلامة">&nbsp;&nbsp;&nbsp;تأمين الأفراد بجميع وسائل الأمن والسلامة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[safety]" value="تأمين مخارج الهروب">&nbsp;&nbsp;&nbsp;تأمين مخارج الهروب
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[safety]" value="تواقر نماذج الحوادث">&nbsp;&nbsp;&nbsp;تواقر نماذج الحوادث
		  </div>
		<br>
		  <h4 style="color:#6ca4d5; margin:15px;">2-	الإجراءات المتخذة من الإستشاري (قام الإستشاري بمراسلة الجهات التالية خلال الثلاث شهور الماضية)</h4>
		  <div class="form-group white">
            <label class="control-label">1-2-	المقاول</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[contractor6]" value="تم مراسلة المقاول" autofocus required="required">&nbsp;&nbsp;&nbsp;تم مراسلة المقاول
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[contractor6]" value="لم يتم مراسلة المقاول">&nbsp;&nbsp;&nbsp;لم يتم مراسلة المقاول
		  </div>
		  <div class="form-group white">
            <label class="control-label">2-2-	المالك</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[owner6]" value="تم مراسلة المالك" autofocus required="required">&nbsp;&nbsp;&nbsp;تم مراسلة المالك 
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[owner6]" value="لم يتم مراسلة المالك">&nbsp;&nbsp;&nbsp;لم يتم مراسلة المالك
          </div>
		 <br>
		  <h4 style="color:#6ca4d5; margin:15px;">3-	الإستنتاج</h4>
		  <div class="form-group white">
            <label class="control-label">1-3-	الإستنتاج</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[conclusion6]" value="تم حل المشكلة الخاصة بالنقص بعناصر المفاول" autofocus required="required">&nbsp;&nbsp;&nbsp;تم حل المشكلة الخاصة بالنقص بعناصر المفاول 
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[conclusion6]" value="تم حل المشكلة جزئيا">&nbsp;&nbsp;&nbsp;تم حل المشكلة جزئيا
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[conclusion6]" value="لا يوجد استجابة من المقاول">&nbsp;&nbsp;&nbsp;لا يوجد استجابة من المقاول
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectfiles[conclusion6]" value="أخرى">&nbsp;&nbsp;&nbsp;أخرى
          </div>
		<br><br>
          <button class="btn btn-primary nextBtn btn-lg center-block" type="button" >التالي</button>
        </div>
    </div>
	<div class="row setup-content" id="step-9">
		<div class="col-xs-12 col-md-12">
		  <h4 style="color:#fff; margin:55px; text-align:center;">عمل التقارير الدورية بأنواعها</h4>
		  
		  <div class="form-group white">
			<br>
            <h4>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectfiles[reports1]" value="معلومات أطراف المشروع">&nbsp;&nbsp;&nbsp;معلومات أطراف المشروع</h4>
			<br>
            <h4>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectfiles[reports2]" value="المعلومات المالية للمشروع">&nbsp;&nbsp;&nbsp;المعلومات المالية للمشروع</h4>
			<br>
            <h4>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectfiles[reports3]" value="المعوقات التي يتعرض لها المشروع باختصار">&nbsp;&nbsp;&nbsp;المعوقات التي يتعرض لها المشروع باختصار</h4>
			<br>
            <h4>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectfiles[reports4]" value="عناصر الإستشاري">&nbsp;&nbsp;&nbsp;عناصر الإستشاري</h4>
			<br>
            <h4>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectfiles[reports5]" value="عناصر المقاول">&nbsp;&nbsp;&nbsp;عناصر المقاول</h4>
			<br>
            <h4>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectfiles[reports6]" value="معدات المقاول">&nbsp;&nbsp;&nbsp;معدات المقاول</h4>
			<br>
            <h4>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectfiles[reports7]" value="بنود الأعمال الجارية بالموقع خلال فترة التقرير">&nbsp;&nbsp;&nbsp;بنود الأعمال الجارية بالموقع خلال فترة التقرير</h4>
			<br>
            <h4>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectfiles[reports8]" value="تقييم الإستشاري لسير العمل بالمشروع">&nbsp;&nbsp;&nbsp;تقييم الإستشاري لسير العمل بالمشروع</h4>
			<br>
            <h4>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectfiles[reports9]" value="الجداول الزمنية ومطابقتها خلال فترة التقرير">&nbsp;&nbsp;&nbsp;الجداول الزمنية ومطابقتها خلال فترة التقرير</h4>
			<br>
            <h4>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectfiles[reports10]" value="جداول التقديمات">&nbsp;&nbsp;&nbsp;جداول التقديمات</h4>
			<br>
            <h4>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectfiles[report11]" value="صور التقدم بالمشروع">&nbsp;&nbsp;&nbsp;صور التقدم بالمشروع</h4>
		  </div>
		<br><br>
          <button class="btn btn-primary nextBtn btn-lg center-block" type="button" >التالي</button>
        </div>
    </div>
	<div class="row setup-content" id="step-10">
		<div class="col-xs-12 col-md-12">
		  <h4 style="color:#fff; margin:55px; text-align:center;">ملف الإجتماعات</h4>
		  
		  <h4 style="color:#6ca4d5; margin:15px;">1-	دواعي محاضر الإجتماعات</h4>
		  <div class="form-group white">
			<br>
            <h4>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectfiles[meetreson1]" value="عقد محاضر اجتماعات خاصة بالمعوقات الإنشائية">&nbsp;&nbsp;&nbsp;عقد محاضر اجتماعات خاصة بالمعوقات الإنشائية</h4>
			<br>
            <h4>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectfiles[meetreson2]" value="عقد محاضر اجتماعات خاصة بالمعوقات الإدارية">&nbsp;&nbsp;&nbsp;عقد محاضر اجتماعات خاصة بالمعوقات الإدارية</h4>
			<br>
            <h4>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectfiles[meetreson3]" value="عقد محاضر اجتماعات لمتابعة التقدم بالمشروع">&nbsp;&nbsp;&nbsp;عقد محاضر اجتماعات لمتابعة التقدم بالمشروع</h4>
			<br>
            <h4>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectfiles[meetreson4]" value="أخرى">&nbsp;&nbsp;&nbsp;أخرى</h4>
		  </div>
		  <h4 style="color:#6ca4d5; margin:15px;">2-	مستندات محاضر الإجتماعات</h4>
		  <div class="form-group white">
			<br>
            <h4>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectfiles[meetdoc1]" value="نسخة خاصة بالقاول">&nbsp;&nbsp;&nbsp;نسخة خاصة بالقاول</h4>
			<br>
            <h4>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectfiles[meetdoc2]" value="نسخة للإستشاري">&nbsp;&nbsp;&nbsp;نسخة للإستشاري</h4>
			<br>
            <h4>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectfiles[meetdoc3]" value="نسخة للمالك">&nbsp;&nbsp;&nbsp;نسخة للمالك</h4>
			<br>
            <h4>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectfiles[meetdoc4]" value="أطراف أخرى ذات صلة بالإجتماع">&nbsp;&nbsp;&nbsp;أطراف أخرى ذات صلة بالإجتماع</h4>
		  </div>
		<br><br>
          <button class="btn btn-primary nextBtn btn-lg center-block" type="button" >التالي</button>
        </div>
    </div>
	<div class="row setup-content" id="step-11">
		<div class="col-xs-12 col-md-12">
		  <h4 style="color:#fff; margin:55px; text-align:center;">ملف الطلبات</h4>
		  
		  <h4 style="color:#6ca4d5; margin:15px;">1-	أحوال سير الإنشاء في ضوء طلبات المقاول للتنفيذ</h4>
		  <div class="form-group white">
			<br>
            <h4>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectfiles[createmode1]" value="جميع بنود الأعمال تتم تحت المراقبة بأسس نظامية">&nbsp;&nbsp;&nbsp;جميع بنود الأعمال تتم تحت المراقبة بأسس نظامية</h4>
			<br>
            <h4>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectfiles[createmode2]" value="بعض بنود الأعمال تتم بطريقة غير نظامية">&nbsp;&nbsp;&nbsp;بعض بنود الأعمال تتم بطريقة غير نظامية</h4>
			<br>
            <h4>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectfiles[createmode3]" value="جميع بنود الاعمال تم مراجعتها ومطابقتها بقوائم الكميات">&nbsp;&nbsp;&nbsp;جميع بنود الاعمال تم مراجعتها ومطابقتها بقوائم الكميات</h4>
		  </div>
		  <h4 style="color:#6ca4d5; margin:15px;">2-	انواع المرفقات للطلبات</h4>
		  <div class="form-group white">
			<br>
            <h4>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectfiles[attachtype1]" value="تم عمل مرفق مظلل علية منطقة طلب الإنشاء بشكل واضح">&nbsp;&nbsp;&nbsp;تم عمل مرفق مظلل علية منطقة طلب الإنشاء بشكل واضح</h4>
			<br>
            <h4>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectfiles[attachtype2]" value="مرفقات لجميع الملاحظات التي أوصى بها الإستشاري أو المالك">&nbsp;&nbsp;&nbsp;مرفقات لجميع الملاحظات التي أوصى بها الإستشاري أو المالك</h4>
			<br>
            <h4>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectfiles[attachtype3]" value="مرفقات لجميع التعديلات التي أوصى بها الإستشاري أو المالك">&nbsp;&nbsp;&nbsp;مرفقات لجميع التعديلات التي أوصى بها الإستشاري أو المالك</h4>
			<br>
            <h4>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectfiles[attachtype4]" value="أخرى">&nbsp;&nbsp;&nbsp;أخرى</h4>
		  </div>
		<br><br>
          <button class="btn btn-primary nextBtn btn-lg center-block" type="button" >التالي</button>
        </div>
    </div>
	
	<div class="row setup-content" id="step-12">
        <div class="col-xs-12 col-md-12">
          <h4 style="color:#fff; margin:55px; text-align:center;">
			<button class="btn btn-success nextBtn btn-lg center-block" type="button" >ادارة المشروع</button>
		  </h4>
		</div>
	</div>
	<div class="row setup-content" id="step-13">
        <div class="col-xs-12 col-md-12">
          <h4 style="color:#fff; margin:55px; text-align:center;">مدى كفاية عناصر الإستشاري مقارنة بحجم العمل</h4>
		  
		  <div class="form-group white">
            <label class="control-label">1-	عدد المهندسين الكلي مقارنة بالعقد</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectmanages[totalengineers]" value="متوافق" autofocus="" required="required">&nbsp;&nbsp;&nbsp;متوافق
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectmanages[totalengineers]" value="غير متوافق">&nbsp;&nbsp;&nbsp;غير متوافق
		  </div>
          <div class="form-group white">
            <label class="control-label">2-	عدد المراقبين الكلي مقارنة بعقد الإستشاري</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectmanages[totalfollowers]" value="متوافق" autofocus="" required="required">&nbsp;&nbsp;&nbsp;متوافق
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectmanages[totalfollowers]" value="غير متوافق">&nbsp;&nbsp;&nbsp;غير متوافق
          </div>
		  <div class="form-group white">
            <label class="control-label">3-	تأثير الإجازات السنوية على اكتمال العناصر</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectmanages[yearlyvacation]" value="متوافق" autofocus="" required="required">&nbsp;&nbsp;&nbsp;متوافق
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectmanages[yearlyvacation]" value="غير متوافق">&nbsp;&nbsp;&nbsp;غير متوافق
          </div>
		  <br><br>
          <button class="btn btn-primary nextBtn btn-lg center-block" type="button">التالي</button>
        </div>
    </div>
    <div class="row setup-content" id="step-14">
		<div class="col-xs-12 col-md-12">
		  <h4 style="color:#fff; margin:55px; text-align:center;">تقييم الأداء الفني لعناصر الإستشاري</h4>
		  
		  <div class="form-group white">
			<label class="control-label">1-	تقييم الأداء الفني لعناصر الإستشاري</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[technicalvote1]" value="الظهور لمدير المشروع بالإجتماعات بشكل قوي في تمثيل الإستشاري من أجل حل المشكلات">&nbsp;&nbsp;&nbsp;الظهور لمدير المشروع بالإجتماعات بشكل قوي في تمثيل الإستشاري من أجل حل المشكلات
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[technicalvote2]" value="تحكم جيد ومراقبة فنية كاملة للاعمال">&nbsp;&nbsp;&nbsp;تحكم جيد ومراقبة فنية كاملة للاعمال
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[technicalvote3]" value="التقدم بالنصيحة لصغار المهندسين وعناصر المقاول في الوقت المناسب">&nbsp;&nbsp;&nbsp;التقدم بالنصيحة لصغار المهندسين وعناصر المقاول في الوقت المناسب
			<br>
			&nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[technicalvote4]" value="تحري المواصفات المطابقة للعقد من خلال المطابقة مع العينات المعتمدة">&nbsp;&nbsp;&nbsp;تحري المواصفات المطابقة للعقد من خلال المطابقة مع العينات المعتمدة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[technicalvote5]" value="التحكم الفني في عناصر الاستشاري بكافة التخصصات">&nbsp;&nbsp;&nbsp;التحكم الفني في عناصر الاستشاري بكافة التخصصات
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[technicalvote6]" value="رفض جميع الأعمال التي قام بها المقاول وغير مطابقة لأصول الصناعة الفنية أو المواصفات">&nbsp;&nbsp;&nbsp;رفض جميع الأعمال التي قام بها المقاول وغير مطابقة لأصول الصناعة الفنية أو المواصفات
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[technicalvote7]" value="تجهيز المستخلصات في الوقت المناسب">&nbsp;&nbsp;&nbsp;تجهيز المستخلصات في الوقت المناسب
		  </div>
          <div class="form-group white">
            <label class="control-label">2-	الخبرة الفنية لمدير المشروع للإستشاري</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectmanages[technicalexper]" value="أقل من خمس سنوات" autofocus="" required="required">&nbsp;&nbsp;&nbsp;أقل من خمس سنوات
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectmanages[technicalexper]" value="من 5-10 سنوات">&nbsp;&nbsp;&nbsp;من 5-10 سنوات
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectmanages[technicalexper]" value="أكثر من 10 سنوات">&nbsp;&nbsp;&nbsp;أكثر من 10 سنوات
          </div>
		  <br><br>
          <button class="btn btn-primary nextBtn btn-lg center-block" type="button">التالي</button>
        </div>
    </div>
	<div class="row setup-content" id="step-15">
        <div class="col-xs-12 col-md-12">
          <h4 style="color:#fff; margin:55px; text-align:center;">أعداد عناصر المقاول مطابقة للإحتياجات الفعلية</h4>
		  
		  <div class="form-group white">
            <label class="control-label">1-	مدي كفاية المهندسين بعناصر المقاول لأداء كافة الأعمال الجارية</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectmanages[contractorengineers]" value="كافية " autofocus="" required="required">&nbsp;&nbsp;&nbsp;كافية
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectmanages[contractorengineers]" value="غير كافية">&nbsp;&nbsp;&nbsp;غير كافية
		  </div>
          <div class="form-group white">
            <label class="control-label">2-	مدى كفاية المراقبين بعناصر المقاول لأداء كافة بنود الأعمال الجارية</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectmanages[contractorfollowers]" value="كافية" autofocus="" required="required">&nbsp;&nbsp;&nbsp;كافية
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectmanages[contractorfollowers]" value="غير كافية">&nbsp;&nbsp;&nbsp;غير كافية
          </div>
		  <div class="form-group white">
            <label class="control-label">3-	المقاول قادر على اضافة عناصر اضافية في حال احتياج العمل</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectmanages[neededadd]" value="يملك إدارة جيدة" autofocus="" required="required">&nbsp;&nbsp;&nbsp;يملك إدارة جيدة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectmanages[neededadd]" value="لا يملك">&nbsp;&nbsp;&nbsp;لا يملك
          </div>
		  <br><br>
          <button class="btn btn-primary nextBtn btn-lg center-block" type="button">التالي</button>
        </div>
    </div>
	<div class="row setup-content" id="step-16">
		<div class="col-xs-12 col-md-12">
		  <h4 style="color:#fff; margin:55px; text-align:center;">تقييم أداء عناصر المقاول</h4>
		  
          <div class="form-group white">
			<label class="control-label">1-	تصنيف المقاول في سوق العمل</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[contractorrank1]" value="الإلتزام أمام الأطراف المشاركة بالمشروع في حل المشكلات">&nbsp;&nbsp;&nbsp;الإلتزام أمام الأطراف المشاركة بالمشروع في حل المشكلات
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[contractorrank2]" value="تحكم جيد وملاحظة فنية كاملة للأعمال الجارية">&nbsp;&nbsp;&nbsp;تحكم جيد وملاحظة فنية كاملة للأعمال الجارية
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[contractorrank3]" value="امداد المشروع بأعلى مستوى فني من مخططات الورشة">&nbsp;&nbsp;&nbsp;امداد المشروع بأعلى مستوى فني من مخططات الورشة
			<br>
			&nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[contractorrank4]" value="الإلتزام بالمواصفات الفنية">&nbsp;&nbsp;&nbsp;الإلتزام بالمواصفات الفنية
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[contractorrank5]" value="الإلتزام بعمل جداول زمنية محدثة">&nbsp;&nbsp;&nbsp;الإلتزام بعمل جداول زمنية محدثة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[contractorrank6]" value="جميع الأعمال المنفذة تتم طبقا للمخططات">&nbsp;&nbsp;&nbsp;جميع الأعمال المنفذة تتم طبقا للمخططات
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[contractorrank7]" value="الإلتزام بجميع بنود الأمن والسلامة">&nbsp;&nbsp;&nbsp;الإلتزام بجميع بنود الأمن والسلامة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[contractorrank8]" value="الإلتزام بتوفير العمالة الفنية الجيدة والمؤهلة">&nbsp;&nbsp;&nbsp;الإلتزام بتوفير العمالة الفنية الجيدة والمؤهلة
		  </div>
		<br><br>
          <button class="btn btn-primary nextBtn btn-lg center-block" type="button">التالي</button>
        </div>
    </div>
	<div class="row setup-content" id="step-17">
        <div class="col-xs-12 col-md-12">
          <h4 style="color:#fff; margin:55px; text-align:center;">تقييم العلاقة بين الاستشاري والمقاول</h4>
		  
		  <div class="form-group white">
            <label class="control-label">1-	عندما يقوم المقاول بأعمال بدون تقديم طلب للإستشاري</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectmanages[contractorapply]" value="الإتفاق على الإزالة" autofocus="" required="required">&nbsp;&nbsp;&nbsp;الإتفاق على الإزالة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectmanages[contractorapply]" value="عدم الإتفاق">&nbsp;&nbsp;&nbsp;عدم الإتفاق
		  </div>
          <div class="form-group white">
            <label class="control-label">2-	في حال تعميد المقاول بخطاب من الإستشاري</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectmanages[contractormessage]" value="استجابة سريعة" autofocus="" required="required">&nbsp;&nbsp;&nbsp;2-1-	استجابة سريعة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectmanages[contractormessage]" value="استجابة فيما بعد">&nbsp;&nbsp;&nbsp;استجابة فيما بعد
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectmanages[contractormessage]" value="استجابة أحيانا">&nbsp;&nbsp;&nbsp;استجابة أحيانا
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectmanages[contractormessage]" value="لا يوجد استجابة">&nbsp;&nbsp;&nbsp;لا يوجد استجابة
          </div>
		  <div class="form-group white">
            <label class="control-label">3-	موقف المقاول مع الإستشاري</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectmanages[contractorsetu]" value="جيد" autofocus="" required="required">&nbsp;&nbsp;&nbsp;جيد
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectmanages[contractorsetu]" value="مقبول">&nbsp;&nbsp;&nbsp;مقبول
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectmanages[contractorsetu]" value="سيء">&nbsp;&nbsp;&nbsp;سيء
          </div>
		  <br><br>
          <button class="btn btn-primary nextBtn btn-lg center-block" type="button">التالي</button>
        </div>
    </div>
	<div class="row setup-content" id="step-18">
		<div class="col-xs-12 col-md-12">
		  <h4 style="color:#fff; margin:55px; text-align:center;">تقييم مدى توفير المقاول المكان الملائم للإستشاري بالموقع</h4>
		  
          <div class="form-group white">
			<label class="control-label">1-	الفرغات المعمارية</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[archgab1]" value="الفراغات المعمارية كافية لعناصر الإستشاري">&nbsp;&nbsp;&nbsp;الفراغات المعمارية كافية لعناصر الإستشاري
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[archgab2]" value="الإمداد بالخدمات الأساسية والمرافق">&nbsp;&nbsp;&nbsp;الإمداد بالخدمات الأساسية والمرافق
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[archgab3]" value="الإمداد بوسائل الأمن والسلامة">&nbsp;&nbsp;&nbsp;الإمداد بوسائل الأمن والسلامة
		  </div>
		  <br>
		  <div class="form-group white">
			<label class="control-label">2-	التأثيث الداخلي للفراغات</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[gabin1]" value="تأثيث مناسب بالفرش الداخلي">&nbsp;&nbsp;&nbsp;تأثيث مناسب بالفرش الداخلي
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[gabin2]" value="التزويد بالأجهزة المطلوبة">&nbsp;&nbsp;&nbsp;التزويد بالأجهزة المطلوبة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[gabin3]" value="أخرى">&nbsp;&nbsp;&nbsp;أخرى
		  </div>
		  <br>
		  <div class="form-group white">
			<label class="control-label">3-	وسائل الإتصال</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[contact1]" value="التليفون الثابت">&nbsp;&nbsp;&nbsp;التليفون الثابت
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[contact2]" value="الفاكس">&nbsp;&nbsp;&nbsp;الفاكس
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[contact3]" value="الإنترنت">&nbsp;&nbsp;&nbsp;الإنترنت
		  </div>
		<br><br>
          <button class="btn btn-primary nextBtn btn-lg center-block" type="button">التالي</button>
        </div>
    </div>
	<div class="row setup-content" id="step-19">
        <div class="col-xs-12 col-md-12">
          <h4 style="color:#fff; margin:55px; text-align:center;">أحوال مركبات المقاول</h4>
		  
		  <div class="form-group white">
            <label class="control-label">1-	أعداد المركبات</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectmanages[carsnum]" value="كاف" autofocus="" required="required">&nbsp;&nbsp;&nbsp;كاف
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectmanages[carsnum]" value="غير كاف">&nbsp;&nbsp;&nbsp;غير كاف
		  </div>
          <div class="form-group white">
            <label class="control-label">2-	أنواع المركبات</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectmanages[carstype]" value="ملائم" autofocus="" required="required">&nbsp;&nbsp;&nbsp;ملائم
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectmanages[carstype]" value="غير ملائم">&nbsp;&nbsp;&nbsp;غير ملائم
          </div>
		  <div class="form-group white">
            <label class="control-label">3-	الصيانة الدورية</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectmanages[carsupdate]" value="ضمان الصيانة الدورية متوفر" autofocus="" required="required">&nbsp;&nbsp;&nbsp;ضمان الصيانة الدورية متوفر
			<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="projectmanages[carsupdate]" value="لايوجد ضمان">&nbsp;&nbsp;&nbsp;لايوجد ضمان
          </div>
		  <br><br>
          <button class="btn btn-primary nextBtn btn-lg center-block" type="button">التالي</button>
        </div>
    </div>
	<div class="row setup-content" id="step-20">
        <div class="col-xs-12 col-md-12">
          <h4 style="color:#fff; margin:55px; text-align:center;">مطالبات المقاول للبنود الجديدة</h4>
		  
		  <h4 style="color:#6ca4d5; margin:15px;">1- أنواع المطالبات للبنود الجديدة</h4>
		  <div class="form-group white">
            <label class="control-label">1-1-	أوامر تغيير معتمدة</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[orders1][]" value="زيادة كميات فقط">&nbsp;&nbsp;&nbsp;زيادة كميات فقط
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[orders1][]" value="تغيير المواد فقط">&nbsp;&nbsp;&nbsp;تغيير المواد فقط
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[orders1][]" value="تغيير مواد وزيادة في الكميات">&nbsp;&nbsp;&nbsp;تغيير مواد وزيادة في الكميات
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[orders1][]" value="اضافة ملحقات جديدة (كهربية – مكانيكية-معمارية)">&nbsp;&nbsp;&nbsp;اضافة ملحقات جديدة (كهربية – مكانيكية-معمارية)
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[orders1][]" value="أخرى">&nbsp;&nbsp;&nbsp;أخرى
		  </div>
		  <br>
          <div class="form-group white">
            <label class="control-label">1-2-	مخططات أو تعديلات جديدة</label>
           <br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[neworders1][]" value="معتمدة من المالك">&nbsp;&nbsp;&nbsp;معتمدة من المالك
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[neworders1][]" value="معتمدة من الإستشاري">&nbsp;&nbsp;&nbsp;معتمدة من الإستشاري
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[neworders1][]" value="تم تعميد المقاول بواسطة الإستشاري للبنود الجديدة">&nbsp;&nbsp;&nbsp;تم تعميد المقاول بواسطة الإستشاري للبنود الجديدة
          </div>
		  <br><br>
          <button class="btn btn-primary nextBtn btn-lg center-block" type="button">التالي</button>
        </div>
    </div>
	<div class="row setup-content" id="step-21">
        <div class="col-xs-12 col-md-12">
          <h4 style="color:#fff; margin:55px; text-align:center;">مطالبات المقاول لمدة اضافية للتنفيذ</h4>
		  
		  <h4 style="color:#6ca4d5; margin:15px;">1- أنواع المطالبات للبنود الجديدة التي تم المطالبة بموجبها</h4>
		  <div class="form-group white">
            <label class="control-label">1-1-	أوامر تغيير معتمدة</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[orders2][]" value="زيادة كميات فقط">&nbsp;&nbsp;&nbsp;زيادة كميات فقط
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[orders2][]" value="تغيير المواد فقط">&nbsp;&nbsp;&nbsp;تغيير المواد فقط
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[orders2][]" value="تغيير مواد وزيادة في الكميات">&nbsp;&nbsp;&nbsp;تغيير مواد وزيادة في الكميات
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[orders2][]" value="اضافة ملحقات جديدة (كهربية – مكانيكية-معمارية)">&nbsp;&nbsp;&nbsp;اضافة ملحقات جديدة (كهربية – مكانيكية-معمارية)
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[orders2][]" value="أخرى">&nbsp;&nbsp;&nbsp;أخرى
		  </div>
		  <br>
          <div class="form-group white">
            <label class="control-label">1-2-	مخططات أو تعديلات جديدة</label>
           <br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[neworders2][]" value="معتمدة من المالك">&nbsp;&nbsp;&nbsp;معتمدة من المالك
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[neworders2][]" value="معتمدة من الإستشاري">&nbsp;&nbsp;&nbsp;معتمدة من الإستشاري
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[neworders2][]" value="تم تعميد المقاول بواسطة الإستشاري للبنود الجديدة">&nbsp;&nbsp;&nbsp;تم تعميد المقاول بواسطة الإستشاري للبنود الجديدة
          </div>
		  <br><br>
          <button class="btn btn-primary nextBtn btn-lg center-block" type="button">التالي</button>
        </div>
    </div>
	<div class="row setup-content" id="step-22">
        <div class="col-xs-12 col-md-12">
          <h4 style="color:#fff; margin:55px; text-align:center;">المعوقات التي تؤثر على الجدوال الزمنية بأنواعها</h4>
		  
		  <div class="form-group white">
            <label class="control-label">1-	معوقات خاصة بقدرات المقاول</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[contractorchall1][]" value="نقص في المعدات">&nbsp;&nbsp;&nbsp;نقص في المعدات
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[contractorchall1][]" value="نقص في العمالة">&nbsp;&nbsp;&nbsp;نقص في العمالة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[contractorchall1][]" value="مشكلات مالية">&nbsp;&nbsp;&nbsp;مشكلات مالية
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[contractorchall1][]" value="عدم القدرة على تأمين المشتريات المطلوبة">&nbsp;&nbsp;&nbsp;عدم القدرة على تأمين المشتريات المطلوبة
		  </div>
          <div class="form-group white">
            <label class="control-label">2-	تعديلات من الإستشاري أو المالك أو كلاهما</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[expertupdate][]" value="يوجد">&nbsp;&nbsp;&nbsp;يوجد
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[expertupdate][]" value="لا يوجد">&nbsp;&nbsp;&nbsp;لا يوجد
          </div>
		  <div class="form-group white">
            <label class="control-label">3-	مشكلات مالية خاصة بالمالك</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[financialproblem][]" value="يوجد">&nbsp;&nbsp;&nbsp;يوجد
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[financialproblem][]" value="لا يوجد">&nbsp;&nbsp;&nbsp;لا يوجد
          </div>
		  <div class="form-group white">
            <label class="control-label">4-	المعوقات التنفيذية</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[executechall][]" value="معوقات انشائية">&nbsp;&nbsp;&nbsp;معوقات انشائية
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[executechall][]" value="معوقات ادارية">&nbsp;&nbsp;&nbsp;معوقات ادارية
		  </div>
		  <br><br>
          <button class="btn btn-primary nextBtn btn-lg center-block" type="button">التالي</button>
        </div>
    </div>
	<div class="row setup-content" id="step-23">
        <div class="col-xs-12 col-md-12">
          <h4 style="color:#fff; margin:55px; text-align:center;">المعوقات الخاصة بتسليم المواد طبقا للجدول الزمني</h4>
		  
		  <div class="form-group white">
            <label class="control-label">1-	معوقات خاصة بالمقاول</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[contractorchall2][]" value="الجداول الزمنية للتقديمات غير جيدة">&nbsp;&nbsp;&nbsp;الجداول الزمنية للتقديمات غير جيدة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[contractorchall2][]" value="لا يوجد استجابة من المقاول للإستشاري">&nbsp;&nbsp;&nbsp;لا يوجد استجابة من المقاول للإستشاري
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[contractorchall2][]" value="الموقع بعيد عن مواقع الخامات المطلوبة">&nbsp;&nbsp;&nbsp;الموقع بعيد عن مواقع الخامات المطلوبة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[contractorchall2][]" value="مشكلات مالية">&nbsp;&nbsp;&nbsp;مشكلات مالية
		  </div>
          <div class="form-group white">
            <label class="control-label">2-	أوامر التغيير</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[orderupdate][]" value="اوامر التغير مؤثرة على التسليمات">&nbsp;&nbsp;&nbsp;اوامر التغير مؤثرة على التسليمات
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[orderupdate][]" value="غير مؤثرة">&nbsp;&nbsp;&nbsp;غير مؤثرة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[orderupdate][]" value="أخرى">&nbsp;&nbsp;&nbsp;أخرى
          </div>
		  <br><br>
          <button class="btn btn-primary nextBtn btn-lg center-block" type="button">التالي</button>
        </div>
    </div>
	<div class="row setup-content" id="step-24">
        <div class="col-xs-12 col-md-12">
          <h4 style="color:#fff; margin:55px; text-align:center;">المعوقات الخاصة بتسليم مخططات الورشة طبقا للجدول الزمني</h4>
		  
		  <div class="form-group white">
            <label class="control-label">1-	معوقات خاصة بالمقاول</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[contractorchall3][]" value="عناصر المقاول غير مؤهلة جيدا">&nbsp;&nbsp;&nbsp;عناصر المقاول غير مؤهلة جيدا
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[contractorchall3][]" value="لا يوجد استجابة بين المقاول والاستشاري">&nbsp;&nbsp;&nbsp;لا يوجد استجابة بين المقاول والاستشاري
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[contractorchall3][]" value="مشكلات مالية">&nbsp;&nbsp;&nbsp;مشكلات مالية
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[contractorchall3][]" value="أخرى">&nbsp;&nbsp;&nbsp;أخرى
		  </div>
          <div class="form-group white">
            <label class="control-label">2-	تعدد التعديلات من المالك أو الاستشاري أو كلاهما</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[multiexpertupdate][]" value="يوجد تعديلات متعددة">&nbsp;&nbsp;&nbsp;يوجد تعديلات متعددة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[multiexpertupdate][]" value="لا يوجد">&nbsp;&nbsp;&nbsp;لا يوجد
          </div>
		  <div class="form-group white">
            <label class="control-label">3-	رفض مخططات الورشة من قبل الاستشاري</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[rejectplans][]" value="تم رفض المخططات">&nbsp;&nbsp;&nbsp;تم رفض المخططات
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[rejectplans][]" value="تم الرفض جزئيا">&nbsp;&nbsp;&nbsp;تم الرفض جزئيا
          </div>
		  <br><br>
          <button class="btn btn-primary nextBtn btn-lg center-block" type="button">التالي</button>
        </div>
    </div>
	<div class="row setup-content" id="step-25">
        <div class="col-xs-12 col-md-12">
          <h4 style="color:#fff; margin:55px; text-align:center;">استلام الأعمال على أسس نظامية</h4>
		  
		  <div class="form-group white">
            <label class="control-label">1-	طلبات الإستلام للأعمال معبأة بشكل جيد</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[resiveorders][]" value="جيدة">&nbsp;&nbsp;&nbsp;جيدة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[resiveorders][]" value="غير جيدة">&nbsp;&nbsp;&nbsp;غير جيدة
		  </div>
          <div class="form-group white">
            <label class="control-label">2-	استيفاء جميع جوانب المطابقة للتخصصات المختلفة</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[fullcopy][]" value="مطابقة المخططات">&nbsp;&nbsp;&nbsp;مطابقة المخططات
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[fullcopy][]" value="مطابقة المواصفات">&nbsp;&nbsp;&nbsp;مطابقة المواصفات
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[fullcopy][]" value="مطابقة الكميات">&nbsp;&nbsp;&nbsp;مطابقة الكميات
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[fullcopy][]" value="جودة الأعمال المنفذة من العمالة الجيدة">&nbsp;&nbsp;&nbsp;جودة الأعمال المنفذة من العمالة الجيدة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[fullcopy][]" value="مطابقة العينات المعتمدة">&nbsp;&nbsp;&nbsp;مطابقة العينات المعتمدة
          </div>
		  <div class="form-group white">
            <label class="control-label">3-	النتيجة النهائية للإستلام الأعمال</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[finalresult][]" value="تم الإستلام">&nbsp;&nbsp;&nbsp;تم الإستلام
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[finalresult][]" value="رفض الأعمال">&nbsp;&nbsp;&nbsp;رفض الأعمال
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[finalresult][]" value="ملاحظات">&nbsp;&nbsp;&nbsp;ملاحظات
          </div>
		  <br><br>
          <button class="btn btn-primary nextBtn btn-lg center-block" type="button">التالي</button>
        </div>
    </div>
	<div class="row setup-content" id="step-26">
        <div class="col-xs-12 col-md-12">
          <h4 style="color:#fff; margin:55px; text-align:center;">تحريات اعتبارات الأمن والسلامة</h4>
		  
		  <div class="form-group white">
            <label class="control-label">1-	تأمين الموقع</label>
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[sitesafety][]" value="امداد المشروع بالسور الخارجي مع الحواجز المرأية">&nbsp;&nbsp;&nbsp;امداد المشروع بالسور الخارجي مع الحواجز المرأية
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[sitesafety][]" value="حارس أمن على المشروع">&nbsp;&nbsp;&nbsp;حارس أمن على المشروع
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[sitesafety][]" value="تزويد المداخل والمخارج بتحكم امني ">&nbsp;&nbsp;&nbsp;تزويد المداخل والمخارج بتحكم امني 
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[sitesafety][]" value="تزويد العاملين ببطاقة تعريف شخصية وزي موحد">&nbsp;&nbsp;&nbsp;تزويد العاملين ببطاقة تعريف شخصية وزي موحد
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[sitesafety][]" value="تزويد الزائر ببطاقة تعريف">&nbsp;&nbsp;&nbsp;تزويد الزائر ببطاقة تعريف
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[sitesafety][]" value="عدم السماح بالتواجد بعد ساعات العمل الرسمية">&nbsp;&nbsp;&nbsp;عدم السماح بالتواجد بعد ساعات العمل الرسمية
		  </div>
          <div class="form-group white">
            <label class="control-label">2-	تأمين مناطق العمل الداخلية للمشروع</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[worksafety][]" value="عمل مخطط موقع عام للمناطق المختلفة للمشروع">&nbsp;&nbsp;&nbsp;عمل مخطط موقع عام للمناطق المختلفة للمشروع
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[worksafety][]" value="تأمين جميع الفتحات الأرضية بالموقع ان وجد">&nbsp;&nbsp;&nbsp;تأمين جميع الفتحات الأرضية بالموقع ان وجد
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[worksafety][]" value="امداد جميع مناطق الحفر بلافتات التحذير والإضاءة الليلية">&nbsp;&nbsp;&nbsp;امداد جميع مناطق الحفر بلافتات التحذير والإضاءة الليلية
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[worksafety][]" value="التأكد من أن جميع الوصلات الكهربية بالموقع آمنة">&nbsp;&nbsp;&nbsp;التأكد من أن جميع الوصلات الكهربية بالموقع آمنة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[worksafety][]" value="توصيل الشدات المعدنية بخط أرضي للحماية من خطر التيار الكهربي">&nbsp;&nbsp;&nbsp;توصيل الشدات المعدنية بخط أرضي للحماية من خطر التيار الكهربي
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[worksafety][]" value="مناطق الحفر تدعم حسب تعليمات الاستشاري">&nbsp;&nbsp;&nbsp;مناطق الحفر تدعم حسب تعليمات الاستشاري
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[worksafety][]" value="دراسة توفير مناطق تشوين منفصلة للمواد الكيميائية أو الشداد المعدنية وخلافة">&nbsp;&nbsp;&nbsp;دراسة توفير مناطق تشوين منفصلة للمواد الكيميائية أو الشداد المعدنية وخلافة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[worksafety][]" value="أهمية التهوية والإضاءة في أماكن العمل لللأشخاص الذين يعملون تحت الأرض أو بالترنشات أو القبوات">&nbsp;&nbsp;&nbsp;أهمية التهوية والإضاءة في أماكن العمل لللأشخاص الذين يعملون تحت الأرض أو بالترنشات أو القبوات
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[worksafety][]" value="دراسة الأماكن التي يعمل بها الأوناش بحيث يكون هناك مساحة آمنة بطول ذراع الونش لتفادي الحوادث">&nbsp;&nbsp;&nbsp;دراسة الأماكن التي يعمل بها الأوناش بحيث يكون هناك مساحة آمنة بطول ذراع الونش لتفادي الحوادث
          </div>
		  <div class="form-group white">
            <label class="control-label">3-	الإمداد بالمخازن والمكاتب</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[storeadd][]" value="امداد المكاتب بوسائل الأمن والسلامة ووسائل مكافحة الحريق">&nbsp;&nbsp;&nbsp;امداد المكاتب بوسائل الأمن والسلامة ووسائل مكافحة الحريق
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[storeadd][]" value="امداد المخارج للطوارئ باللوحات الارشادية">&nbsp;&nbsp;&nbsp;امداد المخارج للطوارئ باللوحات الارشادية
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[storeadd][]" value="امداد المكاتب والممرات باللوحات الارشادية للسلامة">&nbsp;&nbsp;&nbsp;امداد المكاتب والممرات باللوحات الارشادية للسلامة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[storeadd][]" value="امداد المكاتب بصندوق الاسعافات الأولية وتدريب الأفراد على كيفية استخدامة">&nbsp;&nbsp;&nbsp;امداد المكاتب بصندوق الاسعافات الأولية وتدريب الأفراد على كيفية استخدامة
          </div>
		   <div class="form-group white">
            <label class="control-label">4-	امداد العمالة بوسائل الأمن والسلامة</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[safetyadd][]" value="امداد العمالة بأحذية السلامة">&nbsp;&nbsp;&nbsp;امداد العمالة بأحذية السلامة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[safetyadd][]" value="امداد العمالة بغطاء الرأس الواقي">&nbsp;&nbsp;&nbsp;امداد العمالة بغطاء الرأس الواقي
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[safetyadd][]" value="استعمال القفاذات بالأيدي في حال التعامل مع مواد كيميائية ضارة ">&nbsp;&nbsp;&nbsp;استعمال القفاذات بالأيدي في حال التعامل مع مواد كيميائية ضارة 
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[safetyadd][]" value="العمالة التي تعمل في انشاء الطرق يجب أن تزود بالعاكسات الضوئية للسلامة">&nbsp;&nbsp;&nbsp;العمالة التي تعمل في انشاء الطرق يجب أن تزود بالعاكسات الضوئية للسلامة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[safetyadd][]" value="في حال التغيرات الجوية الحادة يجب استعمال ملابس وقائية لتجنب تأخير المشروع">&nbsp;&nbsp;&nbsp;في حال التغيرات الجوية الحادة يجب استعمال ملابس وقائية لتجنب تأخير المشروع
          </div>
		   <div class="form-group white">
            <label class="control-label">5-	الأحوال العامة</label>
            <br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[generalmode][]" value="منع التدخين داخل مناطق المشروع">&nbsp;&nbsp;&nbsp;منع التدخين داخل مناطق المشروع
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[generalmode][]" value="لابد من الحفاظ على النظافة العامة للموقع ">&nbsp;&nbsp;&nbsp;لابد من الحفاظ على النظافة العامة للموقع 
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[generalmode][]" value="لابد من ابعاد نواتج الحفر بعيد عن الحفر بمسافة كافية">&nbsp;&nbsp;&nbsp;لابد من ابعاد نواتج الحفر بعيد عن الحفر بمسافة كافية
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[generalmode][]" value="جميع المناطق الخطرة مثل أماكن الحفر لابد أن تكون مسورة">&nbsp;&nbsp;&nbsp;جميع المناطق الخطرة مثل أماكن الحفر لابد أن تكون مسورة
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[generalmode][]" value="التأكد من تخزين المواد في أماكنها واغلاق التيار الكهربي">&nbsp;&nbsp;&nbsp;التأكد من تخزين المواد في أماكنها واغلاق التيار الكهربي
			<br>
            &nbsp;&nbsp;&nbsp;<input type="checkbox" name="projectmanages[generalmode][]" value="توافر نماذج تقارير الحوادث بالموقع ">&nbsp;&nbsp;&nbsp;توافر نماذج تقارير الحوادث بالموقع 
          </div>
		  <br><br>
          <button class="btn btn-primary nextBtn btn-lg center-block" type="button" >التالي</button>
        </div>
    </div>
	
	
	<div class="row setup-content" id="step-27">
        <div class="col-xs-12 col-md-12">
          <h4 style="color:#fff; margin:55px; text-align:center;">
			<button class="btn btn-success nextBtn btn-lg center-block" type="button" >مستوى الجودة</button>
		  </h4>
		</div>
	</div>
	<div class="row setup-content" id="step-28">
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
    <div class="row setup-content" id="step-29">
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
	<div class="row setup-content" id="step-30">
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
	<div class="row setup-content" id="step-31">
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