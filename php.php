<?php 
	//Ket noi co so du lieu

	// Thong so ket noi CSDL
	$servername = "localhost";//255.123.45.21
	$username = "root";   // ten dang nhap
	$password = "";    // mat khau rong
	$dbname = "qlbh";   // db muon ket noi

	// Tao ra ket noi den CSDL connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	$conn->set_charset("utf8"); // set utf-8 dể đọc dữ liệu tiếng Việt

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}


	// while($row = $result->fetch_assoc()) { 
		  
	// echo "<pre>";
	// 	print_r($row);
	// echo "</pre>";
		  	   
        	 
 //    }

 ?>
