<?php
include('libs/database.php');
include('languages/'.$lang.'.php');

$system = getRowFromTable('*','system','where id = 1','');
$single = getRowFromTable('*','works','where active = 1 and id = '.$_GET['id'],'');
?>