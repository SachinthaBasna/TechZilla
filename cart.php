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


    <body class="body text-light" onload="loadCart();">
        <?php include "navBar.php" ?>
        <div class="container mt-5">


            <div class="row" id="cartBody">

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