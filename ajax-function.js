$(document).ready(function(){
    // Show data function
    function loadTable(){
        $("#productsTable").DataTable({
            "ajax": {
                    "url": "crud/display-data.php",
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
                { "data": "Total" },
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
            url: "crud/insert-data.php",
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
                url: "crud/delete-data.php",
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
            url: "crud/edit-data.php",
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
                url: "crud/update-data.php",
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