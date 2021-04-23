<?php
session_start();
if(isset($_SESSION['userid']))
{
	$lang = 'ar';
	$_SERVER['HTTP_PRAGMA'] = 'no-cache';
	$_SERVER['HTTP_CACHE_CONTROL'] = 'no-cache';
	include('develops/projectfiles-front.php');
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
		<?php if(isset($_SESSION['userid'])) { ?><button type="button" class="btn btn-success" onclick="location.href = 'projectfile.php'">مشروع جديد</button><?php } ?>
	</p>
	
	<div class="row">
		<div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4" style="padding: 25px; background: rgba(255, 255, 255, 0.09); color: #fff; border-radius: 15px; box-shadow: 5px 5px 5px rgba(255, 255, 255, 0.35);">
			<form class="form-horizontal" action="projectfiles.php" method="GET" enctype="multipart/form-data" autocomplete="off">
				<div class="form-group">
					<label for="projectid" class="col-sm-2 <?php if($lang == 'ar') echo 'col-sm-push-10'; ?> control-label" style="color:#fff;">مشروع رقم</label>
					<div class="col-sm-10 <?php if($lang == 'ar') echo 'col-sm-pull-2'; ?>">
						<input type="text" class="form-control" name="projectid" id="name" maxlength="50" placeholder="مشروع رقم" autocomplete="off" />
					</div>
				</div>
				<div class="form-group">
					<label for="from" class="col-sm-2 <?php if($lang == 'ar') echo 'col-sm-push-10'; ?> control-label" style="color:#fff;">من</label>
					<div class="col-sm-10 <?php if($lang == 'ar') echo 'col-sm-pull-2'; ?>">
						<input type="date" class="form-control" name="from" id="date" />
					</div>
				</div>
				<div class="form-group">
					<label for="to" class="col-sm-2 <?php if($lang == 'ar') echo 'col-sm-push-10'; ?> control-label" style="color:#fff;">الى</label>
					<div class="col-sm-10 <?php if($lang == 'ar') echo 'col-sm-pull-2'; ?>">
						<input type="date" class="form-control" name="to" id="date" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-10">
						<input type="submit" class="btn btn-primary" name="search" id="search" value="بحث" />
					</div>
				</div>
			</form>
		</div>
	</div>

	<div class="container">	
		<?php if(!empty($projectfiles)) { ?>
		<div class="row">
			<?php for($i=0;$i<count($projectfiles);$i++) { ?>
				<?php $reports = getAllDataFromTable('report,time','reports','where projectid = '.$projectfiles[$i]['id'],'order by time DESC'); ?>
				<div class="col-lg-4 col-md-4 <?php if($i%3 == 0) echo 'col-lg-push-8 col-md-push-8'; elseif($i%3 == 2) echo 'col-lg-pull-8 col-md-pull-8'; ?>">
					<div class="thumbnail" id="product" style="background:rgba(255, 255, 255, 0); border:0;">
						<div class="caption" style="/*position: absolute;*/ top: 0; bottom: 0; left: 0; right: 0; text-align: center; margin: 55px; padding: 25px; background: rgba(255, 255, 255, 0.09); color: #fff; border-radius: 15px; box-shadow: 5px 5px 5px rgba(255, 255, 255, 0.35);">
							<h5 style="text-align:center;margin-bottom:25px;"><?php echo $projectfiles[$i]['name']; ?></h5>
							<h5 style="text-align:center;margin-bottom:25px;"><?php echo $projectfiles[$i]['projectid']; ?></h5>
							<br>
							<a class="btn btn-info" href="#" data-toggle="modal" data-target="#details-<?php echo $projectfiles[$i]['id']; ?>"><?php language('more'); ?></a>
							<?php if(!empty($reports)) { ?><a class="btn btn-success" href="#" data-toggle="modal" data-target="#reports-<?php echo $projectfiles[$i]['id']; ?>"><?php language('reports'); ?></a><?php } ?>
							<!--<button type="button" class="btn btn-info" onclick="location.href = 'project.php?id=<?php //echo $projectfiles[$i]['id']; ?>'"><?php //language('more'); ?></button>-->
							<?php if(isset($_SESSION['userid'])) { ?><!--<button type="button" class="btn btn-warning" onclick="location.href = 'editproject.php?id=<?php //echo $projectfiles[$i]['id']; ?>'"><?php //language('edit'); ?></button>-->
							<button type="submit" class="btn btn-danger" onclick="location.href = 'delprojectfile.php?id=<?php echo $projectfiles[$i]['id']; ?>'"><?php language('delete'); ?></button><?php } ?>
						</div>
					</div>
				</div>
				
				<?php if(!empty($reports)) { ?>
				<div id="reports-<?php echo $projectfiles[$i]['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<br>
        					</div>
							<div class="modal-body">
								<h4 style="text-align:center; margin-bottom:35px;"><?php echo $projectfiles[$i]['name']; ?></h4>
								
								<div class="row" style="margin-top: 50px;">
									<div class="col-sm-12 table-responsive">
										<table class="table table-bordered table-striped" style="text-align: center;">
											<tr class="info">
												<th style="text-align:center">المسلسل</th>
												<th style="text-align:center">التقرير</th>
												<th style="text-align:center" width="25%">الوقت</th>
											</tr>
											<?php	for($j=0;$j<sizeof($reports);$j++)	{	?>
												<tr>
													<td><?php echo $j+1; ?></td>
													<td><?php echo $reports[$j]['report']; ?></td>
													<td width="25%"><?php echo date('Y-m-d h:i:s A', $reports[$j]['time']); ?></td>
												</tr>
											<?php } ?>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
				
				<div id="details-<?php echo $projectfiles[$i]['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<br>
        					</div>
							<div class="modal-body">
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">البيانات الاساسية للمشروع</h4>
									
									<h4 style="margin-bottom:25px;"><?php language('projectinfo'); ?></h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;"><?php language('projectname'); ?></h5>
										<h6><?php echo $projectfiles[$i]['name']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;"><?php language('value'); ?></h5>
										<h6><?php echo $projectfiles[$i]['value']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;"><?php language('location'); ?></h5>
										<h6><?php echo $projectfiles[$i]['location']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">وصف المشروع</h5>
										<h6><?php echo $projectfiles[$i]['description']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;"><?php language('receiptdate'); ?></h5>
										<h6><?php echo $projectfiles[$i]['receiptdate']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;"><?php language('deliverydate'); ?></h5>
										<h6><?php echo $projectfiles[$i]['deliverydate']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;"><?php language('contractor'); ?></h5>
										<h6><?php echo $projectfiles[$i]['contractor']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">عناصر المقاول</h5>
										<h6><?php echo $projectfiles[$i]['contractorelements']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;"><?php language('consultant'); ?></h5>
										<h6><?php echo $projectfiles[$i]['consultant']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">عناصر الاستشاري</h5>
										<h6><?php echo $projectfiles[$i]['consultantelements']; ?></h6>
									</div>

									<h4 style="margin-bottom:25px;">ممثل المالك</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;"><?php language('name'); ?></h5>
										<h6><?php echo $projectfiles[$i]['ownername']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;"><?php language('location'); ?></h5>
										<h6><?php echo $projectfiles[$i]['ownerlocation']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">التواصل مع المالك</h5>
										<h6><?php echo $projectfiles[$i]['ownercontact']; ?></h6>
									</div>
								</div>
								
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">الإجراءات المتخذه من الإستشاري في حال النقص في عناصر المقاول او عدم الكفاءة من خلال المراسلات</h4>
									
									<h4 style="margin-bottom:25px;">1-	أحوال عناصر المقاول</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-1-	النقص في المهندسين والمراقبين</h5>
										<h6><?php echo $projectfiles[$i]['engineers']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-1-	النقص في العمالة المدربة</h5>
										<h6><?php echo $projectfiles[$i]['employees']; ?></h6>
									</div>
									
									<h4 style="margin-bottom:25px;">2-	أثر النقص في العناصر على التقدم بالمشروع</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-2-	النقص في العناصر على التقدم بالمشروع</h5>
										<h6><?php echo $projectfiles[$i]['elements']; ?></h6>
									</div>
									
									<h4 style="margin-bottom:25px;">3-	الإجراءات التي تمت بواسطة الإستشاري</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-3-	المقاول</h5>
										<h6><?php echo $projectfiles[$i]['contractor1']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-3-	المالك</h5>
										<h6><?php echo $projectfiles[$i]['owner1']; ?></h6>
									</div>
									
									<h4 style="margin-bottom:25px;">4-	فحص مؤهلات عناصر المقاول</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-4-	اعتماد مدير المشروع</h5>
										<h6><?php echo $projectfiles[$i]['manageragree']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-4-	اعتماد المالك</h5>
										<h6><?php echo $projectfiles[$i]['owneragree']; ?></h6>
									</div>
									
									<h4 style="margin-bottom:25px;">5-	الإستنتاج</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-5-	الإستنتاج</h5>
										<h6><?php echo $projectfiles[$i]['conclusion1']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">الإجراءات المتخذة من الإستشاري في حال النقص في معدات المقاول</h4>
									
									<h4 style="margin-bottom:25px;">1-	أحوال معدات المقاول بالتفصيل</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-1-	الأحوال العامة لنقص المعدات</h5>
										<h6><?php echo $projectfiles[$i]['equipments']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-1-	تفاصيل المعدات الناقصة</h5>
										<h6><?php echo $projectfiles[$i]['equipmentstext']; ?></h6>
									</div>
									
									<h4 style="margin-bottom:25px;">2-	تأثير النقص في معدات المقاول على التقدم بالعمل</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-2-	قام الإستشاري بذكر كافة الجوانب السلبية التي تعرض لها التقدم بالمشروع بسبب النقص في المعدات وذلك في المراسلات</h5>
										<h6><?php echo $projectfiles[$i]['equipmentssend']; ?></h6>
									</div>
									
									<h4 style="margin-bottom:25px;">3-	الإجراءات المتخذة من الإستشاري</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-3-	المقاول</h5>
										<h6><?php echo $projectfiles[$i]['contractor2']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-3-	المالك</h5>
										<h6><?php echo $projectfiles[$i]['owner2']; ?></h6>
									</div>
									
									<h4 style="margin-bottom:25px;">4-	الإستنتاج</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-4-	الإستنتاج</h5>
										<h6><?php echo $projectfiles[$i]['conclusion2']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">الإجراءات المتخذة من الإستشاري في حال عدم وجود جداول زمنية بمختلف أنواعها</h4>
									
									<h4 style="margin-bottom:25px;">1-	الجداول الزمنية للإنشاء</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-1-	الجدول الزمني الأساسي</h5>
										<h6><?php echo $projectfiles[$i]['timebasiccreate']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-1-	الجدول الزمني المحدث</h5>
										<h6><?php echo $projectfiles[$i]['timeupdatecreate']; ?></h6>
									</div>
									
									<h4 style="margin-bottom:25px;">2-	الجداول الزمنية للتقديمات</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-2-	الجدول الزمني الأساسي</h5>
										<h6><?php echo $projectfiles[$i]['timebasicapply']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-2-	الجدول الزمني المحدث</h5>
										<h6><?php echo $projectfiles[$i]['timeupdateapply']; ?></h6>
									</div>
									
									<h4 style="margin-bottom:25px;">3-	تأثير غياب الجداول الزمنية على المشروع</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-3-	تم مراجعة جميع البنود المتأخرة في التنفيذ وغير مطابقة للجداول الزمنية من قبل مدير المشروع وتم ذكر ذلك في المراسلات</h5>
										<h6><?php echo $projectfiles[$i]['timesend']; ?></h6>
									</div>
									
									<h4 style="margin-bottom:25px;">4-	الإجراءات المتخذة من الإستشاي تجاه عدم وجود جداول زمنية</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-4-	المقاول</h5>
										<h6><?php echo $projectfiles[$i]['contractor3']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-4-	المالك</h5>
										<h6><?php echo $projectfiles[$i]['owner3']; ?></h6>
									</div>
									
									<h4 style="margin-bottom:25px;">5-	الإستنتاج</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-5-	الإستنتاج</h5>
										<h6><?php echo $projectfiles[$i]['conclusion3']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">الإجراءات المتخذة من الإستشاري في حال وجود معوقات للتنفيذ</h4>
									
									<h4 style="margin-bottom:25px;">1-	أنواع معوقات التنفيذ للمشروع خلال آخر ثلاث شهور</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-1-	أنواع معوقات</h5>
										<h6><?php echo $projectfiles[$i]['challengesex']; ?></h6>
									</div>

									<h4 style="margin-bottom:25px;">2-	الإجراءات المتخذة من الإستشاري (قام الإستشاري بمراسلة الجهات التالية خلال الثلاث شهور الماضية)</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-2-	المقاول</h5>
										<h6><?php echo $projectfiles[$i]['contractor4']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-2-	المالك</h5>
										<h6><?php echo $projectfiles[$i]['owner4']; ?></h6>
									</div>
									
									<h4 style="margin-bottom:25px;">3-	الإستنتاج</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-3-	الإستنتاج</h5>
										<h6><?php echo $projectfiles[$i]['conclusion4']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">الإجراءات المتخذة من الإستشاري في حال وجود معوقات إدارية</h4>
									
									<h4 style="margin-bottom:25px;">1-	أنواع المعوقات الإدارية للمشروع خلال آخر ثلاث شهور</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-1-	أنواع معوقات</h5>
										<h6><?php echo $projectfiles[$i]['challengesma']; ?></h6>
									</div>

									<h4 style="margin-bottom:25px;">2-	الإجراءات المتخذة من الإستشاري (قام الإستشاري بمراسلة الجهات التالية خلال الثلاث شهور الماضية)</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-2-	المقاول</h5>
										<h6><?php echo $projectfiles[$i]['contractor5']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-2-	المالك</h5>
										<h6><?php echo $projectfiles[$i]['owner5']; ?></h6>
									</div>
									
									<h4 style="margin-bottom:25px;">3-	الإستنتاج</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-3-	الإستنتاج</h5>
										<h6><?php echo $projectfiles[$i]['conclusion5']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">الأجراءات المتخذة من الإستشاري في حال النقص في اجراءات الأمن والسلامة</h4>
									
									<h4 style="margin-bottom:25px;">1-	تفاصيل النقص في اجراءات الأمن والسلامة</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-1-	تفاصيل النقص</h5>
										<h6><?php echo $projectfiles[$i]['safety']; ?></h6>
									</div>

									<h4 style="margin-bottom:25px;">2-	الإجراءات المتخذة من الإستشاري (قام الإستشاري بمراسلة الجهات التالية خلال الثلاث شهور الماضية)</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-2-	المقاول</h5>
										<h6><?php echo $projectfiles[$i]['contractor6']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-2-	المالك</h5>
										<h6><?php echo $projectfiles[$i]['owner6']; ?></h6>
									</div>
									
									<h4 style="margin-bottom:25px;">3-	الإستنتاج</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-3-	الإستنتاج</h5>
										<h6><?php echo $projectfiles[$i]['conclusion6']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">عمل التقارير الدورية بأنواعها</h4>
									
									<div style="margin-bottom:25px;">
										<h5><?php echo $projectfiles[$i]['reports1']; ?></h5>
										<h5><?php echo $projectfiles[$i]['reports2']; ?></h5>
										<h5><?php echo $projectfiles[$i]['reports3']; ?></h5>
										<h5><?php echo $projectfiles[$i]['reports4']; ?></h5>
										<h5><?php echo $projectfiles[$i]['reports5']; ?></h5>
										<h5><?php echo $projectfiles[$i]['reports6']; ?></h5>
										<h5><?php echo $projectfiles[$i]['reports7']; ?></h5>
										<h5><?php echo $projectfiles[$i]['reports8']; ?></h5>
										<h5><?php echo $projectfiles[$i]['reports9']; ?></h5>
										<h5><?php echo $projectfiles[$i]['reports10']; ?></h5>
										<h5><?php echo $projectfiles[$i]['reports11']; ?></h5>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">ملف الإجتماعات</h4>
									
									<h4 style="margin-bottom:25px;">1-	دواعي محاضر الإجتماعات</h4>
									<div style="margin-bottom:25px;">
										<h5><?php echo $projectfiles[$i]['meetreson1']; ?></h5>
										<h5><?php echo $projectfiles[$i]['meetreson2']; ?></h5>
										<h5><?php echo $projectfiles[$i]['meetreson3']; ?></h5>
										<h5><?php echo $projectfiles[$i]['meetreson4']; ?></h5>
									</div>
									<h4 style="margin-bottom:25px;">2-	مستندات محاضر الإجتماعات</h4>
									<div style="margin-bottom:25px;">
										<h5><?php echo $projectfiles[$i]['meetdoc1']; ?></h5>
										<h5><?php echo $projectfiles[$i]['meetdoc2']; ?></h5>
										<h5><?php echo $projectfiles[$i]['meetdoc3']; ?></h5>
										<h5><?php echo $projectfiles[$i]['meetdoc4']; ?></h5>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">ملف الطلبات</h4>
									
									<h4 style="margin-bottom:25px;">1-	أحوال سير الإنشاء في ضوء طلبات المقاول للتنفيذ</h4>
									<div style="margin-bottom:25px;">
										<h5><?php echo $projectfiles[$i]['createmode1']; ?></h5>
										<h5><?php echo $projectfiles[$i]['createmode2']; ?></h5>
										<h5><?php echo $projectfiles[$i]['createmode3']; ?></h5>
									</div>
									<h4 style="margin-bottom:25px;">2-	انواع المرفقات للطلبات</h4>
									<div style="margin-bottom:25px;">
										<h5><?php echo $projectfiles[$i]['attachtype1']; ?></h5>
										<h5><?php echo $projectfiles[$i]['attachtype2']; ?></h5>
										<h5><?php echo $projectfiles[$i]['attachtype3']; ?></h5>
										<h5><?php echo $projectfiles[$i]['attachtype4']; ?></h5>
									</div>
								</div>
								
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">مدى كفاية عناصر الإستشاري مقارنة بحجم العمل</h4>
									
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	عدد المهندسين الكلي مقارنة بالعقد</h5>
										<h6><?php echo $projectfiles[$i]['totalengineers']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	عدد المراقبين الكلي مقارنة بعقد الإستشاري</h5>
										<h6><?php echo $projectfiles[$i]['totalfollowers']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">3-	تأثير الإجازات السنوية على اكتمال العناصر</h5>
										<h6><?php echo $projectfiles[$i]['yearlyvacation']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">تقييم الأداء الفني لعناصر الإستشاري</h4>
									
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	تقييم الأداء الفني لعناصر الإستشاري</h5>
										<h6 style="margin-bottom:5px;"><?php echo $projectfiles[$i]['technicalvote1']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $projectfiles[$i]['technicalvote2']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $projectfiles[$i]['technicalvote3']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $projectfiles[$i]['technicalvote4']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $projectfiles[$i]['technicalvote5']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $projectfiles[$i]['technicalvote6']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $projectfiles[$i]['technicalvote7']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	الخبرة الفنية لمدير المشروع للإستشاري</h5>
										<h6><?php echo $projectfiles[$i]['technicalexper']; ?></h6>
									</div>
								</div>
								
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">أعداد عناصر المقاول مطابقة للإحتياجات الفعلية</h4>
									
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	مدي كفاية المهندسين بعناصر المقاول لأداء كافة الأعمال الجارية</h5>
										<h6><?php echo $projectfiles[$i]['contractorengineers']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	مدى كفاية المراقبين بعناصر المقاول لأداء كافة بنود الأعمال الجارية</h5>
										<h6><?php echo $projectfiles[$i]['contractorfollowers']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">3-	المقاول قادر على اضافة عناصر اضافية في حال احتياج العمل</h5>
										<h6><?php echo $projectfiles[$i]['neededadd']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">تقييم أداء عناصر المقاول</h4>
									
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	تصنيف المقاول في سوق العمل</h5>
										<h6 style="margin-bottom:5px;"><?php echo $projectfiles[$i]['contractorrank1']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $projectfiles[$i]['contractorrank2']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $projectfiles[$i]['contractorrank3']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $projectfiles[$i]['contractorrank4']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $projectfiles[$i]['contractorrank5']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $projectfiles[$i]['contractorrank6']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $projectfiles[$i]['contractorrank7']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $projectfiles[$i]['contractorrank8']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">تقييم العلاقة بين الاستشاري والمقاول</h4>
									
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	عندما يقوم المقاول بأعمال بدون تقديم طلب للإستشاري</h5>
										<h6><?php echo $projectfiles[$i]['contractorapply']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	في حال تعميد المقاول بخطاب من الإستشاري</h5>
										<h6><?php echo $projectfiles[$i]['contractormessage']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">3-	موقف المقاول مع الإستشاري</h5>
										<h6><?php echo $projectfiles[$i]['contractorsetu']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">تقييم مدى توفير المقاول المكان الملائم للإستشاري بالموقع</h4>
									
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	الفرغات المعمارية</h5>
										<h6 style="margin-bottom:5px;"><?php echo $projectfiles[$i]['archgab1']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $projectfiles[$i]['archgab2']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $projectfiles[$i]['archgab3']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	التأثيث الداخلي للفراغات</h5>
										<h6 style="margin-bottom:5px;"><?php echo $projectfiles[$i]['gabin1']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $projectfiles[$i]['gabin2']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $projectfiles[$i]['gabin3']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">3-	وسائل الإتصال</h5>
										<h6 style="margin-bottom:5px;"><?php echo $projectfiles[$i]['contact1']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $projectfiles[$i]['contact2']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $projectfiles[$i]['contact3']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">أحوال مركبات المقاول</h4>
									
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	أعداد المركبات</h5>
										<h6><?php echo $projectfiles[$i]['carsnum']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	أنواع المركبات</h5>
										<h6><?php echo $projectfiles[$i]['carstype']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">3-	الصيانة الدورية</h5>
										<h6><?php echo $projectfiles[$i]['carsupdate']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">مطالبات المقاول للبنود الجديدة</h4>
									
									<h4 style="margin:25px;">1- أنواع المطالبات للبنود الجديدة</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-1-	أوامر تغيير معتمدة</h5>
										<h6><?php echo $projectfiles[$i]['orders1']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-2-	مخططات أو تعديلات جديدة</h5>
										<h6><?php echo $projectfiles[$i]['neworders1']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">مطالبات المقاول لمدة اضافية للتنفيذ</h4>
									
									<h4 style="margin:25px;">1- أنواع المطالبات للبنود الجديدة التي تم المطالبة بموجبها</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-1-	أوامر تغيير معتمدة</h5>
										<h6><?php echo $projectfiles[$i]['orders2']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-2-	مخططات أو تعديلات جديدة</h5>
										<h6><?php echo $projectfiles[$i]['neworders2']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">المعوقات التي تؤثر على الجدوال الزمنية بأنواعها</h4>
									
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	معوقات خاصة بقدرات المقاول</h5>
										<h6><?php echo $projectfiles[$i]['contractorchall1']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	تعديلات من الإستشاري أو المالك أو كلاهما</h5>
										<h6><?php echo $projectfiles[$i]['expertupdate']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">3-	مشكلات مالية خاصة بالمالك</h5>
										<h6><?php echo $projectfiles[$i]['financialproblem']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">4-	المعوقات التنفيذية</h5>
										<h6><?php echo $projectfiles[$i]['executechall']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">المعوقات الخاصة بتسليم المواد طبقا للجدول الزمني</h4>
									
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	معوقات خاصة بالمقاول</h5>
										<h6><?php echo $projectfiles[$i]['contractorchall2']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	أوامر التغيير</h5>
										<h6><?php echo $projectfiles[$i]['orderupdate']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">المعوقات الخاصة بتسليم مخططات الورشة طبقا للجدول الزمني</h4>
									
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	معوقات خاصة بالمقاول</h5>
										<h6><?php echo $projectfiles[$i]['contractorchall3']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	تعدد التعديلات من المالك أو الاستشاري أو كلاهما</h5>
										<h6><?php echo $projectfiles[$i]['multiexpertupdate']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">3-	رفض مخططات الورشة من قبل الاستشاري</h5>
										<h6><?php echo $projectfiles[$i]['rejectplans']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">استلام الأعمال على أسس نظامية</h4>
									
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	طلبات الإستلام للأعمال معبأة بشكل جيد</h5>
										<h6><?php echo $projectfiles[$i]['resiveorders']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	استيفاء جميع جوانب المطابقة للتخصصات المختلفة</h5>
										<h6><?php echo $projectfiles[$i]['fullcopy']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">3-	النتيجة النهائية للإستلام الأعمال</h5>
										<h6><?php echo $projectfiles[$i]['finalresult']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">تحريات اعتبارات الأمن والسلامة</h4>
									
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	تأمين الموقع</h5>
										<h6><?php echo $projectfiles[$i]['sitesafety']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	تأمين مناطق العمل الداخلية للمشروع</h5>
										<h6><?php echo $projectfiles[$i]['worksafety']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">3-	الإمداد بالمخازن والمكاتب</h5>
										<h6><?php echo $projectfiles[$i]['storeadd']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">4-	امداد العمالة بوسائل الأمن والسلامة</h5>
										<h6><?php echo $projectfiles[$i]['safetyadd']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">5-	الأحوال العامة</h5>
										<h6><?php echo $projectfiles[$i]['generalmode']; ?></h6>
									</div>
								</div>
								
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">مستوى جودة الجداول الزمنية بكافة أنوعها</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	الجدول الزمني للإنشاء</h5>
										<h6><?php echo $projectfiles[$i]['timecreate']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	الجدول الزمني لتسليم المخططات</h5>
										<h6><?php echo $projectfiles[$i]['timeplan']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">3-	الجدول الزمني لتسليم المواد</h5>
										<h6><?php echo $projectfiles[$i]['timematerial']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">مستوى الجودة من خلال مطابقة المواصفات</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	الموردين المعتمدين للمواد والعينات (القسم المعماري – الميكانيكا – الكهرباء)</h5>
										<h6><?php echo $projectfiles[$i]['suppliers']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	جميع العينات مطابقة للمواصفات ومعتمدة من المالك والإستشاري</h5>
										<h6><?php echo $projectfiles[$i]['samples']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">مستوى الجودة من خلال مخططات الورشة</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	مقياس الرسم المناسب للمخططات</h5>
										<h6><?php echo $projectfiles[$i]['scale']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	الإعتبارات الشكلية للمخططات</h5>
										<h6><?php echo $projectfiles[$i]['shape']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">3-	الإعتبارات الفنية للمخططات</h5>
										<h6><?php echo $projectfiles[$i]['technical']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">تحريات الجودة من خلال مستوى عمالة المقاول</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	بنود الأعمال المعمارية</h5>
										<h6><?php echo $projectfiles[$i]['architectworks']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	بنود الأعمال الإنشائية</h5>
										<h6><?php echo $projectfiles[$i]['createworks']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">3-	بنود الأعمتال الميكانيكية</h5>
										<h6><?php echo $projectfiles[$i]['mechanicworks']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">4-	بنود الأعمال الكهربية</h5>
										<h6><?php echo $projectfiles[$i]['electricworks']; ?></h6>
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
					<?php if($totalPages > 1) { ?><li><a style="background:rgba(0, 0, 0, 0.5); color:#fff;" href="?page=<?php echo $totalPages; ?><?php echo $url; ?>"><?php language("last"); ?></a></li><?php } ?>
					<?php if($page < $totalPages-1) { ?><li>
						<a style="background:rgba(0, 0, 0, 0.5); color:#fff;" href="?page=<?php echo $page+2; ?><?php echo $url; ?>" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li><?php } ?>
					<?php if($page < $totalPages) { ?><li><a style="background:rgba(0, 0, 0, 0.5); color:#fff;" href="?page=<?php echo $page+1; ?><?php echo $url; ?>"><?php echo $page+1; ?></a></li><?php } ?>
					<?php if($totalPages > 1) { ?><li><a style="background:rgba(0, 0, 0, 0.5); color:#fff;" href="?page=<?php echo $page; ?><?php echo $url; ?>"><?php echo $page; ?></a></li><?php } ?>
					<?php if($page > 1) { ?><li><a style="background:rgba(0, 0, 0, 0.5); color:#fff;" href="?page=<?php echo $page-1; ?><?php echo $url; ?>"><?php echo $page-1; ?></a></li><?php } ?>
					<?php if($page > 3) { ?><li>
						<a style="background:rgba(0, 0, 0, 0.5); color:#fff;" href="?page=<?php echo $page-2; ?><?php echo $url; ?>" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li><?php } ?>
					<?php if($totalPages > 1) { ?><li><a style="background:rgba(0, 0, 0, 0.5); color:#fff;" href="?page=1<?php echo $url; ?>"><?php language("first"); ?></a></li><?php } ?>
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