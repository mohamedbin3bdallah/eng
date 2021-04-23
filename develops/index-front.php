<?php
include('libs/database.php');
include('languages/'.$lang.'.php');

$system = getRowFromTable('*','system','where id = 1','');
$thispage = getRowFromTable('*','pages','where page like "index.php"','');
$works = getAllDataFromTable('*','works','where active = 1','limit 6');
$employees = getAllDataFromTable('*','employees','','');
$about = getRowFromTable('*','about','where id = 1','');
$contact = getRowFromTable('*','contact','where id = 1','');

if(isset($_POST['addmail']))
{
	unset($_POST['addmail']);

	if(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) === false)
	{
		if(exist('mails','where mail like "'.$_POST['mail'].'"')) header('Location: index.php?submessage=mm4');
		else
		{
			if(insertRow('mails',$_POST))	header('Location: index.php?submessage=mm6');
			else header('Location: index.php?submessage=mm2');
		}
	}
	else header('Location: index.php?submessage=mm1');
}
elseif(isset($_POST['addmessage']))
{
	unset($_POST['addmessage']);

	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false)
	{
		if(sendemail_admin('info@eng.com','Contact Form',$_POST['name'].' with email: '.$_POST['email'].' send you this message: '.$_POST['message']))	header('Location: index.php?message=m6');
		else header('Location: index.php?message=m2');
	}
	else header('Location: index.php?message=m1');
}
?>