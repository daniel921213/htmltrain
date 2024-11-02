<!doctype html>
<html lang="zh">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  
<?php
ini_set('display_errors','on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include_once("db/conn.php");
$tid=$_GET['tid'];
$ddate=date('Y-m-d H:i:s');
/*
try{
    $sql = "update visit set vcnter=vcnter+1 where vid=1";
	//echo $sql."<br>\n";
	$msg='';

	$result =$connect->exec($sql);
	if($result === false){
		$msg="fail update. <br>\n";
	} 
	if($msg != '') echo $msg;
}catch(PDOException $e){
    echo $e->getMessage() . "<br>\n";
}*/
$sql2="select * from train where tid=" . $tid;
$connect->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
$rs2=$connect->query($sql2);
$rs2->setFetchMode(PDO::FETCH_BOTH);
//$row2=$rs2->fetchAll();
?>
<form method="post" action="trainupd2.php">
<input type="hidden" name="tid" value=<?php echo $tid;?>>
    出發站<select name="depart" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
        <option selected>出發站</option>
        <option value="1">台北</option>
        <option value="2">台中</option>
        <option value="3">高雄</option>
        <option value="4">屏東</option>
        <option value="5">台東</option>
    </select>
    抵達站<select name="arrived" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
        <option selected>抵達站</option>
        <option value="1">台北</option>
        <option value="2">台中</option>
        <option value="3">高雄</option>
        <option value="4">屏東</option>
        <option value="5">台東</option>
    </select>
    日期<input name="ddate" type="date"><br>
    車次<input name="trainNo"class="form-control form-control-lg" type="text" placeholder="車次" aria-label=".form-control-lg example">
    <input type="submit" class="btn btn-warning" value="修改">
</form>
</body>
</html>