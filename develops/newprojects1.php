<?php
include('libs/database.php');

$select = 'projects.id as id,projects.name as name,projects.value as value,projects.location as location,projects.description as description,projects.receiptdate as receiptdate,projects.deliverydate as deliverydate,projects.contractor as contractor,projects.consultant as consultant,projects.ownername as ownername,projects.ownerlocation as ownerlocation,projects.time as time,users.username as username';
$where = 'inner join users on projects.userid = users.id where projects.active = 0 order by projects.time DESC , projects.name ASC';

$resultsPerPage = 10;
if($resultsPerPage != 0)
{
	if(isset($_GET['page'])) $page = (int) $_GET['page'];
	else $page = 0;
	
	if ($page < 1) $page = 1;
	$startResults = ($page - 1) * $resultsPerPage;
	$noOfrows = getNoOfRowsFromTable('projects',$where);
	$totalPages = ceil($noOfrows / $resultsPerPage);
	
	$limit = 'LIMIT '.$startResults.', '.$resultsPerPage;
}
else
{
	$page = 0;
	$totalPages = 0;
	$limit = '';
}

?>