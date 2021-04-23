<?php
include('libs/database.php');
include('languages/'.$lang.'.php');

$system = getRowFromTable('*','system','where id = 1','');
$thispage = getRowFromTable('*','pages','where page like "infocenter.php"','');
$about = getRowFromTable('*','about','where id = 1','');
?>