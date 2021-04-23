<?php
if(isset($_POST['id']))
{	
	$id = $_POST['id'];
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$stmt = mysql_query("update projectdetails set active = 1 where id = '$id'");
	if($stmt)
	{
		echo 1;
	}
	else echo 0;
	include("../libs/closedb.php");
   exit;
}
?>