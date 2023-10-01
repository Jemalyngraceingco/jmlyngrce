<link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="../../vendors/feather/feather.css">
<link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
<!-- endinject -->
<!-- inject:css -->
<link rel="stylesheet" href="../../css/style.css">
<!-- endinject -->
<link rel="shortcut icon" href="../../images/favicon.png" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?= base_url('public/include/js/script.js') ?>"></script>

</head>

<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editproductLabel">Edit Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close">Close</button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url(); ?>/update/<?= $pro['id'] ?>" method="post"
                            enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="Product_Image" class="form-label">Image</label>
                                <input type="hidden" name="Product_Image" value="<?php echo $pro['id']; ?>">
                                <input type="file" class="form-control" name="Product_Image" id="Product_Image"
                                    accept="image/*" required>
                            </div>
                            <div class="mb-3">
                                <label for="Product_Description" class="form-label">Product
                                    Description</label>
                                <input type="text" class="form-control" name="Product_Description"
                                    placeholder="Product Description"
                                    value="<?php echo $pro['Product_Description']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Product_Name" class="form-label">Product Name</label>
                                <input type="text" class="form-control" name="Product_Name" placeholder="Product Name"
                                    value="<?php echo $pro['Product_Name']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Product_Price" class="form-label">Product Price</label>
                                <input type="text" class="form-control" name="Product_Price" placeholder="Product Price"
                                    value="<?php echo $pro['Product_Price']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Product_Category" class="form-label">Product
                                    Category</label>
                                <select class="form-select" name="Product_Category">
                                    <option value="Drinks" <?php echo $pro['Product_Category'] === 'Drinks' ? 'selected' : ''; ?>>Drinks
                                    </option>
                                    <option value="Drinks" <?php echo $pro['Product_Category'] === 'Drinks' ? 'selected' : ''; ?>>Technology
                                    </option>
                                    <option value="Drinks" <?php echo $pro['Product_Category'] === 'Drinks' ? 'selected' : ''; ?>>Clothes
                                    </option>
                                    <option value="Foods" <?php echo $pro['Product_Category'] === 'Foods' ? 'selected' : ''; ?>>Foods</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="Product_Quantity" class="form-label">Product
                                    Quantity</label>
                                <input type="text" class="form-control" name="Product_Quantity"
                                    placeholder="Product Quantity" value="<?php echo $pro['Product_Quantity']; ?>">
                            </div>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </table>
    </div>


<style>
    form {
        background-color: #fff;

        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        width: 100%;
        margin-right: 20px;
        /* Move the form to the right */
    }

    label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }

    input[type="hidden"],
    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    input[type="hidden"],
    input[type="text"],
    select {
        width: 100%;
        padding: 12px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }


    input[type="submit"] {
        background-color: #007BFF;
        color: #fff;
        padding: 12px 24px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>