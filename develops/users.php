<?php
include('libs/database.php');

$where = ' order by name ASC';

$resultsPerPage = 10;
if($resultsPerPage != 0)
{
	if(isset($_GET['page'])) $page = (int) $_GET['page'];
	else $page = 0;
	
	if ($page < 1) $page = 1;
	$startResults = ($page - 1) * $resultsPerPage;
	$noOfrows = getNoOfRowsFromTable('users',$where);
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
	$row = getRowFromTable('*','users',' where id = '.$_GET['id'],'');
}

if(isset($_POST['submit']))
{
	unset($_POST['submit']);
	if($_POST['name'] != ' ' && $_POST['usersname'] != ' ')
	{
		if(isset($_POST['active']) && $_POST['active'] == 'on') $_POST['active'] = 1;
		else $_POST['active'] = 0;
		
		if(isset($_POST['oldid']))
		{
			if($_POST['password'] != " " && $_POST['password'] != "") { $_POST['password'] = hash('sha256', $_POST['password'], FALSE); $password = ' , password = "'.$_POST['password'].'"'; }
			else $password = '';
			
			if(!exist('users',' where (username like "'.$_POST['username'].'" or email like "'.$_POST['email'].'") and id <> '.$_POST['oldid']))
			{
				if(update('users',' set name = "'.$_POST['name'].'" , username = "'.$_POST['username'].'" , email = "'.$_POST['email'].'" , active = '.$_POST['active'].$password,' where id = '.$_POST['oldid'])) { $_SESSION['time'] = time(); $_SESSION['message'] = 'success'; header('Location: admin.php?c=users'); }
				else { $_SESSION['time'] = time(); $_SESSION['message'] = 'somthingwrong'; header('Location: admin.php?c=users'); }
			}
			else { $_SESSION['time'] = time(); $_SESSION['message'] = 'invalidinput'; header('Location: admin.php?c=users'); }
		}
		else
		{
			if(!exist('users',' where username like "'.$_POST['username'].'" or email like "'.$_POST['email'].'"'))
			{
				$_POST['time'] = time();
				$_POST['password'] = hash('sha256', $_POST['password'], FALSE);
				if(insertRow('users',$_POST)) { $_SESSION['time'] = time(); $_SESSION['message'] = 'success'; header('Location: admin.php?c=users'); }
				else { $_SESSION['time'] = time(); $_SESSION['message'] = 'somthingwrong'; header('Location: admin.php?c=users'); }
			}
			else { $_SESSION['time'] = time(); $_SESSION['message'] = 'invalidinput'; header('Location: admin.php?c=users'); }
		}
	}
	else { $_SESSION['time'] = time(); $_SESSION['message'] = 'inputnotcorrect'; header('Location: admin.php?c=users'); }
}
?>