<?php
	ini_set('display_errors','on');
	error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
	include_once("01_conn.php");
	$uid2=$_POST['uid'];
	$depart2=$_POST['depart'];
	$arrived2=$_POST['arrived'];
	$ddate2=$_POST['ddate'];
	$trainNo2=$_POST['trainNo'];
	$mydate2=date('Y-m-d H:i:s');
	$ticketCode = rand(100000, 999999);
	/*INSERT INTO 'train' ('tid',
	'uid', 
	'depart', 
	'arrived', 
	'ddate', 
	'trainNo', 
	'oTime')VALUES(NULL, 'a123456789', '1', '2', '2023-05-11', '123', '2023-05-11 10:30:53');*/
	try{
		$sql = "insert into train(uid,depart,arrived,ddate,trainNo,oTime,ticketCode) 
		values('" .$uid2. "','" .
		$depart2 . "','" . 
		$arrived2 . "','" .
		$ddate2 . "','" .
		$trainNo2 . "','".
		$mydate2 . "','".
		$ticketCode."')";
		echo $sql."<br>\n";

		$msg='';
		
		$result =$connect->exec($sql);
		if($result === false){
			$msg="fail update. <br>\n";
		} 
		else{
			$msg="success insert. <br>\n";
		}
		if($msg != '') echo $msg;
	}catch(PDOException $e){
		echo $e->getMessage() . "<br>\n";
	}
	/**
 *  Google機器人驗證 
 *  @param string $token
 *  @return bool 
 */
	function recaptchaCheck($token){
		if(!$token){
			echo "機器人驗證-未驗證";
			return false;
		}

		$secret_key = '6Ld5jAQmAAAAAHqoMOJM58-qnMsLqVugjCKP3Dxj';
		$response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$token);
		$response_data = json_decode($response,true);
		if($response_data["success"]){
			echo "驗證成功";
			return True;
		}else{
			echo "機器人驗證-失敗";
			return False;
		}
	}
	/*$sql2="select vcnter from visit where vid=5";
	$connect->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
	$rs2=$connect->query($sql2);
	$rs2->setFetchMode(PDO::FETCH_BOTH);
	$row2=$rs2->fetch();
	echo "訪客人數:" . $row2[0] . "<br>";*/
	echo "訂票成功！您的訂票代碼為：" . $ticketCode;	
?>