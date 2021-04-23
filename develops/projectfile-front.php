<?php
include('libs/database.php');
include('languages/'.$lang.'.php');

$system = getRowFromTable('*','system','where id = 1','');
$thispage = getRowFromTable('*','pages','where page like "projectfile.php"','');

if(isset($_POST['submit']))
{
	unset($_POST['submit']);
	
	$maxserial = getRowFromTable('max(serial) as serial','projectdetails','','');
	if(!isset($maxserial['serial']) || $maxserial['serial'] == '999') $maxserial['serial'] = '000';
	$serial = str_repeat('0', 3-strlen(($maxserial['serial'])+1)).(($maxserial['serial'])+1);
	$kinds = array('مباني'=>'B', 'طرق'=>'R', 'كهرباء'=>'E', 'صحي'=>'S', 'بنية أساسية'=>'I');
	
	if(isset($_POST['projectmanages']['orders1']) && !empty($_POST['projectmanages']['orders1'])) $_POST['projectmanages']['orders1'] = implode(' , ',$_POST['projectmanages']['orders1']);
	if(isset($_POST['projectmanages']['neworders1']) && !empty($_POST['projectmanages']['neworders1'])) $_POST['projectmanages']['neworders1'] = implode(' , ',$_POST['projectmanages']['neworders1']);
	if(isset($_POST['projectmanages']['orders2']) && !empty($_POST['projectmanages']['orders2'])) $_POST['projectmanages']['orders2'] = implode(' , ',$_POST['projectmanages']['orders2']);
	if(isset($_POST['projectmanages']['neworders2']) && !empty($_POST['projectmanages']['neworders2'])) $_POST['projectmanages']['neworders2'] = implode(' , ',$_POST['projectmanages']['neworders2']);
	if(isset($_POST['projectmanages']['contractorchall1']) && !empty($_POST['projectmanages']['contractorchall1'])) $_POST['projectmanages']['contractorchall1'] = implode(' , ',$_POST['projectmanages']['contractorchall1']);
	if(isset($_POST['projectmanages']['expertupdate']) && !empty($_POST['projectmanages']['expertupdate'])) $_POST['projectmanages']['expertupdate'] = implode(' , ',$_POST['projectmanages']['expertupdate']);
	if(isset($_POST['projectmanages']['financialproblem']) && !empty($_POST['projectmanages']['financialproblem'])) $_POST['projectmanages']['financialproblem'] = implode(' , ',$_POST['projectmanages']['financialproblem']);
	if(isset($_POST['projectmanages']['executechall']) && !empty($_POST['projectmanages']['executechall'])) $_POST['projectmanages']['executechall'] = implode(' , ',$_POST['projectmanages']['executechall']);
	if(isset($_POST['projectmanages']['contractorchall2']) && !empty($_POST['projectmanages']['contractorchall2'])) $_POST['projectmanages']['contractorchall2'] = implode(' , ',$_POST['projectmanages']['contractorchall2']);
	if(isset($_POST['projectmanages']['orderupdate']) && !empty($_POST['projectmanages']['orderupdate'])) $_POST['projectmanages']['orderupdate'] = implode(' , ',$_POST['projectmanages']['orderupdate']);
	if(isset($_POST['projectmanages']['contractorchall3']) && !empty($_POST['projectmanages']['contractorchall3'])) $_POST['projectmanages']['contractorchall3'] = implode(' , ',$_POST['projectmanages']['contractorchall3']);
	if(isset($_POST['projectmanages']['multiexpertupdate']) && !empty($_POST['projectmanages']['multiexpertupdate'])) $_POST['projectmanages']['multiexpertupdate'] = implode(' , ',$_POST['projectmanages']['multiexpertupdate']);
	if(isset($_POST['projectmanages']['rejectplans']) && !empty($_POST['projectmanages']['rejectplans'])) $_POST['projectmanages']['rejectplans'] = implode(' , ',$_POST['projectmanages']['rejectplans']);
	if(isset($_POST['projectmanages']['resiveorders']) && !empty($_POST['projectmanages']['resiveorders'])) $_POST['projectmanages']['resiveorders'] = implode(' , ',$_POST['projectmanages']['resiveorders']);
	if(isset($_POST['projectmanages']['fullcopy']) && !empty($_POST['projectmanages']['fullcopy'])) $_POST['projectmanages']['fullcopy'] = implode(' , ',$_POST['projectmanages']['fullcopy']);
	if(isset($_POST['projectmanages']['finalresult']) && !empty($_POST['projectmanages']['finalresult'])) $_POST['projectmanages']['finalresult'] = implode(' , ',$_POST['projectmanages']['finalresult']);
	if(isset($_POST['projectmanages']['sitesafety']) && !empty($_POST['projectmanages']['sitesafety'])) $_POST['projectmanages']['sitesafety'] = implode(' , ',$_POST['projectmanages']['sitesafety']);
	if(isset($_POST['projectmanages']['worksafety']) && !empty($_POST['projectmanages']['worksafety'])) $_POST['projectmanages']['worksafety'] = implode(' , ',$_POST['projectmanages']['worksafety']);
	if(isset($_POST['projectmanages']['storeadd']) && !empty($_POST['projectmanages']['storeadd'])) $_POST['projectmanages']['storeadd'] = implode(' , ',$_POST['projectmanages']['storeadd']);
	if(isset($_POST['projectmanages']['safetyadd']) && !empty($_POST['projectmanages']['safetyadd'])) $_POST['projectmanages']['safetyadd'] = implode(' , ',$_POST['projectmanages']['safetyadd']);
	if(isset($_POST['projectmanages']['generalmode']) && !empty($_POST['projectmanages']['generalmode'])) $_POST['projectmanages']['generalmode'] = implode(' , ',$_POST['projectmanages']['generalmode']);
	
	$_POST['projects']['id'] = insertRow('projectdetails',array('userid'=>$_SESSION['userid'],'serial'=>$serial,'projectid'=>$kinds[$_POST['projects']['kind']].$serial.date('m').date('y'),'time'=>time()));
	$_POST['projectfiles']['id'] = $_POST['projects']['id'];
	$_POST['projectmanages']['id'] = $_POST['projects']['id'];
	$_POST['qualitylevels']['id'] = $_POST['projects']['id'];
	
	if(insertRow_F('projects',$_POST['projects']) && insertRow_F('projectfiles',$_POST['projectfiles']) && insertRow_F('projectmanages',$_POST['projectmanages']) && insertRow_F('qualitylevel',$_POST['qualitylevels'])) header('Location: projectfile.php?message=m1');
	else header('Location: projectfile.php?message=m2');
}
?>