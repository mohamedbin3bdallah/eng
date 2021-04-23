<?php
session_start();
if(isset($_GET['id']) && abs((int)($_GET['id'])) > 0)
{
	$lang = 'ar';
	$_GET['id'] = abs((int)($_GET['id']));
	include('libs/database.php');
	include('languages/'.$lang.'.php');

	$projectfile = getRowFromTable('userid','projectdetails','where id = '.$_GET['id'],'');

	if(!empty($projectfile) && isset($_SESSION['userid']) && $_SESSION['userid'] == $projectfile['userid'])
	{
		if(deleterow('projects','where id = '.$_GET['id']) && deleterow('qualitylevel','where id = '.$_GET['id']) && deleterow('projectmanages','where id = '.$_GET['id']) && deleterow('projectfiles','where id = '.$_GET['id']) && deleterow('projectdetails','where id = '.$_GET['id']))	header('Location: projectfiles.php');
		else header('Location: projectfiles.php');
	}
	else header('Location: projectfiles.php');
}
else header('Location: projectfiles.php');
?>