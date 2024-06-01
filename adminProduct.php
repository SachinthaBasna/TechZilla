<?php
session_start();

if (isset($_SESSION["a"])) {


    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="bootstrap.css" />
        <title>Product Management</title>
    </head>

    <body class="body">
        <?php include "adminNavbar.php"; ?>
        <div class="adminBody text-light">
            <div class="col-12">
                <h2 class="text-center">Product Management</h2>

                <div class="row d-flex justify-content-center">
                    <div class="col-4 p-4 text-center">
                        <label for="form-label">Brand Name</label>
                        <input type="text" class="form-control" id="brand">
                        <div class="alert alert-danger mt-2 d-none" id="msgB"></div>
                        <button class="btn btn-dark col-12 mt-1" onclick="brand()">Brand Register</button>
                    </div>

                    <div class="col-4 p-4 text-center">
                        <label for="form-label">Category Name</label>
                        <input type="text" class="form-control" id="cat">
                        <div class="alert alert-danger mt-2 d-none" id="msgC"></div>
                        <button class="btn btn-dark col-12 mt-2" onclick="catReg()">Category Register</button>
                    </div>
                </div>

                <div class="row d-flex justify-content-center">
                    <div class="col-4 p-4 text-center">
                        <label for="form-label">CPU</label>
                        <input type="text" class="form-control" id="cpu">
                        <div class="alert alert-danger mt-2 d-none" id="msgCPU"></div>
                        <button class="btn btn-dark col-12 mt-2" onclick="cpuReg()">CPU Register</button>
                    </div>

                    <div class="col-4 p-4 text-center">
                        <label for="form-label">RAM</label>
                        <input type="text" class="form-control" id="ram">
                        <div class="alert alert-danger mt-2 d-none" id="msgRAM"></div>
                        <button class="btn btn-dark col-12 mt-2" onclick="ramReg();">RAM Register</button>
                    </div>
                </div>

                <div class="row d-flex justify-content-center">
                    <div class="col-4 p-4 text-center">
                        <label for="form-label">Capacity</label>
                        <input type="text" class="form-control" id="cap">
                        <div class="alert alert-danger mt-2 d-none" id="msgCap"></div>
                        <button class="btn btn-dark col-12 mt-2" onclick="capReg();">Capacity Register</button>
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