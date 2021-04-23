<?php	
include('libs/database.php');

if(isset($_POST['submit']))
{
	unset($_POST['submit']);
	if(!preg_match('/[^\p{Arabic}]+$/u',$_POST['description']) && !preg_match('/[^\p{Arabic}]+$/u',$_POST['websitemap'])  && !preg_match('/[^\p{Arabic}]+$/u',$_POST['videotext']))
	{
		/*if($_FILES['aboutpicture']['error'] == 0)	{ unlink($_POST['oldaboutpicture']); $_POST['aboutpicture'] = 'uploads/'.uploadpic('aboutpicture',''); }
		else $_POST['aboutpicture'] = $_POST['oldaboutpicture'];*/
		
		/*if($_FILES['whowearepicture']['error'] == 0)	{ unlink($_POST['oldwhowearepicture']); $_POST['whowearepicture'] = 'uploads/'.uploadpic('whowearepicture',''); }
		else $_POST['whowearepicture'] = $_POST['oldwhowearepicture'];*/
		
		//if(update('about','set descar = "'.$_POST['descar'].'",descen = "'.$_POST['descen'].'",aboutpicture = "'.$_POST['aboutpicture'].'"',' where id = 1')) { $_SESSION['time'] = time(); $_SESSION['message'] = 'success'; header('Location: admin.php?c=about'); }
		if(update('about','set description = "'.$_POST['description'].'" , websitemap = "'.$_POST['websitemap'].'" , videotitle = "'.$_POST['videotitle'].'" , videotext = "'.$_POST['videotext'].'"',' where id = 1')) { $_SESSION['time'] = time(); $_SESSION['message'] = 'success'; header('Location: admin.php?c=about'); }
		else { $_SESSION['time'] = time(); $_SESSION['message'] = 'somthingwrong'; header('Location: admin.php?c=about'); }
	}
	else { $_SESSION['time'] = time(); $_SESSION['message'] = 'inputnotcorrect'; header('Location: admin.php?c=about'); }
}

$row = getRowFromTable('*','about',' where id = 1','');

?>