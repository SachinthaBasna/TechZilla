<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="lines.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="icon" href="Resources/">
    <title>TechZilla</title>
</head>
<?php
include "connection.php";

session_start();
if (isset($_SESSION["u"])) {
    $rs = Database::search("SELECT * FROM `category`");
    $num = $rs->num_rows;


    ?>
    <!-- Body -->

    <body class="body" id="body" onload="loadproduct(0);">
        <input type="checkbox" id="hamburger" />
        <?php include "navbar.php"; ?>

        <div class="container-fluid mt-5 d-flex justify-content-center flex-column align-items-center">
            <h1 class="text-light text-center mt-5">All Products</h1>
            <div class="search-bar search d-flex align-items-center justify-content-around">
                <input type="text" class="form-control col-5" placeholder="Search Product" id="searchBar">
                <button class="" onclick="searchProduct();">Search</button>
                <button class="ms-2" onclick="catFilter();">Filter</button>

                <!-- Filter -->
                <div class="filters ms-2">
                    <select class="form-select" id="filter">
                        <option value="0">Category</option>
                        <?php
                        for ($i = 0; $i < $num; $i++) {
                            $d = $rs->fetch_assoc();


                            ?>
                            <option value="<?php echo $d["cat_id"] ?>"><?php echo $d["cat_name"] ?></option>

                        <?php } ?>
                    </select>

                </div>
            </div>
            <div class="row col-12 d-flex justify-content-center mt-5">
                <div class="product-cards text-center col-12 d-flex justify-content-center flex-wrap" id="productDetails">

                </div>
            </div>
        </div>

        <div aria-label="Page navigation example mt-5">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </div>

        <script src="script.js"></script>
    </body>

    </html>




    <?php

} else {
    $rs = Database::search("SELECT * FROM `category`");
    $num = $rs->num_rows;


    ?>


    <!-- Body -->

    <body class="body" id="body" onload="loadproduct(0);">
        <input type="checkbox" id="hamburger" />
        <!-- Nav Bar -->

        <nav class="fixed-top">
            <label for="hamburger"><i
                    class="fa-solid fa-ellipsis-vertical nav-icon d-flex justify-content-center"></i></label>
            <div class="logo">
                <a href="index.php"><img src="Resources/Logo.png" alt="" /></a>
            </div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php" data-toggle="tooltip" data-placement="bottom" title="All Products" class="active">Shop</a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Contact Us">Contact us</a></li>
                <li><a href="signup.php"><button type="button" data-toggle="tooltip" data-placement="bottom"
                            title="Register">Login/Register</button></a></li>
                <div class="cart_wishlist">
                    <a href="signin.php"><i class="fa-solid fa-cart-shopping" data-toggle="tooltip" data-placement="bottom"
                            title="Your Cart"></i></a>
                    <a href="signin.php"><i class="fa-solid fa-user" data-toggle="tooltip" data-placement="bottom"
                            title="User Profile"></i></a>
                </div>
        </nav>
        <!-- Nav Bar -->



        <div class="container-fluid mt-5 d-flex justify-content-center flex-column align-items-center">
            <h1 class="text-light text-center mt-5">All Products</h1>
            <div class="search-bar search d-flex align-items-center justify-content-around">
                <input type="text" class="form-control col-5" placeholder="Search Product" id="searchBar">
                <button class="" onclick="searchProduct();">Search</button>
                <button class="ms-2" onclick="catFilter();">Filter</button>

                <!-- Filter -->
                <div class="filters ms-2">
                    <select class="form-select" id="filter">
                        <option value="0">Category</option>
                        <?php
                        for ($i = 0; $i < $num; $i++) {
                            $d = $rs->fetch_assoc();


                            ?>
                            <option value="<?php echo $d["cat_id"] ?>"><?php echo $d["cat_name"] ?></option>

                        <?php } ?>
                    </select>

                </div>
            </div>
            <div class="row col-12 d-flex justify-content-center mt-5">
                <div class="product-cards text-center col-12 d-flex justify-content-center flex-wrap" id="productDetails">

                </div>
            </div>
        </div>

        <div aria-label="Page navigation example mt-5">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </div>

        <script src="script.js"></script>
    </body>

    </html>

    <?php

}
?>