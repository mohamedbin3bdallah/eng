<?php
include('libs/database.php');
include('classes/ResizeImage.php');

$select = '*';
$where = 'order by sitepages.title ASC';

$resultsPerPage = 10;
if($resultsPerPage != 0)
{
	if(isset($_GET['page'])) $page = (int) $_GET['page'];
	else $page = 0;
	
	if ($page < 1) $page = 1;
	$startResults = ($page - 1) * $resultsPerPage;
	$noOfrows = getNoOfRowsFromTable('sitepages',$where);
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
	$row = getRowFromTable('*','sitepages','where id = '.$_GET['id'],'');
}

if(isset($_POST['submit']))
{
	unset($_POST['submit']);
	if($_POST['title'] != '')
	{
		if(isset($_POST['active']) && $_POST['active'] == 'on') $_POST['active'] = 1;
		else $_POST['active'] = 0;
		if(isset($_POST['oldid']))
		{
			if(update('sitepages',' set active = '.$_POST['active'].' ,title = "'.$_POST['title'].'" , description = "'.$_POST['description'].'"',' where id = '.$_POST['oldid']))
			{
				if($_FILES['file']['error'][0] == 0) uploadimgs('sitepages/'.$_POST['oldid'],455,455,'exact',array("image/jpg","image/jpeg","image/gif","image/png"));
				$_SESSION['time'] = time(); $_SESSION['message'] = 'success'; header('Location: admin.php?c=sitepages');
			}
			else { $_SESSION['time'] = time(); $_SESSION['message'] = 'somthingwrong'; header('Location: admin.php?c=sitepages'); }
		}
		else
		{
			//$_POST['description'] = htmlspecialchars($_POST['description']);
			$insertid = insertRow('sitepages',$_POST);
			if($insertid)
			{
				if($_FILES['file']['error'][0] == 0) uploadimgs('sitepages/'.$insertid,455,455,'exact',array("image/jpg","image/jpeg","image/gif","image/png"));
				$_SESSION['time'] = time(); $_SESSION['message'] = 'success'; header('Location: admin.php?c=sitepages');
			}
			else { $_SESSION['time'] = time(); $_SESSION['message'] = 'somthingwrong'; header('Location: admin.php?c=sitepages'); }
		}
	}
	else { $_SESSION['time'] = time(); $_SESSION['message'] = 'inputnotcorrect'; header('Location: admin.php?c=sitepages'); }
}
?>