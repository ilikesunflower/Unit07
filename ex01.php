<?php 
	include_once('php.php');
		// Cau lenh truy van co so du lieu
	$query = "SELECT * FROM sanpham";

	// Thuc thi cau lenh truy van co so du lieu
	$result = $conn->query($query);

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
			.container{
				width: 60%;
				margin-left: 280px;
				
			}
		</style>
	</head>
	<body>
		<div class="container"  >
			<h2 align="center">DANH SÁCH SẢN PHẨM</h2>
			<p>Hoc là học cho nên Chơi thì chơi cho tốt</p>
			<a href="add1.php" class="btn btn-primary">Thêm mới sản phẩm</a>
			<table class="table">
				<thead>
					<tr>
						<th>Mã sản phẩm</th>
						<th>Tên sản phẩm</th>
						<th>Số lượng</th>
						<th>Giá tiền</th>
						<th>Xuất xứ</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					while($row = $result->fetch_assoc()) { 
						// echo "<pre>";
						// print_r($row);
						// echo "</pre>";

						?>
						<tr>
							<td><?= $row['MASP'] ?></td>
							<td><?= $row['TENSP']?></td>
							<td><?= $row['DVT']?></td>
							<td><?= $row['GIA']?></td>
							<td><?= $row['NUOCSX']?></td>

							<td>
								<a href="update.php?MASP=<?=$row['MASP']?>" class="btn btn-success">Detail</a> 
								<a href="add.php?MASP=<?=$row['MASP']?>" class="btn btn-warning">Update</a>  
								<a href="delete.php?MASP=<?=$row['MASP']?>" class="btn btn-danger">Delete</a>

							</td>
						</tr>
					</tbody>
					<?php

				}
				?>

			</table>
		</div>
	</body>
	</html>
