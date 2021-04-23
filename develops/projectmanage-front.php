<?php
include('libs/database.php');
include('languages/'.$lang.'.php');

$system = getRowFromTable('*','system','where id = 1','');
$thispage = getRowFromTable('*','pages','where page like "projectmanage.php"','');

if(isset($_POST['submit']))
{
	unset($_POST['submit']);
	$_POST['userid'] = $_SESSION['userid'];
	if(insertRow('projectmanages',$_POST)) header('Location: projectmanage.php?message=m1');
	else header('Location: projectmanage.php?message=m2');
}
?>