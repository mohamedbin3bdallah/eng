<?php
include('libs/database.php');
include('languages/'.$lang.'.php');

//$thispage = getRowFromTable('*','pages','where page like "sitepages.php"','');
$system = getRowFromTable('*','system','where id = 1','');
$sitepage = getRowFromTable('*','sitepages','where active = 1 and id = '.$_GET['id'],'');

$blogimgs = array_diff(scandir('uploads/sitepages/'.$_GET['id']), array('.','..'));
?>