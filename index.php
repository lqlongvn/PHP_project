<?php 
session_start();
include_once 'config/myConfig.php'; 

echo "Header", "<br>";

echo "id: " . "             - Work: " . "        - Done: " . "    - Date:      " . "<br>";

$sql = "SELECT * FROM work";
$result = $conn->query($sql);

echo "Fetch cách 1", "<br>";
if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		echo "id: " . $row["id"]. " - Work: " . $row["work_content"]. "- Done: " . $row["done_content"]." - Date:  " . $row["work_date"]. "<br>";
	}
} else {
	echo "0 results";
}

echo "<br>";
echo "Fetch cách 2; Today", "<br>";
$query = mysqli_query($conn, $sql); // câu lênh truy vấn
$count = mysqli_num_rows($query); // đếm xem có bao nhiêu bản ghi trả ra
if ($count > 0) {
	echo  "Số dòng: ".$count; 
	// while ($row = mysqli_fetch_array($query)) { 
	// 	echo "id: " . $row["id"]. " - Work: " . $row["work_content"]. "- Done: " . $row["done_content"]." - Date:  " . $row["work_date"]. "<br>";
	// }

}

// $conn->close();

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
		<h4>DANH SÁCH CÔNG VIỆC</h4>
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
						<th>Chức năng</th>							
					</tr>
					<td><?php echo "ID" ?></td>
					<td><?php echo "Work" ?></td>
					<td><?php echo "Done" ?></td>
					<td><?php echo "Date" ?></td>
					<td>
						<a href=""> <button class="btn btn-info">Chi Tiết</button> 	</a>
						<a href=""> <button class="btn btn-primary">Sửa</button>  </a>
						<a href="https://vnexpress.net/"> <button class="btn btn-danger">Xóa</button> </a>
					</td>
					<tr>
						
					</tr>
				</thead>
				<tbody>

					<?php 
					while ($row = mysqli_fetch_array($query)) {
						?>

						<tr>
							<td> <?php echo $row['id']; ?> </td> 
							<td><?php echo $row['work_content']; ?></td>
							<td><?php echo $row['done_content']; ?></td>
							<td><?php echo $row['work_date']; ?></td>
							<td>
								<a href=""> <button class="btn btn-info">Chi Tiết</button> 	</a>
								<a href=""> <button class="btn btn-primary">Sửa</button>  </a>
								<a href="https://vnexpress.net/"> <button class="btn btn-danger">Xóa</button> </a>
							</td>
						</tr>
					<?php }	?>

				</tbody>
			</table>
		</div>
	</div>

	<script src="Bootstrap/js/jquery.js"></script>
	<script src="Bootstrap/js/myJava.js"></script>
	<script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>


