<?php
session_start();
ini_set('display_errors','on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include_once("db/conn.php");
session_start(); // 啟動會話
session_destroy(); // 銷毀會話

// 重新導向至登入頁面或其他適當的頁面
header("Location: index2.html");
exit();
?>