<?php
session_start();
if(isset($_GET['id']) && abs((int)($_GET['id'])) > 0)
{
	$lang = 'ar';
	$_GET['id'] = abs((int)($_GET['id']));
	include('libs/database.php');
	include('languages/'.$lang.'.php');

	$project = getRowFromTable('userid','projects','where id = '.$_GET['id'],'');

	if(!empty($project) && isset($_SESSION['userid']) && $_SESSION['userid'] == $project['userid'])
	{
		if(deleterow('projects','where id = '.$_GET['id']))	header('Location: projects.php');
		else header('Location: projects.php');
	}
	else header('Location: projects.php');
}
else header('Location: projects.php');
?>