	<style>
		body
		{
			font-family: Comic Sans, Comic Sans MS, cursive;
		}
		
		.sidebar-link
		{
			color: green;
			font-size: 111%;			
		}
		
		.sidebar-element
		{
			width: 125px;
		}
		
		.navbar-default
		{
			margin-top: 25px;
			background-image: #000;
		}
		
		.nav>li>a:hover,.nav>li>a:focus,.nav>li>a:active
		{
			color: brown;
			background-color: #ffe680;
		}
		
		.sidebar-active
		{
			color: brown;
			background-color: #ffe680;
		}
	</style>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav sidebar-nav sidebar-menu">
					<li class="sidebar-element"><a class="sidebar-link <?php if($_GET['c'] == 'slides') echo 'sidebar-active'; ?>" href="admin.php?c=slides"><?php language('slides'); ?></a></li>
					<li class="sidebar-element"><a class="sidebar-link <?php if($_GET['c'] == 'system') echo 'sidebar-active'; ?>" href="admin.php?c=system"><?php language('system'); ?></a></li>
					<li class="sidebar-element"><a class="sidebar-link <?php if($_GET['c'] == 'pages') echo 'sidebar-active'; ?>" href="admin.php?c=pages"><?php language('pages'); ?></a></li>
					<li class="sidebar-element"><a class="sidebar-link <?php if($_GET['c'] == 'about') echo 'sidebar-active'; ?>" href="admin.php?c=about"><?php language('about'); ?></a></li>
					<li class="sidebar-element"><a class="sidebar-link <?php if($_GET['c'] == 'newprojects') echo 'sidebar-active'; ?>" href="admin.php?c=newprojects"><?php language('newprojects'); ?></a></li>
					<li class="sidebar-element"><a class="sidebar-link <?php if($_GET['c'] == 'activatedprojects') echo 'sidebar-active'; ?>" href="admin.php?c=activatedprojects"><?php language('activatedprojects'); ?></a></li>
					<!--<li class="sidebar-element"><a class="sidebar-link <?php if($_GET['c'] == 'qualitylevels') echo 'sidebar-active'; ?>" href="admin.php?c=qualitylevels"><?php language('qualitylevels'); ?></a></li>
					<li class="sidebar-element"><a class="sidebar-link <?php if($_GET['c'] == 'projectfiles') echo 'sidebar-active'; ?>" href="admin.php?c=projectfiles"><?php language('projectfiles'); ?></a></li>-->
					<li class="sidebar-element"><a class="sidebar-link <?php if($_GET['c'] == 'sitepages') echo 'sidebar-active'; ?>" href="admin.php?c=sitepages"><?php language('sitepages'); ?></a></li>
					<li class="sidebar-element"><a class="sidebar-link <?php if($_GET['c'] == 'categories') echo 'sidebar-active'; ?>" href="admin.php?c=categories"><?php language('categories'); ?></a></li>
					<li class="sidebar-element"><a class="sidebar-link <?php if($_GET['c'] == 'works') echo 'sidebar-active'; ?>" href="admin.php?c=works"><?php language('works'); ?></a></li>
					<li class="sidebar-element"><a class="sidebar-link <?php if($_GET['c'] == 'employees') echo 'sidebar-active'; ?>" href="admin.php?c=employees"><?php language('employees'); ?></a></li>
					<li class="sidebar-element"><a class="sidebar-link <?php if($_GET['c'] == 'users') echo 'sidebar-active'; ?>" href="admin.php?c=users"><?php language('users'); ?></a></li>
					<li class="sidebar-element"><a class="sidebar-link <?php if($_GET['c'] == 'contact') echo 'sidebar-active'; ?>" href="admin.php?c=contact"><?php language('contact'); ?></a></li>
					<li class="sidebar-element"><a class="sidebar-link <?php if($_GET['c'] == 'account') echo 'sidebar-active'; ?>" href="admin.php?c=account"><?php language('account'); ?></a></li>
					<li class="sidebar-element"><a class="sidebar-link" href="adminlogout.php"><?php language('logout'); ?></a></li>
				</ul>
			</div>
		</div>
	</nav>