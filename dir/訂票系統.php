<?php
ini_set('display_errors','on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include_once("../db/conn.php");

$uid2=$_POST['uid'];
$depart2=$_POST['depart'];
$arrived2=$_POST['arrived'];
$ddate2=$_POST['ddate'];
$trainNO2=$_POST['trainNO'];
$mydate2=date('Y-m-d H:i:s');

try{
    $sql = "insert into train(uid,depart,arrived,ddate,trainNo,otime) 
	VALUES('" .$uid2. "','" .$depart2 ."','" . $arrived2 ."','" . $ddate2."','" . $trainNO2 ."','".$mydate2."')" ;
	echo $sql."<br>\n";
	
	
	$msg='';

	$result =$connect->exec($sql);
	if($result === false){
		$msg="fail insert. <br>\n";
	}
	else{
		$msg="sucesses insert. <br>\n";
		
	}
	if($msg != '') echo $msg;

	$code = '';
	$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

	// 產生六個字元的亂數
	for ($i = 0; $i < 6; $i++) {
		$code .= $characters[rand(0, strlen($characters) - 1)];
	}

echo $code;
}catch(PDOException $e){
    echo $e->getMessage() . "<br>\n";
}	
?>