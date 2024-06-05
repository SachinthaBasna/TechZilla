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

    $stockId = $_GET['stockId'];
    $rs = Database::search("SELECT * FROM `stock`
    JOIN `product` ON `stock`.`product_id` = `product`.`id`
    JOIN `category` ON `product`.`cat_id` = `category`.`cat_id`
    JOIN `cpu` ON `product`.`cpu_id` = `cpu`.`cpu_id`
    JOIN `ram` ON `product`.`ram_id` = `ram`.`ram_id`
    JOIN `brand` ON `product`.`brand_id` = `brand`.`brand_id`
    JOIN `capacity` ON `product`.`capacity_id` = `capacity`.`capacity_id`
    WHERE `stock`.`stock_id` = $stockId");

    $num = $rs->num_rows;




    if ($rs && $rs->num_rows > 0) {
        // Fetch the product data
        $d = $rs->fetch_assoc();
        ?>

        <body class="body text-light">
            <?php include 'navBar.php' ?>

            <div class="container adminBody gap-5">
                <div class="col-6 img-wrapper">
                    <img class="" src="<?php echo ($d["path"]) ?>" height="500px">
                </div>
                <div class="d-flex flex-column mt-5">
                    <div>
                        <h1 class="text-bold"><?php echo ($d["name"]); ?></h1>
                        <p class="text-success"><?php echo ($d["cat_name"]) ?></p>
                    </div>

                    <div>
                        <h2 class="text-bold"><?php echo "Rs. " . ($d["price"]) ?></h2>
                    </div>

                    <div data-mdb-input-init class="col-3">
                        <label class="form-label" for="qty">Quentity</label>
                        <input type="number" id="qty" class="form-control" value="0" />
                    </div>

                    <div data-mdb-input-init class="mt-3">
                        <p>Description</p>
                        <p class="opacity-50"><?php echo ($d["description"]) ?></p>
                    </div>


                    <div data-mdb-input-init class="mt-3 row">
                        <p class="opacity-75">Brand: <?php echo ($d["brand_name"]) ?></p>
                        <p class="opacity-75">CPU: <?php echo ($d["cpu_name"]) ?></p>
                        <p class="opacity-75">RAM: <?php echo ($d["ram_size"]) . "GB" ?></p>
                        <p class="opacity-75">Capacity: <?php echo ($d["capacity_size"]) . "GB" ?></p>
                    </div>

                    <div data-mdb-input-init class="row gap-2 mt-3">
                        <button class="btn btn-dark col-5">Add to cart <i class="fa-solid fa-cart-shopping"></i></button>
                        <button class="btn btn-warning col-5">Buy Now $</button>
                    </div>
                </div>
            </div>




            <script src="script.js"></script>
        </body>

        </html>


        <?php

    }

} else {
    $stockId = $_GET['stockId'];
    $rs = Database::search("SELECT * FROM `stock`
    JOIN `product` ON `stock`.`product_id` = `product`.`id`
    JOIN `category` ON `product`.`cat_id` = `category`.`cat_id`
    JOIN `cpu` ON `product`.`cpu_id` = `cpu`.`cpu_id`
    JOIN `ram` ON `product`.`ram_id` = `ram`.`ram_id`
    JOIN `brand` ON `product`.`brand_id` = `brand`.`brand_id`
    JOIN `capacity` ON `product`.`capacity_id` = `capacity`.`capacity_id`
    WHERE `stock`.`stock_id` = $stockId");

    $num = $rs->num_rows;




    if ($rs && $rs->num_rows > 0) {
        // Fetch the product data
        $d = $rs->fetch_assoc();
        ?>

        <body class="body text-light">
            <!-- Nav Bar -->

            <nav class="fixed-top">
                <label for="hamburger"><i
                        class="fa-solid fa-ellipsis-vertical nav-icon d-flex justify-content-center"></i></label>
                <div class="logo">
                    <a href="index.php"><img src="Resources/Logo.png" alt="" /></a>
                </div>
                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="products.php" data-toggle="tooltip" data-placement="bottom" title="All Products"
                            >Shop</a></li>
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

            <div class="container adminBody gap-5">
                <div class="col-6 img-wrapper">
                    <img class="" src="<?php echo ($d["path"]) ?>" height="500px">
                </div>
                <div class="d-flex flex-column mt-5">
                    <div>
                        <h1 class="text-bold"><?php echo ($d["name"]); ?></h1>
                        <p class="text-success"><?php echo ($d["cat_name"]) ?></p>
                    </div>

                    <div>
                        <h2 class="text-bold"><?php echo "Rs. " . ($d["price"]) ?></h2>
                    </div>

                    <div data-mdb-input-init class="col-3">
                        <label class="form-label" for="qty">Quentity</label>
                        <input type="number" id="qty" class="form-control" value="0" />
                    </div>

                    <div data-mdb-input-init class="mt-3">
                        <p>Description</p>
                        <p class="opacity-50"><?php echo ($d["description"]) ?></p>
                    </div>


                    <div data-mdb-input-init class="mt-3 row">
                        <p class="opacity-75">Brand: <?php echo ($d["brand_name"]) ?></p>
                        <p class="opacity-75">CPU: <?php echo ($d["cpu_name"]) ?></p>
                        <p class="opacity-75">RAM: <?php echo ($d["ram_size"]) . "GB" ?></p>
                        <p class="opacity-75">Capacity: <?php echo ($d["capacity_size"]) . "GB" ?></p>
                    </div>

                    <div data-mdb-input-init class="row gap-2 mt-3">
                        <button class="btn btn-dark col-5">Add to cart <i class="fa-solid fa-cart-shopping"></i></button>
                        <button class="btn btn-warning col-5">Buy Now $</button>
                    </div>
                </div>
            </div>




            <script src="script.js"></script>
        </body>

        <?php
    }
}
?>