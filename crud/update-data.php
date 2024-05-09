<?php

$updateBtnId = $_POST['id'];
$pname = $_POST['pname'];
$color = $_POST['color'];
$sizes = $_POST['sizes'];
$sizem = $_POST['sizem'];
$sizel = $_POST['sizel'];
$sizexl = $_POST['sizexl'];
$sizexxl = $_POST['sizexxl'];
$size3xl = $_POST['size3xl'];

include "../database-conn.php";

$update_sql = "UPDATE products SET 
                        all_products = '{$pname}',
                        color = '{$color}',
                        S = '{$sizes}',   
                        M = '{$sizem}',   
                        L = '{$sizel}',   
                        XL = '{$sizexl}',   
                        XXL = '{$sizexxl}',   
                        3XL = '{$size3xl}'
                    WHERE id  = '{$updateBtnId}'";

if(mysqli_query($conn, $update_sql)){
    echo 1;
}else{
    echo 0;
}

?>