<?php

function exist($table,$where)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = mysql_query("select count(*) as count from {$table} $where");
	$row = mysql_fetch_array($result);
	include("libs/closedb.php");
	if($row['count'] == 0) return 0;
	else return 1;
}

function getNoOfRowsFromTable($table,$where)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$row['count'] = 0;
	$result = mysql_query("select count(*) as count from {$table} $where");
	if(!empty($result)) $row = mysql_fetch_array($result);
	include("libs/closedb.php");
	return $row['count'];
}

function getRowFromTable($select,$table,$where,$limit)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = mysql_query("select $select from {$table} $where $limit");
	$row = mysql_fetch_array($result);
	include("libs/closedb.php");
	return $row;
}

function getAllDataFromTable($select,$table,$where,$limit)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = mysql_query("select $select from {$table} $where $limit");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = mysql_fetch_array($result); $i++)
		{
			$allrows[$i] = $row;
		}
	}
	include("libs/closedb.php");
	return $allrows;
}

function getAllDataFromTableMENU()
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = mysql_query("select sitepages.id as id,sitepages.title as title,categories.id as categoryid,categories.title as category from sitepages inner join categories on sitepages.categoryid = categories.id where sitepages.active = 1 and sitepages.categoryid <> 0 order by sitepages.categoryid,sitepages.time DESC");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = mysql_fetch_array($result); $i++)
		{
			$allrows[$row['categoryid']]['category'] = $row['category'];
			$allrows[$row['categoryid']]['sitepages']['id'][] = $row['id'];
			$allrows[$row['categoryid']]['sitepages']['title'][] = $row['title'];
		}
	}
	include("libs/closedb.php");
	return $allrows;
}

function insertRow($table,$row)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$fquery = "insert into {$table} (";
	$lquery = " values (";
	foreach ($row as $key => $value)
	{
		$fquery .= $key;
		$lquery .= "'".$value."'";
		$data  = array_keys($row);
		$lastkey = array_pop($data);
		if($key != $lastkey) 
		{	
			$fquery .= ",";
			$lquery .= ",";
		}	
	}
	$fquery .= ")";
	$lquery .= ")";
	$query = $fquery.$lquery;
	$result = mysql_query($query);
	if($result) return mysql_insert_id();
	else return 0;
    /*include("libs/closedb.php");
	unset($data,$lastkey,$row,$fquery,$lquery,$query,$result);*/
}

function insertRow_F($table,$row)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$fquery = "insert into {$table} (";
	$lquery = " values (";
	foreach ($row as $key => $value)
	{
		$fquery .= $key;
		$lquery .= "'".$value."'";
		$data  = array_keys($row);
		$lastkey = array_pop($data);
		if($key != $lastkey) 
		{	
			$fquery .= ",";
			$lquery .= ",";
		}	
	}
	$fquery .= ")";
	$lquery .= ")";
	$query = $fquery.$lquery;
	$result = mysql_query($query);
	if($result) return 1;
	else return 0;
    /*include("libs/closedb.php");
	unset($data,$lastkey,$row,$fquery,$lquery,$query,$result);*/
}

function update($table,$set,$where)
{
	include("libs/config.php");
	include("libs/opendb.php");	
	$stmt = mysql_query("update {$table} $set $where");
	if($stmt) return 1;
	else return 0;
	//include("libs/closedb.php");
}

function deleterow($table,$where)
{
	include("libs/config.php");
	include("libs/opendb.php");	
	$stmt = mysql_query("delete from {$table} $where");
	if($stmt) return 1;
	else return 0;
	//include("libs/closedb.php");
}

function uploadimgs($folder,$width,$height,$resize,$types)
{
	$image_director = "uploads/".$folder;
	if(!is_dir($image_director)) $create_image_director = mkdir($image_director);	
	for($i=0;$i<count($_FILES['file']['name']);$i++)
	{
		if($_FILES['file']['size'][$i] < 1024000)
		{
			$file_extn[$i] = pathinfo($_FILES['file']['name'][$i], PATHINFO_EXTENSION);
			if(in_array($_FILES["file"]["type"][$i],$types))
			{
				$_FILES["file"]["name"][$i] = rand().'.'.$file_extn[$i];
				move_uploaded_file($_FILES["file"]["tmp_name"][$i], $image_director.'/'.$_FILES["file"]["name"][$i]);
				$resizeObj = new Resize($image_director.'/'.$_FILES["file"]["name"][$i]);
				$resizeObj -> resizeImage($width, $height, $resize);
				$resizeObj -> saveImage($image_director.'/'.$_FILES["file"]["name"][$i], 100);
			}
		}
	}
}

