<?php include "./calculation.php"; ?>

<h1 class="text-center mt-4">Products Summary At a Glance</h1>
<div class="w-75 mx-auto mt-4 text-center">
    <a href="./index.php" class="btn btn-primary" role="button">Back to Stock Quantities</a>
</div>

<div class="w-75 mx-auto mt-5 d-flex justify-content-center gap-5 flex-wrap">
    <div class="card col-3">
        <div class="card-body">
            <h2 class="card-title text-center">Total Stocked T-shirts</h2>
            <h1 class="text-center text-success fw-bold"><?php echo $total_products ; ?></h1>
        </div>
    </div>

    <div class="card col-3">
        <div class="card-body">
            <h2 class="card-title text-center">Total T-shirts Prices</h2>
            <h1 class="text-center text-success fw-bold">৳<?php echo $total_products_prices; ?> Taka</h1>
        </div>
    </div>

    <div class="card col-3">
        <div class="card-body">
            <h2 class="card-title text-center">Total M Sizes (Medium)</h2>
            <h1 class="text-center text-success fw-bold"> <?php echo $products_sizem; ?> </h1>
        </div>
    </div>

    <div class="card col-3">
        <div class="card-body">
            <h2 class="card-title text-center">Total L Sizes (Large)</h2>
            <h1 class="text-center text-success fw-bold"><?php echo $products_sizel; ?></h1>
        </div>
    </div>

    <div class="card col-3">
        <div class="card-body">
            <h2 class="card-title text-center">Total XL Sizes (Extra Large)</h2>
            <h1 class="text-center text-success fw-bold"><?php echo $products_sizexl; ?></h1>
        </div>
    </div>

    <div class="card col-3">
        <div class="card-body">
            <h2 class="card-title text-center">Total XXL Sizes (Long Large)</h2>
            <h1 class="text-center text-success fw-bold"><?php echo $products_sizexxl; ?></h1>
        </div>
    </div>
</div>

<?php include "./page-partial/footer.php"; ?>