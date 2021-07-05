<?php  
	// $conn = mysqli_connect("localhost", "quoclong_qlms", "quoclong", "quoclong_qlms") or die("Can't connect database");
	// if ($conn) {
	// 	// echo "Kết nối database thành công!";
	// 	mysqli_set_charset($conn, 'utf8');
	// }else{
	// 	echo "Lỗi kết nối!";
	// }

// mysqli_connect(host, username, password, dbname, port, socket)

	// $conn = mysqli_connect("localhost", "root", "", "qlms") or die("Can't connect database");
	// if ($conn) {
	// 	// echo "Kết nối database thành công!";
	// 	mysqli_set_charset($conn, 'utf8');
	// }else{
	// 	echo "Lỗi kết nối!";
	// }


// $conn = mysqli_connect("localhost", "nhlonpl0_quoclong", "lequoclong", "nhlonpl0_quoclong") or die("Can't connect database");
	$conn = mysqli_connect("localhost", "root", "", "to_do_list_1") or die("Can't connect database");
	if ($conn) {
		// echo "Kết nối database thành công!";
		mysqli_set_charset($conn, 'utf8');
	}else{
		echo "Lỗi kết nối!";
	}



?>