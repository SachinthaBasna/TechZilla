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

$user = $_SESSION["u"];

if (isset($user)) {
    ?>


    <body class="body text-light">
        <?php include "navBar.php" ?>
        <div class="container mt-5">


            <div class="row" id="cartBody">
                <div class="mb-5">
                    <div class="mb-4 mt-4">
                        <h3>Cart</h3>
                    </div>

                    <!-- cart Items -->
                    <div class="col-12 border border-2 rounded p-3 mb-2 border-dark d-flex justify-content-between">
                        <div class="d-flex align-items-center col-5">
                            <img src="Resources/productImg/665c76f52c20e.png" height="200px" class="rounded">
                            <div class="ms-5">
                                <h4>Product Name</h4>
                                <p class="opacity-75">Category: Gaming PC</p>
                                <p class="opacity-75">Brand: ASUS</p>
                                <p class="opacity-75">Rs. 186400</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <button class="btn btn-outline-light">-</button>
                            <input type="number" class="form-control" disabled style="max-width: 100px;">
                            <button class="btn btn-outline-light">+</button>
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <p>Total</p>
                            <h4>Rs. 186400.00/= </h4>
                        </div>
                        <div class="col-2 d-flex justify-content-end">
                            <button class="btn btn-danger col-12">Remove From Cart</button>
                        </div>
                    </div>
                    <!-- cart Items -->

                    <div class="col-12 mt-4">
                        <hr>
                    </div>

                    <!-- Checkout -->
                    <div class="d-flex flex-column align-items-end">
                        <h6>Number Of items: 1</h6>
                        <h5>Delivery: Rs. 450</h5>
                        <h2>Net Total: <span class="text-warning">Rs. 186400</span></h2>
                        <button class="btn btn-outline-success col-3 mt-2 mb-4">Checkout</button>
                    </div>

                    <div class="d-flex mt-4 justify-content-center align-items-center flex-column">
                        <h1 class="text-center">No Items In your cart!</h1>
                        <a href="index.php"><button class="btn btn-primary">Return to Home</button></a>
                    </div>
                    <!-- Checkout  -->
                </div>
            </div>
        </div>

















        <script src="script.js"></script>
    </body>

    </html>

    <?php
} else {
    header("location: signIn.php");
}
?>