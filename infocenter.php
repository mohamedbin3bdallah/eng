<?php
	session_start();
	$lang = 'ar';
	$_SERVER['HTTP_PRAGMA'] = 'no-cache';
	$_SERVER['HTTP_CACHE_CONTROL'] = 'no-cache';
	include('develops/infocenter-front.php');
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
<!-- Use any element to open the sidenav -->
<!-- navigation -->
	<?php include('designs/header.php'); ?>
<!-- /navigation -->

<!-- about section -->
<section class="contact-us" id="about">
	<div class="container" style="background-color:rgba(255, 255, 255, 0.12); padding:15px; border-radius:15px; box-shadow: 10px 10px 5px rgba(255, 255, 255, 0.35);">
		<div class="col-lg-12">
			<h3 class="text-center">مركز المعلومات</h3>
			<p class="text-center" style="text-align:justify;">
				يمكن لأي صاحب مشروع التعامل مع برنامج مركز معلومات المشاريع الإنشائية لمراقبة الجودة وجميع أحوال المشروع التنفيذية والمالية من خلال الخطوات التالية:<br>
				1-	التعرف على البرنامج ومحتوياته من خلال الصفحة الرئيسية بدقة وقراءة جميع الملفات بداخل شريط الأدوات واستيعابها.<br>
				2-	الدخول على شريط الأدوات الرئيسي والضغط على تسجيل أحوال مشروع جديد من خلال المهندس المقيم أو مدير المشروع المراد مراقبة الجودة له وسوف يتم الإنتقال للصفحة التالية بمجرد استيفاء جميع بيانات الصفحة الحالية ثم الضغط على (التالي) وذلك حتى الإنتهاء من جميع البيانات وتصلك رسالة تم تسجيل البيانات بنجاح.<br>
				3-	الإتصال من خلال الشخص المفوض من جهة المالك للمشروع بمدير مركز المعلومات (الدكتور فريد أبوالعلا) من خلال أرقام الإتصال الموضحة أو بإشعار رسمي لمركز الدراسات الإستشارية بهندسة شبرا بالعنوان الموضح بجهات الإتصال.<br>
				4-	يتم التعاقد بين الطرفين بعد دراسة ابتدائية للمعلومات الواردة عن المشروع .<br>
				5-	دراسة معلومات المشروع والإتصال بمدير المشروع في حال اي استفسار أو توضيح مطلوب.<br>
				6-	تحديد موعد لزيارة ميدانية للمشروع بالتنسيق مع المقاول بالموقع في حضور جميع العناصر بالموقع.<br>
				7-	تزويد المالك أو من ينوب عنه باسم مستخدم وكلمة مرور ليتم استلام التقرير النهائي للزيارة الميدانية للموقع والتوصيات المقترحة.<br>
				8-	يتم حفظ ملف المشروع على النظام لحين تكرار الزيارة بصفة دورية إذا لزم الأمر<br>
				9-	جميع التقارير قابلة للطباعة من قبل العميل.<br>

			</p>
		</div>
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