<?php
ini_set('display_errors','on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include_once("db/conn.php");

$name2=$_POST['name'];
$email2=$_POST['email'];
$text2=$_POST['text'];
$phone2=$_POST['phone'];

try{
    $sql = "insert into contact(name,email,text,phone) 
	VALUES('" .$name2. "','" .$email2 ."','" . $text2 ."','" . $phone2."')" ;
	echo $sql."<br>\n";
		
	$msg='';

	$result =$connect->exec($sql);
	if($result === false){
		echo "<script>alert('接收失敗！');</script>";
	}
	else{
		echo "<script>alert('已收到你的回饋喔！');window.location.href = 'index.php';</script>";
	}
	if($msg != '') echo $msg;

echo $code;
}catch(PDOException $e){
    echo $e->getMessage() . "<br>\n";
}	
?>