<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevShopBD Stock Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Data table css -->
    <link href="//cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css" rel="stylesheet">
</head>
<body>

    <h1 class="text-center mt-4">T-shirt Stock Management</h1>
    <div class="w-75 mx-auto mt-4 text-center">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productAddModal">Add Product</button>
    </div>

    <!-- Data Table -->
    <div class="w-75 mx-auto mt-4">
        <table class="table cell-border compact hover order-column w-100" id="productsTable">
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
    
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Data Table JS -->
    <script src="//cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
    <script>
        $(document).ready(function(){
             // Show data function
            function loadTable(){
                $("#productsTable").DataTable({
                    "ajax": {
                            "url": "display-data.php",
                            "dataSrc": 'data'
                    },
                    "columns": [
                        { "data": "id" },
                        { "data": "all_products" },
                        { "data": "color" },
                        { "data": "S" },
                        { "data": "M" },
                        { "data": "L" },
                        { "data": "XL" },
                        { "data": "XXL" },
                        { "data": "3XL" },
                        { "data": null, "defaultContent": '<button class="btn btn-primary edit-btn" data-bs-toggle="modal" data-bs-target="#productEditModal">Edit Product</button>' },
                        { "data": null, "defaultContent": '<button class="btn btn-danger delete-btn">Delete Product</button>' }
                    ]
                })
            }
            loadTable();


            // Insert Product
            $("#save-data").on("click", function(e){
                // remove submit form default behavior
                e.preventDefault();
                var pname = $("#pname").val();
                var color = $("#color").val();
                var sizes = $("#sizes").val();
                var sizem = $("#sizem").val();
                var sizel = $("#sizel").val();
                var sizexl = $("#sizexl").val();
                var sizexxl = $("#sizexxl").val();
                var size3xl = $("#size3xl").val();

                $.ajax({
                    url: "insert-data.php",
                    type: "POST",
                    // insert data as object
                    data: {
                        pname: pname, 
                        color: color, 
                        sizes: sizes, 
                        sizem: sizem,
                        sizel: sizel,
                        sizexl: sizexl,
                        sizexxl: sizexxl, 
                        size3xl: size3xl
                    },
                    success: function(response){
                        if(response == 1){
                            // $('#productAddModal').modal('hide');
                            // Reset the form after data submission
                            $('#addProduct')[0].reset();
                            // Destroy the existing DataTable instance
                            $('#productsTable').DataTable().destroy();
                            // Reload the table with updated data
                            loadTable();
                        }
                    }
                });
            });


            // Delete Product
            $(document).on("click", ".delete-btn", function(){
                if(confirm("Do you really want to delete this Product Entirely?")){
                    // get id
                    let deleteBtnId = $(this).closest("tr").find('td:first-child').text();
                    let thisElm = this;

                    $.ajax({
                        url: "delete-data.php",
                        type: "POST",
                        data: {id: deleteBtnId},
                        success: function(response){
                            if(response == 1){
                                $(thisElm).closest("tr").fadeOut();
                            }
                        }
                    });
                }
            });


            // Edit Product - Get Product info by Clicking Edited button
            $(document).on("click", ".edit-btn", function(){
                let editBtnId = $(this).closest("tr").find('td:first-child').text();
                // console.log('Edit button clicked for row with id:', editBtnId);

                // if edit button clicked, then send edit button id to "edit-data.php" and receive button id data and html payload
                $.ajax({
                    url: "edit-data.php",
                    type: "POST",
                    data: {id: editBtnId},
                    success: function(response){
                        let data =JSON.parse(response);
                        
                        // Populate the modal fields with the retrieved data
                        $("#productEditModal #id").val(data.data[0].id);
                        $("#productEditModal #pname").val(data.data[0].all_products);
                        $("#productEditModal #color").val(data.data[0].color);
                        $("#productEditModal #sizes").val(data.data[0].S);
                        $("#productEditModal #sizem").val(data.data[0].M);
                        $("#productEditModal #sizel").val(data.data[0].L);
                        $("#productEditModal #sizexl").val(data.data[0].XL);
                        $("#productEditModal #sizexxl").val(data.data[0].XXL);
                        $("#productEditModal #size3xl").val(data.data[0]['3XL']);
                    }
                });


                // get edited data modal form response
                $(document).on("click", "#edit-submit", function(e){
                    // remove submit form default behavior
                    e.preventDefault();

                    // get edited data
                    let updateBtnId = $("#productEditModal #id").val();
                    let productName = $("#productEditModal #pname").val();
                    let color = $("#productEditModal #color").val();
                    let sizes = $("#productEditModal #sizes").val();
                    let sizem = $("#productEditModal #sizem").val();
                    let sizel = $("#productEditModal #sizel").val();
                    let sizexl = $("#productEditModal #sizexl").val();
                    let sizexxl = $("#productEditModal #sizexxl").val();
                    let size3xl = $("#productEditModal #size3xl").val();

                    // update function
                    $.ajax({
                        url: "update-data.php",
                        type: "POST",
                        data: {
                            id: updateBtnId, 
                            pname: productName, 
                            color: color,
                            sizes: sizes,
                            sizem: sizem,
                            sizel: sizel,
                            sizexl: sizexl,
                            sizexxl: sizexxl,
                            size3xl: size3xl
                        },
                        success: function(response){
                            if(response == 1){
                                $("#productEditModal").modal('hide');
                                // Destroy the existing DataTable instance
                                $('#productsTable').DataTable().destroy();
                                // after update we need to initiate our loadTable() function to make update the shown data
                                loadTable();
                            }
                        }
                    });
                });
            });  
        });
    </script>
</body>
</html>