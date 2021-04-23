<?php
include('libs/database.php');
include('languages/'.$lang.'.php');

$system = getRowFromTable('*','system','where id = 1','');
$thispage = getRowFromTable('*','pages','where page like "projectfiles.php"','');

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

$select = '*';
$where = 'inner join projectmanages on qualitylevel.id= projectmanages.id inner join projectfiles on projectmanages.id= projectfiles.id inner join projects on projectfiles.id= projects.id inner join projectdetails on projects.id= projectdetails.id where projectdetails.userid = '.$_SESSION['userid'].' '.$where2.' order by projectdetails.id ASC';
$resultsPerPage = 9;
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
}
$projectfiles = getAllDataFromTable($select,'qualitylevel',$where,$limit);
?>