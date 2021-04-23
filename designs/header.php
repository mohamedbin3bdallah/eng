<link href="css/sidebar.css" rel="stylesheet" type="text/css" media="all" />
<?php $sitepages = getAllDataFromTable('id,title','sitepages','where active = 1',''); ?>
<nav class="navbar navbar-default navbar-fixed-top" style="padding-bottom:39px;">
    <div class="">
	<?php if(!empty($sitepages)) { ?>
	<div class="col-md-2 col-xs-4" style="margin-top:15px;">
		<div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<?php for($sp=0;$sp<count($sitepages);$sp++) { ?>
				<a href="sitepages.php?id=<?php echo $sitepages[$sp]['id']; ?>"><?php echo $sitepages[$sp]['title']; ?></a>
			<?php } ?>
		</div>
		<span onclick="openNav()" style="color:#fff; top:5px;">الأدوات المساعدة</span>
	</div>
	<?php } ?>
	<div class="col-md-8 col-xs-5">
        <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<?php if(isset($_SESSION['userid'])) { ?>
					<li><a href="logout.php">الخروج</a></li>
				<?php } else { ?>
					<li><a href="login.php">دخول المستخدم</a></li>
				<?php } ?>
				<li><a href="infocenter.php">مركز المعلومات</a></li>
				<!--<li><a href="#skill">اعمالنا</a></li>-->
				<li><a href="index.php#portfolio">الأعمال</a></li>
				<?php if(isset($_SESSION['userid'])) { ?>
					<li><a href="projectfiles.php">أرشيف المشاريع</a></li>
					<li><a href="projectfiles.php">تقارير الجودة</a></li>
				<?php } ?>
				<li><a href="index.php#team">فريق العمل الإستشاري</a></li>
				<li><a href="contact.php">اتصل بنا</a></li>
				<li><a href="about.php">من نحن</a></li>
				<?php if(isset($_SESSION['userid'])) { ?>
					<li><a href="projectfile.php">تسجيل احوال مشروع</a></li>
				<?php } ?>
					<!--<li><a href="register.php">التسجيل</a></li>-->
				<li><a href="index.php#slider">الرئيسية</a></li>
          </ul>
        </div><!--/.nav-collapse -->
	</div>
	<div class="col-md-1 col-xs-3">
		<a class="navbar-brand" href="index.php"><img class="img-responsive" style="max-width:95px;" src="uploads/<?php echo $system['logo']; ?>"></a>
	</div>
    </div>
</nav>

<script src="js/sidebar.js"></script>