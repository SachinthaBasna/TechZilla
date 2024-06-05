<?php
include "connection.php";


session_start();

if (isset($_SESSION["u"])) {
    if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
        $username = $_COOKIE['username'];
        $password = $_COOKIE['password'];

        $rs = Database::search("SELECT * FROM `user` WHERE `uname` = '" . $username . "' AND `password` = '" . $password . "'");
        $num = $rs->num_rows;

        for ($i = 0; $i < $num; $i++) {
            $d = $rs->fetch_assoc();




            ?>
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

            <!-- Body -->

            <body class="body" id="body">

                <input type="checkbox" id="hamburger" />
                <!-- Nav Bar -->

                <nav class="">
                    <label for="hamburger"><i
                            class="fa-solid fa-ellipsis-vertical nav-icon d-flex justify-content-center"></i></label>
                    <div class="logo">
                        <a href="index.php"><img src="Resources/Logo.png" alt="" /></a>
                    </div>
                    <ul>
                        <li><a href="index.php" class="active">Home</a></li>
                        <li><a href="products.php" data-toggle="tooltip" data-placement="bottom" title="All Products">Shop</a></li>
                        <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Contact Us">Contact us</a></li>
                        <li><button type="button" data-toggle="tooltip" data-placement="bottom" title="Log out"
                                onclick="logoutUser();">Log out</button></li>
                        <div class="cart_wishlist">
                            <i class="fa-solid fa-cart-shopping" data-toggle="tooltip" data-placement="bottom"
                                title="Your Cart"></i>
                            <a href="userProfile.php"><i class="fa-solid fa-user" data-toggle="tooltip" data-placement="bottom"
                                    title="User Profile"></i></a>
                        </div>
                </nav>
                <!-- Nav Bar -->


                <div class="container position position-relative mt-5">
                    <div class="row text-light gap-5">
                        <div class="col-4 d-flex flex-column">
                            <div class="img col-8 mt-5">
                                <img src="<?php echo $d["img_path"]?>" alt="Profilie Picture" class="img-fluid">
                                <input type="file" class="form-control mt-2" id="file">
                            </div>
                        </div>

                        <div class="col-6">

                            <h1 class="mt-0 fw-bold">Sachintha Basnayaka</h1>

                            <div class="mt-5 p-2">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="fname" class="form-lable">First Name</label>
                                        <input type="text" id="fname" class="form-control" value="<?php echo $d["fname"]; ?>">
                                    </div>

                                    <div class="col-6">
                                        <label for="lname" class="form-lable">Last Name</label>
                                        <input type="text" id="lname" class="form-control"  value="<?php echo $d["lname"]; ?>">
                                    </div>

                                    <div class="col-6 mt-2">
                                        <label for="mobile" class="form-lable">mobile</label>
                                        <input type="text" id="mobile" class="form-control"  value="<?php echo $d["mobile"]; ?>">
                                    </div>

                                    <div class="col-6 mt-2">
                                        <label for="email" class="form-lable">email</label>
                                        <input type="email" id="email" class="form-control"  value="<?php echo $d["email"]; ?>">
                                    </div>

                                    <div class="col-2 mt-2">
                                        <label for="no" class="form-lable">No</label>
                                        <input type="text" id="no" class="form-control" value="<?php echo $d["no"]; ?>">
                                    </div>

                                    <div class="col-4 mt-2">
                                        <label for="line1" class="form-lable">Address line 1</label>
                                        <input type="text" id="line1" class="form-control" value="<?php echo $d["line_1"]; ?>">
                                    </div>

                                    <div class="col-6 mt-2">
                                        <label for="line1" class="form-lable">Address line 2</label>
                                        <input type="text" id="line2" class="form-control" value="<?php echo $d["line_2"]; ?>">
                                    </div>

                                    <div class="col-6 mt-2">
                                        <label for="password" class="form-lable">Password</label>
                                        <input type="password" id="password" class="form-control" value="<?php echo $d["password"]; ?>">
                                    </div>

                                    <div class="col-6 mt-2">
                                        <button class="btn btn-warning mt-4">Change Password</button>
                                    </div>

                                    <div class="col-12 mt-5 d-flex d-fle">
                                        <button class="btn btn-primary col-6" onclick="updateUserDetails();" ;>Save Details</button>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <script src="script.js"></script>
            </body>

            </html>


            <?php

        }
    } else {
        include "signIn.php";
    }
} else {
    include "signIn.php";

}
?>