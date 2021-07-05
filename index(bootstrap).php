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
	<title>Hệ Thống Quản lý Mua Sắm VNPT-Media </title>
	<?php 
	echo  "<br>";
	echo "Hello: GitHub; Just to see the Changes in GitHub; Long sửa để thấy thay đổi trên GitHub", "<br>";
	?>

	<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="Bootstrap/css/my_css.css">
</head>
<body>



	<div class="container">
		<?php echo "<h3 style='color: red;'> Hello Bootstrap!</h3>"; ?>

	</div>

	<div class="container">
		<div class="row main">
			<div class="col-md-4">
				<div class="alert alert-danger">Quay lại</div>
				<div class="alert alert-info">Thông tin thêm</div>
			</div>
			<div class="col-md-5">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active" aria-current="page"><a href="">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page"><a href="">Chuyên mục 1</a></li>
						<li class="breadcrumb-item" aria-current="page">Bài viết <span class="badge badge-info">New</span></li>
					</ol>
				</nav>
			</div>
			<div class="col-md-3">
				<button class="btn btn-success">OK</button>
			</div>
		</div>
		<div class="row main">
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<strong>Holy guacamole!</strong> You should check in on some of those fields below.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		</div>
	</div>



	<script src="Bootstrap/js/jquery.js"></script>
	<script src="Bootstrap/js/myJava.js"></script>
	<script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>


