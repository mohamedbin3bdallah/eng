<?php
include('libs/database.php');
include('languages/'.$lang.'.php');

$system = getRowFromTable('*','system','where id = 1','');
$thispage = getRowFromTable('*','pages','where page like "qualitylevel.php"','');

if(isset($_POST['submit']))
{
	unset($_POST['submit']);
	//$_POST['qualitylevels']['userid'] = $_SESSION['userid'];
	?><pre><?php //print_r($_POST['qualitylevels']); ?></pre><?php
	if(insertRow('qualitylevel',$_POST['qualitylevels'])) header('Location: qualitylevel.php?message=m1');
	else header('Location: qualitylevel.php?message=m2');
}
?>