<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Regal Admin</title>
    <!-- base:css -->
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

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo.svg" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="search">
                                    <i class="icon-search"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search Projects.." aria-label="search"
                                aria-describedby="search">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown d-lg-flex d-none">
                        <button type="button" class="btn btn-info font-weight-bold">+ Create New</button>
                    </li>
                    <li class="nav-item dropdown d-flex">
                        <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
                            id="messageDropdown" href="#" data-toggle="dropdown">
                            <i class="icon-air-play mx-0"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="messageDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow">
                                    <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                                    </h6>
                                    <p class="font-weight-light small-text text-muted mb-0">
                                        The meeting is cancelled
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow">
                                    <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                                    </h6>
                                    <p class="font-weight-light small-text text-muted mb-0">
                                        New product launch
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow">
                                    <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                                    </h6>
                                    <p class="font-weight-light small-text text-muted mb-0">
                                        Upcoming board meeting
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown d-flex mr-4 ">
                        <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center"
                            id="notificationDropdown" href="#" data-toggle="dropdown">
                            <i class="icon-cog"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Settings</p>
                            <a class="dropdown-item preview-item">
                                <i class="icon-head"></i> Profile
                            </a>
                            <a class="dropdown-item preview-item">
                                <i class="icon-inbox"></i> Logout
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown mr-4 d-lg-flex d-none">
                        <a class="nav-link count-indicatord-flex align-item s-center justify-content-center" href="#">
                            <i class="icon-grid"></i>
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <div class="user-profile">
                    <div class="user-image">
                        <img src="images/faces/face28.png">
                    </div>
                    <div class="user-name">
                        Ingco Jemakyn Grace
                    </div>
                    <div class="user-designation">
                        Developer
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="icon-box menu-icon"></i>
                            <span class="menu-title">Homepage</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="admin">
                            <i class="icon-command menu-icon"></i>
                            <span class="menu-title">Tables</span>
                        </a>
                    </li>                  
                </ul>
            </nav>
            <!-- partial -->
            <div class="col-lg-9 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#addproduct">Add</button>
                            <div class="modal fade" id="addproduct" tabindex="-1" aria-labelledby="addproductLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="addproductLabel">Add Product</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">Close</button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?php echo base_url(); ?>/save" method="post"
                                                enctype="multipart/form-data">
                                                <label for="Product_Image">Image</label>
                                                <input type="hidden" name="Product_Image">
                                                <input type="file" name="Product_Image" id="Product_Image"
                                                    accept="Product_Image/*" required>
                                                <label for="Product_Description">Prod_Description</label>
                                                <input type="text" name="Product_Description"
                                                    placeholder="Product_Description">
                                                <label for="Product_Name">Prod_Name</label>
                                                <input type="text" name="Product_Name" placeholder="Product_Name">
                                                <label for="Product_Price">Prod_Price</label>
                                                <input type="text" name="Product_Price" placeholder="Product_Price">
                                                <label for="Product_Category">Prod_Category</label>
                                                <select name="Product_Category">
                                                    <option value="Drinks">Drinks</option>
                                                    <option value="Foods">Foods</option>
                                                    <option value="Foods">Technology</option>
                                                    <option value="Foods">Clothes</option>
                                                </select>
                                                <label for="Product_Quantity">Prod_Quantity</label>
                                                <input type="text" name="Product_Quantity"
                                                    placeholder="Product_Quantity">
                                                <input type="submit" value="Add">
                                            </form>
                                        </div>
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

                                        /* Table Styles */

                                        table,
                                        th,
                                        td {
                                            border: 1px solid #ccc;
                                        }

                                        th,
                                        td {
                                            padding: 12px;
                                            text-align: left;
                                            font-size: 14px;
                                        }

                                        th {
                                            background-color: violet;
                                            color: #fff;
                                        }

                                        /* Table Actions */
                                        .action-links {
                                            text-decoration: none;
                                            margin-right: 10px;
                                            color: #007BFF;
                                            font-weight: bold;
                                        }

                                        /* Highlighted Row */
                                        tr:hover {
                                            background-color: #f2f2f2;
                                        }
                                    </style>

                                    <table border="1">
                                        <tr>
                                            <th>id </th>
                                            <th>Image </th>
                                            <th>Description </th>
                                            <th>Name </th>
                                            <th>Price </th>
                                            <th>Category </th>
                                            <th>Quantity </th>
                                            <th>Action </th>


                                        </tr>
                                        <?php foreach ($admin as $pr): ?>
                                            <thead>
                                                <!-- Table header row here -->
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <?= $pr['id'] ?>
                                                    </td>
                                                    <td class=" ">
                                                        <img src="<?= $pr['Product_Image'] ?>" class="w-50">
                                                    </td>
                                                    <td>
                                                        <?= $pr['Product_Description'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $pr['Product_Name'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $pr['Product_Price'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $pr['Product_Category'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $pr['Product_Quantity'] ?>
                                                    </td>
                                                    <td>
                                                        <a href="/delete/<?= $pr['id'] ?>"
                                                            class="btn btn-primary">Delete</a>
                                                        <a href="/edit/<?= $pr['id'] ?>" class="btn btn-primary">Edit</a>
                                                             
                                                    </td>
                                                </tr>
                                            </tbody>
                                        <?php endforeach; ?>
                                    </table>
                                </div>
                        </table>
                    </div>
                    <form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>