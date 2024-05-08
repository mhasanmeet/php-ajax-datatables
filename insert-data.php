<?php

// get objects from index.php
$all_products = $_POST['pname'];
$color = $_POST['color'];
$sizes = $_POST['sizes'];
$sizem = $_POST['sizem'];
$sizel = $_POST['sizel'];
$sizexl = $_POST['sizexl'];
$sizexxl = $_POST['sizexxl'];
$size3xl = $_POST['size3xl'];

include "./database-conn.php";

$sql = "INSERT INTO products(
                    `all_products`, 
                    `color`, 
                    `S`, 
                    `M`, 
                    `L`, 
                    `XL`, 
                    `XXL`, 
                    `3XL`) 
                VALUES(
                    '{$all_products}', 
                    '{$color}',
                    '{$sizes}',
                    '{$sizem}',
                    '{$sizel}',
                    '{$sizexl}',
                    '{$sizexxl}',
                    '{$size3xl}'
                )";

// send response to ajax
if(mysqli_query($conn, $sql)){
    echo 1;
}else{
    echo 0;
}

?>