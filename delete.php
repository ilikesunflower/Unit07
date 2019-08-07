<?php 
include_once('php.php');
$xoa= $_GET['MASP'];
		// Cau lenh truy van co so du lieu
$query = "DELETE FROM sanpham WHERE MASP='".$xoa."'";

	// Thuc thi cau lenh truy van co so du lieu
$result = $conn->query($query);

header('Location:ex01.php');

?>