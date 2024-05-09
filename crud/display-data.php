<?php 

include "../database-conn.php";

$display_sql = "SELECT *, (S + M + L + XL + XXL + `3XL`) as Total FROM products";
$result = mysqli_query($conn, $display_sql) or die("SQL query failed");

// Prepare data array
$data = array();

while($row = mysqli_fetch_assoc($result)){
    $data[] = $row; 
}

echo json_encode(['data' => $data]);

?>