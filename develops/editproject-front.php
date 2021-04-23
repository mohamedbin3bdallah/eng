<?php
include('libs/database.php');
include('languages/'.$lang.'.php');

$system = getRowFromTable('*','system','where id = 1','');
$thispage = getRowFromTable('*','pages','where page like "editproject.php"','');

$project = getRowFromTable('*','projects','where id = '.$_GET['id'],'');

if(isset($_POST['submit']))
{
	unset($_POST['submit']);
	if($_POST['name'] != ' ' && $_POST['value'] != ' ' && $_POST['location'] != ' ' && $_POST['description'] != ' ' && $_POST['receiptdate'] != ' ' && $_POST['deliverydate'] != ' ' && $_POST['contractor'] != ' ' && $_POST['consultant'] != ' ' && $_POST['ownername'] != ' ' && $_POST['ownerlocation'] != ' ' && $_POST['ownercontact'] != ' ')
	{
		$_POST['time'] = time();
		if(update('projects','set name = "'.$_POST['name'].'",value = "'.$_POST['value'].'",location = "'.$_POST['location'].'",description = "'.$_POST['description'].'",receiptdate = "'.$_POST['receiptdate'].'",deliverydate = "'.$_POST['deliverydate'].'",contractor = "'.$_POST['contractor'].'",consultant = "'.$_POST['consultant'].'",ownername = "'.$_POST['ownername'].'",ownerlocation = "'.$_POST['ownerlocation'].'",ownercontact = "'.$_POST['ownercontact'].'",time = "'.time().'",active = "0"','where id = '.$_GET['id']))
		{ $_SESSION['time'] = time(); $_SESSION['message'] = 'success'; header('Location: editproject.php?id='.$_GET['id']); }
		else { $_SESSION['time'] = time(); $_SESSION['message'] = 'somthingwrong'; header('Location: editproject.php?id='.$_GET['id']); }
	}
	else { $_SESSION['time'] = time(); $_SESSION['message'] = 'invalidinput'; header('Location: editproject.php?id='.$_GET['id']); }
}
?>