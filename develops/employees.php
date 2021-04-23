<?php	
include('libs/database.php');

$where = 'order by name ASC';
$resultsPerPage = 10;
if($resultsPerPage != 0)
{
	if(isset($_GET['page'])) $page = (int) $_GET['page'];
	else $page = 0;
	
	if ($page < 1) $page = 1;
	$startResults = ($page - 1) * $resultsPerPage;
	$noOfrows = getNoOfRowsFromTable('employees',$where);
	$totalPages = ceil($noOfrows / $resultsPerPage);
	
	$limit = 'LIMIT '.$startResults.', '.$resultsPerPage;
}
else
{
	$page = 0;
	$totalPages = 0;
	$limit = '';
}

if(isset($_GET['id']) && $_GET['id'] != '')
{
	$row = getRowFromTable('*','employees',' where id = '.$_GET['id'],'');
}

if(isset($_POST['submit']))
{
	unset($_POST['submit']);
	if($_POST['name'] != ' ' && $_POST['job'] != ' ')
	{
		if(isset($_POST['oldid']))
		{
			if(!exist('employees',' where name like "'.$_POST['name'].'" and id <> '.$_POST['oldid']))
			{
				if($_FILES['file']['error'] == 0)	{ unlink('uploads/employees/'.$_POST['oldpicture']); $_POST['picture'] = uploadpic('file','employees'); }
				else $_POST['picture'] = $_POST['oldpicture'];

				if(update('employees',' set name = "'.$_POST['name'].'",job = "'.$_POST['job'].'",picture = "'.$_POST['picture'].'",facebook = "'.$_POST['facebook'].'",twitter = "'.$_POST['twitter'].'",linkedin = "'.$_POST['linkedin'].'",googleplus = "'.$_POST['googleplus'].'"',' where id = '.$_POST['oldid'])) { $_SESSION['time'] = time(); $_SESSION['message'] = 'success'; header('Location: admin.php?c=employees'); }
				else { $_SESSION['time'] = time(); $_SESSION['message'] = 'somthingwrong'; header('Location: admin.php?c=employees'); }
			}
			else { $_SESSION['time'] = time(); $_SESSION['message'] = 'invalidinput'; header('Location: admin.php?c=employees'); }
		}
		else
		{
			if(!exist('employees',' where name like "'.$_POST['name'].'"'))
			{
				$_POST['picture'] = uploadpic('file','employees');
				if(insertRow('employees',$_POST)) { $_SESSION['time'] = time(); $_SESSION['message'] = 'success'; header('Location: admin.php?c=employees'); }
				else { $_SESSION['time'] = time(); $_SESSION['message'] = 'somthingwrong'; header('Location: admin.php?c=employees'); }
			}
			else { $_SESSION['time'] = time(); $_SESSION['message'] = 'invalidinput'; header('Location: admin.php?c=employees'); }
		}
	}
	else { $_SESSION['time'] = time(); $_SESSION['message'] = 'inputnotcorrect'; header('Location: admin.php?c=employees'); }
}
?>