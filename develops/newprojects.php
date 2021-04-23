<?php
include('libs/database.php');

if(isset($_GET['search']))
{
	$where2 = '';
	unset($_GET['search']);
	if(isset($_GET['projectid']) && $_GET['projectid'] != '') $where2 .= 'and projectdetails.projectid = "'.$_GET['projectid'].'"';
	if($_GET['from'] == '' && $_GET['to'] == '') {}
	elseif($_GET['from'] != '' && $_GET['to'] == '') $where2 .= 'and projectdetails.time >= "'.strtotime($_GET['from']).'"';
	elseif($_GET['from'] == '' && $_GET['to'] != '') $where2 .= 'and projectdetails.time <= "'.strtotime($_GET['to']).'"';
	elseif($_GET['from'] < $_GET['to']) $where2 .= 'and projectdetails.time between "'.strtotime($_GET['from']).'" and "'.strtotime($_GET['to']).'"';
	elseif($_GET['from'] == $_GET['to']) $where2 .= 'and projectdetails.time = "'.strtotime($_GET['to']).'"';
	else {}
	$url = '&projectid='.$_GET['projectid'].'&from='.$_GET['from'].'&to='.$_GET['to'].'&search=بحث';
}
else
{
	$where2 = '';
	$url = '';
}

$select = 'qualitylevel.*,projectmanages.*,projectfiles.*,projects.*,users.username as username';
$where = 'inner join projectmanages on qualitylevel.id= projectmanages.id inner join projectfiles on projectmanages.id= projectfiles.id inner join projects on projectfiles.id= projects.id inner join projectdetails on projects.id= projectdetails.id inner join users on projectdetails.userid = users.id where projectdetails.active = 0 '.$where2.' order by projectdetails.id ASC';

$resultsPerPage = 10;
if($resultsPerPage != 0)
{
	if(isset($_GET['page'])) $page = (int) $_GET['page'];
	else $page = 0;
	
	if ($page < 1) $page = 1;
	$startResults = ($page - 1) * $resultsPerPage;
	$noOfrows = getNoOfRowsFromTable('qualitylevel',$where);
	$totalPages = ceil($noOfrows / $resultsPerPage);
	
	$limit = 'LIMIT '.$startResults.', '.$resultsPerPage;
}
else
{
	$page = 0;
	$totalPages = 0;
	$limit = '';
}?>