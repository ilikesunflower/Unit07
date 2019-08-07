<?php 
	//them san pham moi
	include_once('php.php');
	$sua= $_GET['MASP'];
	$query= "SELECT * FROM sanpham WHERE MASP='".$sua."'";
	$result=$conn->query($query);
	$row= $result->fetch_assoc();

	// die;
	if (isset($_POST['submit'])) {
		# code...
		$masp=$_POST['masp'];
		$tensp=$_POST['tensp'];
		$sl= $_POST['sl'];
		$gia=$_POST['gia'];
		$nuocsx=$_POST['nuocsx'];
		// var_dump($masp);
		// var_dump($tensp);
		// var_dump($sl);
		// var_dump($nuocsx);
		// var_dump($gia);
		// var_dump("haha");
		// die;
		if (strlen($masp)>0) {
			# code...
			$row['MASP']= $masp;
		}
		if (strlen($tensp)>0) {
			# code...
			$row['TENSP']= $tensp;
		}
		if (strlen($sl)>0) {
			# code...
			$row['DVT']= $sl;
		}
		if (strlen($gia)>0) {
			# code...
			$row['GIA']= $gia;
		}
		if (strlen($nuocsx)>0) {
			# code...
			$row['NUOCSX']= $nuocsx;
		}
		$add =  "UPDATE sanpham SET MASP='".$row['MASP']."',TENSP='".$row['TENSP']."',DVT=".$row['DVT'].",GIA=".$row['GIA'].",NUOCSX='".$row['NUOCSX']."' WHERE MASP='".$sua."'";
		$result=$conn->query($add);
		

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
 		<h1>SỮA THÔNG TIN SẢN PHẨM <?= $sua?></h1>
 		
 		<form method="POST">
 			<div class="form-group">
 				<label>Mã sản phẩm:<?= $row['MASP']?></label>
 				<input type="text" name="masp" class="form-control" placeholder="Mã SP mới">
 			</div>
 			<div class="form-group">
 				<label>Tên sản phẩm:<?= $row['TENSP']?></label>
 				<input type="text" name="tensp" class="form-control" placeholder="Tên SP mới">
 			</div>
 			<div class="form-group">
 				<label>Số lượng:<?= $row['DVT']?></label>
 				<input type="text" name="sl" class="form-control" placeholder="Số Lượng mới">
 			</div>
 			<div class="form-group">
 				<label>Giá tiền:<?= $row['GIA']?></label>
 				<input type="text" name="gia" class="form-control" placeholder="Giá Tiền mới">
 			</div>
 			<div class="form-group">
 				<label>Nơi sản xuất:<?= $row['NUOCSX']?></label>
 				<input type="text" name="nuocsx" class="form-control" placeholder="Nơi sx">
 			</div>
 			<button class=" btn btn-primary" type="submit" name="submit">SAVE</button>
 		</form>
 	</div>
 </body>
 </html>