<!doctype html>
<html lang="zh">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<title>美好車站</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
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
include_once("../db/conn.php");
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
$sql2="select * from train order by tid";
$connect->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
$rs2=$connect->query($sql2);
$rs2->setFetchMode(PDO::FETCH_BOTH);
//$row2=$rs2->fetchAll();
?>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">
				  <div class="carousel-item active" data-bs-interval="10000">
					<img src="https://tip-tr4cdn.cdn.hinet.net/tra-tip-web/tip/img/975c33a1-068a-41e6-a3de-7c8b208675b5/375x150" class="d-block w-100" alt="..." width="50px" height="500px">
				  </div>
				  <div class="carousel-item" data-bs-interval="2000">
					<img src="https://tour.taitung.gov.tw/image/31845/1024x768" class="d-block w-100" alt="..."  width="50px" height="500px">
				  </div>
				  <div class="carousel-item">
					<img src="https://imgs.gvm.com.tw/upload/gallery/20201019/75221_01.jpg" class="d-block w-100" alt="..."  width="50px" height="500px">
				  </div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
				  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				  <span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
				  <span class="carousel-control-next-icon" aria-hidden="true"></span>
				  <span class="visually-hidden">Next</span>
				</button>
			  </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="#">台鐵火車站</a></h1>
						<nav class="links">
							<ul>
								<li><a href="index.php">首頁</a></li>
								<li><a href="訂票系統.html">訂票系統</a></li>
								<li><a href="https://tip.railway.gov.tw/tra-tip-web/tip/tip005/tip511/shop" target="blank">購物商城</a></li>
								<li><a href="index2.html">登入會員</a></li>
								<li><a href="train/trainquary.php">訂票查詢</a></li>
								<li><a href="#">聯絡我們</a></li>
							</ul>
						</nav>
						<nav class="main">
							<ul>
								<li class="search">
									<a class="fa-search" href="#search">Search</a>
									<form id="search" method="get" action="https://www.google.com/search" target="blank">
										<input type="hidden" name="cx" value="93ffbfcef4ef346e1"> <!-- 替换为你的 Google 自定义搜索引擎 ID -->
										<input type="hidden" name="ie" value="UTF-8">
										<input type="text" name="q" placeholder="Search" />
									</form>
								</li>
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>

					</header>
<table class="table table-danger table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">修改</th>
            <th scope="col">刪除</th>
            <th scope="col">#</th>
            <th scope="col">會員編號</th>
            <th scope="col">出發站</th>
            <th scope="col">抵達站</th>
            <th scope="col">乘車日期</th>
            <th scope="col">車次</th>
            <th scope="col">訂票日期</th>
            <th scope="col">訂單編號</th>
        </tr>
    </thead>
<?php
while($row3=$rs2->fetch()){
    echo "<tr>";
    echo "<td><a href='trainupd.php?tid=" . $row3['tid'] . "'>修改</a>" ;
    echo "<td><a href='traindel.php?tid=" . $row3['tid'] . "'>刪除</a>" ;
    echo "<td>" . $row3['tid'];
    echo "<td>" . $row3['uid'];
    echo "<td>" . $row3['depart'];
    echo "<td>" . $row3['arrived'];
    echo "<td>" . $row3['ddate'];
    echo "<td>" . $row3['trainNo'];
    echo "<td>" . $row3['otime'];
    echo "<td>" . $row3['bookingcode'];

    
    echo "</tr>";
}

//echo "訪客人數:" . $row2[0] . "<br>";
	
?>
</table>
</body>
</html>