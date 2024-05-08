<?php

$edit_id = $_POST['id'];

include "./database-conn.php";

$edit_sql = "SELECT * FROM products WHERE id = {$edit_id}";
$result = mysqli_query($conn, $edit_sql) or die("SQL query failed");

while($row = mysqli_fetch_assoc($result)){
    $data[] = $row; 
}

echo json_encode(['data' => $data]);

?>