<?php 

include "database-conn.php";

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql) or die("SQL query failed");

// Prepare data array
$data = array();

while($row = mysqli_fetch_assoc($result)){
    $data[] = $row; 
}

echo json_encode(['data' => $data]);

?>