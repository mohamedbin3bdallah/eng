<?php
include('libs/database.php');
include('languages/'.$lang.'.php');

$system = getRowFromTable('*','system','where id = 1','');
$thispage = getRowFromTable('*','pages','where page like "contact.php"','');
$contact = getRowFromTable('*','contact','where id = 1','');

if(isset($_POST['addmessage']))
{
	unset($_POST['addmessage']);

	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false)
	{
		if(sendemail_admin('info@eng.com','Contact Form',$_POST['name'].' with email: '.$_POST['email'].' send you this message: '.$_POST['message']))	header('Location: contact.php?message=m6');
		else header('Location: contact.php?message=m2');
	}
	else header('Location: contact.php?message=m1');
}
?>