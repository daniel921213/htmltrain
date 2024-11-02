<?php
session_start();
ini_set('display_errors','on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include_once("db/conn.php");

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // 檢查資料庫中是否有該使用者
    $sql = "SELECT * FROM 會員 WHERE username = '$username' AND password = '$password'";
    $result = $connect->query($sql);
    
    if($result->rowCount() > 0){
        // 使用者存在，執行登入操作
        // 這裡可以設定登入相關的操作，例如建立登入的 Session、重新導向至會員頁面等
        $_SESSION['username'] = $username; // 儲存帳號名稱到會話
        header('Location: index.php'); // 重新導向至首頁
        exit();
    }else{
        echo "<script>alert('登入失敗請檢查密碼或帳號！');window.location.href = 'index2.html';</script>";
    }
}

// 判斷是否提交了註冊表單
if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // 檢查資料庫中是否已存在相同的使用者名稱
    $sql = "SELECT * FROM 會員 WHERE username = '$username'";
    $result = $connect->query($sql);
    
    if($result->rowCount() > 0){
        echo "<script>alert('該使用者名稱已被註冊。');window.location.href = 'index3.html';</script>";
    }else{
        $sql = "SELECT * FROM 會員 WHERE password = '$password'";
        $result = $connect->query($sql);
        if($result->rowCount() > 0){
            echo "<script>alert('該密碼已被使用，請選擇其他密碼');window.location.href = 'index3.html';</script>";
        }else{

        // 執行註冊操作，將新使用者資料插入資料庫
        $sql = "INSERT INTO 會員 (username, password) VALUES ('$username', '$password')";
        $result = $connect->exec($sql);
        
        if($result){
            echo "<script>alert('註冊成功！');window.location.href = 'index2.html';</script>";
        }else{
            echo "註冊失敗。";
        }
     }
  }
}
	
?>
