<?php
session_start();
if(isset($_GET['id']) && abs((int)($_GET['id'])) > 0)
{
	$lang = 'ar';
	$_GET['id'] = abs((int)($_GET['id']));
	include('libs/database.php');
	include('languages/'.$lang.'.php');

	$projectmanage = getRowFromTable('userid','projectmanages','where id = '.$_GET['id'],'');

	if(!empty($projectmanage) && isset($_SESSION['userid']) && $_SESSION['userid'] == $projectmanage['userid'])
	{
		if(deleterow('projectmanages','where id = '.$_GET['id']))	header('Location: projectmanages.php');
		else header('Location: projectmanages.php');
	}
	else header('Location: projectmanages.php');
}
else header('Location: projectmanages.php');
?>