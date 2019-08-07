<?php 
	include_once('php.php');
	$MASP= $_GET['MASP'];
	$sql= "SELECT * FROM sanpham WHERE MASP='".$MASP."'";
	$result= $conn->query($sql);
	$row= $result->fetch_assoc();
 ?>
 <!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Zent Group</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<style type="text/css">
			.hi{
				background-color: #d5f0f3;
				width: 40%;
				margin-left: 310px;

			}
			h3{
				padding-left: 9px;
				color: #092909;
			}
			a{
				margin-left:400px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<h2 align="center">THÔNG TIN CHI TIẾT</h2>
					<div class="hi" align=" center">
						<tr>
							<td><h3>MÃ SP:<?= $row['MASP'] ?></h3></td><br>
							<td><h3>TÊN SP:<?= $row['TENSP']?></h3></td><br>
							<td><h3>SỐ LƯỢNG SP:<?= $row['DVT']?></h3></td><br>
							<td><h3>GIÁ SP:<?= $row['GIA']?></h3></td><br>
							<td><h3>NƠI SẢN XUẤT:<?= $row['NUOCSX']?></h3></td><br>
							
						</tr>
						</div>
						<a href="ex01.php" class="btn-primary btn">	QUAY LẠI TRANG SẢN PHẨM</a>
					
		</div>
	</body>
	</html>