<?php
ini_set('display_errors','on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include_once("db/conn.php");

$uid2=$_POST['uid'];
$depart2=$_POST['depart'];
$arrived2=$_POST['arrived'];
$ddate2=$_POST['ddate'];
$trainNO2=$_POST['trainNO'];
$mydate2=date('Y-m-d H:i:s');
$bookingcode2=rand(100000,999999);

try{
    $sql = "insert into train(uid,depart,arrived,ddate,trainNo,otime,bookingcode) 
	VALUES('" .$uid2. "','" .$depart2 ."','" . $arrived2 ."','" . $ddate2."','" . $trainNO2 ."','".$mydate2 . "','".$bookingcode2."')" ;
	echo $sql."<br>\n";
		
	$msg='';

	$result =$connect->exec($sql);
	if($result === false){
		echo "<script>alert('訂票失敗！');</script>";
	}
	else{
		echo "<script>alert('訂票成功！');window.location.href = 'index.php';</script>";
	}
	if($msg != '') echo $msg;

echo $code;
}catch(PDOException $e){
    echo $e->getMessage() . "<br>\n";
}	
?>