function uploadimgsreturn($folder)
{
	$image_director = "uploads/".$folder;
	if(!is_dir($image_director)) $create_image_director = mkdir($image_director);	
	if($_FILES['file']['size'] < 1024000)
	{
		$file_extn = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
		if($_FILES["file"]["type"] == "image/jpg" || $_FILES["file"]["type"] == "image/jpeg" || $_FILES["file"]["type"] == "image/png")
		{
			$_FILES["file"]["name"] = rand().'.'.$file_extn;
			move_uploaded_file($_FILES["file"]["tmp_name"], $image_director.'/'.$_FILES["file"]["name"]);				
			return $_FILES["file"]["name"];
		}
		else return 0;
	}
	else return 0;
}

function uploadpic($file,$folder)
{
	$image_director = "uploads/".$folder;
	if(!is_dir($image_director)) $create_image_director = mkdir($image_director);	
	if($_FILES[$file]['size'] < 1024000)
	{
		$file_extn = pathinfo($_FILES[$file]['name'], PATHINFO_EXTENSION);
		if($_FILES[$file]["type"] == "image/jpg" || $_FILES[$file]["type"] == "image/jpeg" || $_FILES[$file]["type"] == "image/png")
		{
			$_FILES[$file]["name"] = rand().'.'.$file_extn;
			move_uploaded_file($_FILES[$file]["tmp_name"], $image_director.'/'.$_FILES[$file]["name"]);				
			return $_FILES[$file]["name"];
		}
		else return 0;
	}
	else return 0;
}

function delTree($dir)
{
	$files = array_diff(scandir($dir), array('.','..')); 
    foreach ($files as $file) { 
    (is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file"); 
    }
    //rmdir($dir);
}

function sendemail($person)
{
	require_once('../PHPMailer/class.phpmailer.php');
	require_once('../PHPMailer/class.smtp.php');
	require_once('../PHPMailer/PHPMailerAutoload.php');
	$mail             = new PHPMailer(); // defaults to using php "mail()"
	$mail->IsSMTP(); // telling the class to use SMTP
	//$mail->Host       = "smtp.secureserver.net";
	$mail->Host       = "localhost";
	//	$mail->Host       = "smtpout.secureserver.net";      // sets GMAIL as the SMTP server
	//	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	//	$mail->SMTPSecure = 'ssl';
	//	$mail->Port = 465;
	//$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
	//$mail->Username   = "";  // GMAIL username
	//$mail->Password   = "";					
	//$mail->AddReplyTo("name@yourdomain.com","First Last");
	$address = "info@lawoffice.com";
	$mail->SetFrom($address, 'INFO');
	$mail->AddAddress($person['email']);
	$mail->Subject    = 'Activation';
	//$mail->AltBody    = "You can active your account on : "; // optional, comment out and test
	$mail->Body    = 'Activation link: http://www.arabicentre.com/active.php?email='.$person['email'].'&code='.$person['code'];
	if($mail->Send()) return 1;
	else return 0;
}


function sendemail_admin($email,$subject,$message)
{
	require_once('PHPMailer/class.phpmailer.php');
	require_once('PHPMailer/class.smtp.php');
	require_once('PHPMailer/PHPMailerAutoload.php');
	$mail             = new PHPMailer(); // defaults to using php "mail()"
	$mail->IsSMTP(); // telling the class to use SMTP
	//$mail->Host       = "smtp.secureserver.net";
	$mail->Host       = "localhost";
	//	$mail->Host       = "smtpout.secureserver.net";      // sets GMAIL as the SMTP server
	//	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	//	$mail->SMTPSecure = 'ssl';
	//	$mail->Port = 465;
	//$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
	//$mail->Username   = "";  // GMAIL username
	//$mail->Password   = "";					
	//$mail->AddReplyTo("name@yourdomain.com","First Last");
	$address = "info@lawoffice.com";
	$mail->SetFrom($address, 'INFO');
	$mail->AddAddress($email);
	$mail->Subject    = $subject;
	//$mail->AltBody    = "You can active your account on : "; // optional, comment out and test
	$mail->Body    = $message;
	if($mail->Send()) return 1;
	else return 0;
}

?>