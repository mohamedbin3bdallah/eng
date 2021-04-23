<?php
include('libs/database.php');

if(isset($_POST['submit']))
{
	unset($_POST['submit']);
	if($_POST['website'] != '')
	{
		$set = 'set website = "'.$_POST['website'].'"';
		
		if($_FILES['file']['error'] == 0) { $_POST['logo'] = uploadimgsreturn(''); if($_POST['logo'] != 0) unlink('uploads/'.$_POST['oldlogo']); else $_POST['logo'] = $_POST['oldlogo']; }
		else $_POST['logo'] = $_POST['oldlogo'];
		$set .= ' , logo = "'.$_POST['logo'].'"';
		
		if(update('system',$set,' where id = 1')) { $_SESSION['time'] = time(); $_SESSION['message'] = 'success'; header('Location: admin.php?c=system'); }
		else { $_SESSION['time'] = time(); $_SESSION['message'] = 'somthingwrong'; header('Location: admin.php?c=system'); }
	}
	else { $_SESSION['time'] = time(); $_SESSION['message'] = 'inputnotcorrect'; header('Location: admin.php?c=system'); }
}

$row = getRowFromTable('*','system',' where id = 1','');

?>