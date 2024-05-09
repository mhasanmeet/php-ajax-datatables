<?php

include "./page-partial/header.php"; 
include "./database-conn.php";

$total_products_query = "SELECT 
                        SUM(S) + 
                        SUM(M) + 
                        SUM(L) + 
                        SUM(XL) + 
                        SUM(XXL) + 
                        SUM(`3XL`) 
                    AS total_products 
                    FROM products";

$total_result = mysqli_query($conn, $total_products_query);
$total_products_row = mysqli_fetch_assoc($total_result);

// total products
$total_products = $total_products_row["total_products"];

// Around estimated products prices
$total_products_prices = $total_products_row["total_products"] * 350 ;



// total M size Products
$sizem_query = "SELECT SUM(M) AS sizem_products FROM products";

$result_sizem = mysqli_query($conn, $sizem_query);
$row_sizem = mysqli_fetch_assoc($result_sizem);

// total products
$products_sizem = $row_sizem["sizem_products"];



// total L size Products
$sizel_query = "SELECT SUM(L) AS sizel_products FROM products";

$result_sizel = mysqli_query($conn, $sizel_query);
$row_sizel = mysqli_fetch_assoc($result_sizel);

// total products
$products_sizel = $row_sizel["sizel_products"];



// total XL size Products
$sizexl_query = "SELECT SUM(XL) AS sizexl_products FROM products";

$result_sizexl = mysqli_query($conn, $sizexl_query);
$row_sizexl = mysqli_fetch_assoc($result_sizexl);

// total products
$products_sizexl = $row_sizexl["sizexl_products"];



// total XXL size Products
$sizexxl_query = "SELECT SUM(XXL) AS sizexxl_products FROM products";

$result_sizexxl = mysqli_query($conn, $sizexxl_query);
$row_sizexxl = mysqli_fetch_assoc($result_sizexxl);

// total products
$products_sizexxl = $row_sizexxl["sizexxl_products"];
?>