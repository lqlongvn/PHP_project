	<?php 
	session_start();
	include_once 'config/myConfig.php'; 

	echo "Hello Long, this is index.php", "<br>";

	echo "id: " . "             - Work: " . "        - Done: " . "    - Date:      " . "<br>";

	$sql = "SELECT * FROM work";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
		while($row = $result->fetch_assoc()) {
			echo "id: " . $row["id"]. " - Work: " . $row["work_content"]. "- Done: " . $row["done_content"]." - Date:  " . $row["work_date"]. "<br>";
		}
	} else {
		echo "0 results";
	}
	$conn->close();

	?>


	<!DOCTYPE html>
	<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Quản lý To-do-list </title>

		<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="Bootstrap/css/my_css.css">
	</head>
	<body>
		<div class="container">
			<h4>DANH SÁCH GÓI THẦU</h4>
			<div class="row">
				<div class="col-md-6">
					<form action="index.php?page=search" method="POST" name="frm_search">
						<input type="text" class="form-control" name="key" placeholder="Nội dung cần tìm trong Tên Gói thầu" />
				</div>
				<div class="col-md-6">
						<button class="btn btn-primary" type="submit" name="submit">Tìm kiếm theo tên</button>
					</form>
				</div>
			</div>
			<br>
			<br>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>STT</th>
							<th>Work</th>
							<th>Done</th>
							<th>Date</th>
							<th>Chú thích</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
		</div>

		<script src="Bootstrap/js/jquery.js"></script>
		<script src="Bootstrap/js/myJava.js"></script>
		<script src="Bootstrap/js/bootstrap.min.js"></script>
	</body>
	</html>


