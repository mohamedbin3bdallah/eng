<?php	
include('libs/database.php');
include('classes/ResizeImage.php');

$categories = getAllDataFromTable('*','categories','','');

$where = 'order by title ASC';
$resultsPerPage = 10;
if($resultsPerPage != 0)
{
	if(isset($_GET['page'])) $page = (int) $_GET['page'];
	else $page = 0;
	
	if ($page < 1) $page = 1;
	$startResults = ($page - 1) * $resultsPerPage;
	$noOfrows = getNoOfRowsFromTable('works',$where);
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
	$row = getRowFromTable('*','works',' where id = '.$_GET['id'],'');
}

if(isset($_POST['submit']))
{
	unset($_POST['submit']);
	if($_POST['title'] != ' ')
	{
		if(isset($_POST['active']) && $_POST['active'] == 'on') $_POST['active'] = 1;
		else $_POST['active'] = 0;
		
		if(isset($_POST['oldid']))
		{
			if(update('works',' set categoryid = '.$_POST['categoryid'].',title = "'.$_POST['title'].'",active = '.$_POST['active'],' where id = '.$_POST['oldid']))
			{
				//if($_FILES['file']['error'] == 0)	{ unlink('uploads/works/'.$_POST['oldpicture']); $_POST['picture'] = uploadpic('file','works'); }
				if($_FILES['file']['error'][0] == 0)	uploadimgs('works/'.$_POST['oldid'],455,455,'exact',array("image/jpg","image/jpeg","image/gif","image/png"));
				{ $_SESSION['time'] = time(); $_SESSION['message'] = 'success'; header('Location: admin.php?c=works'); }
			}
			else { $_SESSION['time'] = time(); $_SESSION['message'] = 'somthingwrong'; header('Location: admin.php?c=works'); }
		}
		else
		{
			$insertid = insertRow('works',$_POST);
			if($insertid)
			{
				if($_FILES['file']['error'][0] == 0) uploadimgs('works/'.$insertid,455,455,'exact',array("image/jpg","image/jpeg","image/gif","image/png"));
				$_SESSION['time'] = time(); $_SESSION['message'] = 'success'; header('Location: admin.php?c=works');
			}
			else { $_SESSION['time'] = time(); $_SESSION['message'] = 'somthingwrong'; header('Location: admin.php?c=works'); }
		}
	}
	else { $_SESSION['time'] = time(); $_SESSION['message'] = 'inputnotcorrect'; header('Location: admin.php?c=works'); }
}
?>