<?php
include('libs/database.php');
include('languages/'.$lang.'.php');

$system = getRowFromTable('*','system','where id = 1','');
$thispage = getRowFromTable('*','pages','where page like "addproject.php"','');

if(isset($_POST['submit']))
{
	unset($_POST['submit']);
	if($_POST['name'] != ' ' && $_POST['value'] != ' ' && $_POST['location'] != ' ' && $_POST['description'] != ' ' && $_POST['receiptdate'] != ' ' && $_POST['deliverydate'] != ' ' && $_POST['contractor'] != ' ' && $_POST['consultant'] != ' ' && $_POST['ownername'] != ' ' && $_POST['ownerlocation'] != ' ' && $_POST['ownercontact'] != ' ')
	{
		$_POST['userid'] = $_SESSION['userid'];
		$_POST['time'] = time();
		if(insertRow('projects',$_POST)) { $_SESSION['time'] = time(); $_SESSION['message'] = 'success'; header('Location: addproject.php'); }
		else { $_SESSION['time'] = time(); $_SESSION['message'] = 'somthingwrong'; header('Location: addproject.php'); }
	}
	else { $_SESSION['time'] = time(); $_SESSION['message'] = 'invalidinput'; header('Location: addproject.php'); }
}
?>