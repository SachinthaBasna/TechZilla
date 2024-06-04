<?php
session_start();

if (isset($_SESSION["a"])) {

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TechZilla - Admin Dashboard</title>
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="bootstrap.css" />
    </head>

    <body class="body">
        <?php include "adminNavBar.php"; ?>
        <div class="adminBody text-light">
            <div class="col-10">
                <h1 class="text-center">Reports</h1>
                <div class="row gap-2 justify-content-center mt-2">
                    <div class="col-3">
                        <a href="adminReportStock.php"><button class="btn btn-secondary col-12">Stock Report</button></a>
                    </div>

                    <div class="col-3">
                        <a href="adminReportProduct.php"><button class="btn btn-secondary col-12">Product Report</button></a>
                    </div>

                    <div class="col-3">
                        <a href="adminReportUser.php"><button class="btn btn-secondary col-12">User Report</button></a>
                    </div>

                </div>
            </div>
        </div>























        <footer class="fixed-bottom col-12">
            <p class="text-secondary text-center">&copy; TechZilla All Rights Reserved</p>
        </footer>

        <script src="script.js"></script>
    </body>

    </html>

    <?php

} else {
    echo ("You're not a admin!");
}
?>