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

