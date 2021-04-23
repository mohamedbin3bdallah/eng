<?php
session_start();
if(isset($_GET['id']) && abs((int)($_GET['id'])) > 0)
{
	$lang = 'ar';
	$_GET['id'] = abs((int)($_GET['id']));
	include('libs/database.php');
	include('languages/'.$lang.'.php');

	$qualitylevel = getRowFromTable('userid','qualitylevel','where id = '.$_GET['id'],'');

	if(!empty($qualitylevel) && isset($_SESSION['userid']) && $_SESSION['userid'] == $qualitylevel['userid'])
	{
		if(deleterow('qualitylevel','where id = '.$_GET['id']))	header('Location: qualitylevels.php');
		else header('Location: qualitylevels.php');
	}
	else header('Location: qualitylevels.php');
}
else header('Location: qualitylevels.php');
?>