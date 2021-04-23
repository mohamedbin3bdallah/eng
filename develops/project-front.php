<?php
include('libs/database.php');
include('languages/'.$lang.'.php');

$system = getRowFromTable('*','system','where id = 1','');
$project = getRowFromTable('*','projects','where id = '.$_GET['id'],'');
?>