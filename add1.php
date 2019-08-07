<?php 
include_once("php.php");
if (isset($_POST['submit'])) {
	# code...
	if (isset($_POST['masp'])&&isset($_POST['tensp'])&&isset($_POST['sl'])&&isset($_POST['gia'])&&isset($_POST['nuocsx'])) {
	# code...
	$masp=$_POST['masp'];
	$tensp=$_POST['tensp'];
	$sl=$_POST['sl'];
	$gia=$_POST['gia'];
	$nuocsx=$_POST['nuocsx'];
}
$query="INSERT INTO sanpham VALUES('".$masp."','".$tensp."',".$sl.",'".$nuocsx."',".$gia.")";
$result=$conn->query($query);
header('Location:ex01.php');
}

 ?>
  <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
 </head>
 <body>
 	<div class="container">
 		<h1>NHẬP THÔNG TIN SẢN PHẨM MỚI</h1>
 		<a href="ex01.php" class="btn-primary btn">HỦY</a>
 		
 		<form method="POST">
 			<div class="form-group">
 				<label>Mã sản phẩm:</label>
 				<input type="text" name="masp" class="form-control" placeholder="Mã SP mới">
 			</div>
 			<div class="form-group">
 				<label>Tên sản phẩm:</label>
 				<input type="text" name="tensp" class="form-control" placeholder="Tên SP mới">
 			</div>
 			<div class="form-group">
 				<label>Số lượng:</label>
 				<input type="text" name="sl" class="form-control" placeholder="Số Lượng mới">
 			</div>
 			<div class="form-group">
 				<label>Giá tiền:</label>
 				<input type="text" name="gia" class="form-control" placeholder="Giá Tiền mới">
 			</div>
 			<div class="form-group">
 				<label>Nơi sản xuất:</label>
 				<input type="text" name="nuocsx" class="form-control" placeholder="Nơi sx">
 			</div>
 			<button class=" btn btn-primary" type="submit" name="submit">SAVE</button>
 		</form>
 	</div>
 </body>
 </html>