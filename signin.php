<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="lines.css">
    <title>Sign In</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body class="body">
    <input type="checkbox" id="hamburger" />
    <nav class="mt-4">
        <label for="hamburger"><i
                class="fa-solid fa-ellipsis-vertical nav-icon d-flex justify-content-center"></i></label>
        <div class="logo">
            <a href="index.php"><img src="Resources/Logo.png" alt="" /></a>
        </div>
        <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="#product1">Shop</a></li>
            <li><a href="#">Contact us</a></li>
        </ul>
        <div class="cart_wishlist">
            <i class="fa-solid fa-cart-shopping"></i>
            <i class="fa-solid fa-heart"></i>
        </div>
    </nav>




    <div class="container mt-5 col-12 d-flex justify-content-center align-items-center flex-column">

        <!-- Login -->
        <div class="col-10 p-4 text-light ">
            <h1 class="text-light text-bold">Login</h1>
            <?php

            $username = "";
            $password = "";

            if (isset($_COOKIE["username"])) {
                $username = $_COOKIE["username"];
            }

            if (isset($_COOKIE["password"])) {
                $password = $_COOKIE["password"];
            }

            ?>

            <div class="mt-2 row">
                <label for="form-label">user name</label>
                <input type="text" class="form-control" id="un" value="<?php echo $username?>">
            </div>

            <div class="mt-2 row">
                <label for="pw">Password</label>
                <input type="password" class="form-control" id="pw" value="<?php echo $username?>">
            </div>

            <div class="mt-2 mb-2">
                <input type="checkbox" class="form-check-input" id="rm" />
                <label for="form-label">Remember Me</label>
            </div>


            <div class="d-none" id="msgDiv2">
                <div class="msg1 alert alert-danger mt-2" id="msg2" role="alert">
                </div>
            </div>

            <div class="mt-4 row justify-content-center row">
                <button class="btn btn-success" onclick="signIn();">Sign In</button>

            </div>
        </div>
    </div>


    <script src="script.js"></script>
</body>

</html>