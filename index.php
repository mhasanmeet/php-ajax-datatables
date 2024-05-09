
<?php include "./page-partial/header.php"; ?>

<h1 class="text-center mt-4">T-shirt Stock Management</h1>
<div class="w-75 mx-auto mt-4 text-center">
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productAddModal">Add Product</button>
    <a href="./summary.php" class="btn btn-warning" role="button">Products Summaries</a>
</div>

<!-- Data Table -->
<div class="w-75 mx-auto mt-4">
    <table class="table cell-border table-bordered compact hover order-column w-100" id="productsTable">
        <thead>
            <tr>
                <th>Id</th>
                <th>Product Name</th>
                <th>Color</th>
                <th>S</th>
                <th>M</th>
                <th>L</th>
                <th>XL</th>
                <th>XXL</th>
                <th>3XL</th>
                <th>Total</th>
                <th>Edit Product</th>
                <th>Delete Product</th>
            </tr>
        </thead>
        <!-- Here the dynamic data came from Database by Data Table -->
    </table>
</div>

<!-- Add Product Modal -->
<div class="modal fade" id="productAddModal" tabindex="-1" aria-labelledby="productAddModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-success" id="exampleModalLabel">Add Product</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form id="addProduct">
                <div class="mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="pname" placeholder="React Developer t-shirt" required>
                </div>
                <div class="mb-3">
                    <label for="color" class="form-label">Select Color</label>
                    <select class="form-select" id="color" aria-label="select">
                        <option selected>Select Color</option>
                        <option value="Black">Black</option>
                        <option value="Gray">Gray</option>
                        <option value="Turkish Blue">Turkish Blue</option>
                        <option value="Green">Green</option>
                        <option value="Navy Blue">Navy Blue</option>
                    </select>
                </div>
                <div class="d-flex gap-2">
                    <div class="mb-3 col-4 text-center">
                        <label for="sizes" class="form-label">S (Small)</label>
                        <input type="number" class="form-control" id="sizes" placeholder="0">
                    </div>
                    <div class="mb-3 col-4 text-center">
                        <label for="sizem" class="form-label">M (Medium)</label>
                        <input type="number" class="form-control" id="sizem" placeholder="0">
                    </div>
                    <div class="mb-3 col-4 text-center">
                        <label for="sizel" class="form-label">L (Large)</label>
                        <input type="number" class="form-control" id="sizel" placeholder="0">
                    </div>
                </div>
                <div class="d-flex gap-2">
                    <div class="mb-3 col-4 text-center">
                        <label for="sizexl" class="form-label">XL (Extra Large)</label>
                        <input type="number" class="form-control" id="sizexl" placeholder="0">
                    </div>
                    <div class="mb-3 col-4 text-center">
                        <label for="sizexxl" class="form-label">XXL (Long Large)</label>
                        <input type="number" class="form-control" id="sizexxl" placeholder="0">
                    </div>
                    <div class="mb-3 col-4 text-center">
                        <label for="size3xl" class="form-label">3XL (3XL Large)</label>
                        <input type="number" class="form-control" id="size3xl" placeholder="0">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="save-data">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Product Modal -->
<div class="modal fade" id="productEditModal" tabindex="-1" aria-labelledby="productEditModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-warning" id="exampleModalLabel">Edit Product</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form id="addProduct">
                <div class="mb-3">
                    <input type="text" class="form-control" id="id" hidden>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="pname" placeholder="React Developer t-shirt" required>
                </div>
                <div class="mb-3">
                    <label for="color" class="form-label">Select Color</label>
                    <select class="form-select" id="color" aria-label="select">
                        <option selected>Select Color</option>
                        <option value="Black">Black</option>
                        <option value="Gray">Gray</option>
                        <option value="Turkish Blue">Turkish Blue</option>
                    </select>
                </div>
                <div class="d-flex gap-2">
                    <div class="mb-3 col-4 text-center">
                        <label for="sizes" class="form-label">S (Small)</label>
                        <input type="number" class="form-control" id="sizes" placeholder="0">
                    </div>
                    <div class="mb-3 col-4 text-center">
                        <label for="sizem" class="form-label">M (Medium)</label>
                        <input type="number" class="form-control" id="sizem" placeholder="0">
                    </div>
                    <div class="mb-3 col-4 text-center">
                        <label for="sizel" class="form-label">L (Large)</label>
                        <input type="number" class="form-control" id="sizel" placeholder="0">
                    </div>
                </div>
                <div class="d-flex gap-2">
                    <div class="mb-3 col-4 text-center">
                        <label for="sizexl" class="form-label">XL (Extra Large)</label>
                        <input type="number" class="form-control" id="sizexl" placeholder="0">
                    </div>
                    <div class="mb-3 col-4 text-center">
                        <label for="sizexxl" class="form-label">XXL (Long Large)</label>
                        <input type="number" class="form-control" id="sizexxl" placeholder="0">
                    </div>
                    <div class="mb-3 col-4 text-center">
                        <label for="size3xl" class="form-label">3XL (3XL Large)</label>
                        <input type="number" class="form-control" id="size3xl" placeholder="0">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="edit-submit">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?php include "./page-partial/footer.php"; ?>