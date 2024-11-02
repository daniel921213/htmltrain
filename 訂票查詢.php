<!doctype html>
<html lang="zh-tw">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
<?php
ini_set('display_errors','on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include_once("../db/conn.php");
/*
try{
    $sql = "update visit set vcnter=vcnter+1 where visit=1";
	//echo $sql."<br>\n";
	$msg='';

	$result =$connect->exec($sql);
	if($result === false){
		$msg="fail update. <br>\n";
	} 
	if($msg != '') echo $msg;
}catch(PDOException $e){
    echo $e->getMessage() . "<br>\n";
}
*/

$sql2="select *FROM train order by tid desc";
$connect->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
$rs2=$connect->query($sql2);
$rs2->setFetchMode(PDO::FETCH_BOTH);
//$row2=$rs2->fetchALL();
?>
<table class="table table-striped table-hover">
<thead>
    <tr>
	  <th scope="col">修改</th>
	  <th scope="col">刪除</th>
      <th scope="col">#</th>
      <th scope="col">會員編號</th>
      <th scope="col">出發站</th>
      <th scope="col">抵達站</th>
	  <th scope="col">乘車日期</th>
	  <th scope="col">訂票日期</th>
	  <th scope="col">訂票編號</th>
    </tr>
  </thead>

<?php
while($row3=$rs2->fetch()){
	echo "<tr>"
	echo "<td class='table-primary'>修";
	echo "<td class='table-secondary'>刪";
	echo "<td class='table-primary'>".$row3['tid'];
	echo "<td class='table-secondary'>".$row3['uid'];		
	echo "<td class='table-primary'>".$row3['depart'];	
	echo "<td class='table-secondary'>".$row3['arrived'];	
	echo "<td class='table-primary'>".$row3['ddate'];	
	echo "<td class='table-secondary'>".$row3['trainNo'];	
	echo "<td class='table-primary'>".$row3['otime'];	
	echo "<td class='table-secondary'>".$row3['ndd'];	
	echo"</td>"
	echo"</tr>"
}	
?>
</table>
</html>