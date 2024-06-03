<?php
session_start();

include "connection.php";

if (isset($_SESSION["a"])) {


    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="bootstrap.css" />
        <title>Stock management</title>
    </head>

    <body class="body">
        <?php
        include "adminNavBar.php";

        ?>

        <div class="adminBody">
            <div class="row text-light gap-5">

                <div class="col-5">
                    <h2 class="text-center">Product Registration</h2>
                    <div class="mb-3">
                        <label class="form-label" for="">Product Name</label>
                        <input type="text" class="form-control" id="pname">
                    </div>

                    <div class="row">

                        <div class="mb-3 col-6">
                            <label class="form-label" for="">Brand</label>
                            <select class="form-select" id="brand">
                                <option value="0">Select</option>
                                <?php
                                $rs = Database::search("SELECT * FROM `brand`");
                                $num = $rs->num_rows;

                                for ($x = 0; $x < $num; $x++) {
                                    $data = $rs->fetch_assoc();
                                    ?>
                                    <option value="<?php echo ($data["brand_id"]); ?>"><?php echo ($data["brand_name"]); ?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="mb-3 col-6">
                            <label class="form-label" for="">Category</label>
                            <select class="form-select" id="cat">
                                <option value="0">Select</option>

                                <?php
                                $rs = Database::search("SELECT * FROM `category`");

                                $num = $rs->num_rows;

                                for ($x = 0; $x < $num; $x++) {
                                    $data = $rs->fetch_assoc();
                                    ?>
                                    <option value="<?php echo ($data["cat_id"]); ?>"><?php echo ($data["cat_name"]); ?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>


                        <div class="mb-3 col-6">
                            <label class="from-label" for="">CPU</label>
                            <select class="form-select" id="cpu">
                                <option value="0">Select</option>

                                <?php
                                $rs = Database::search("SELECT * FROM `cpu`");

                                $num = $rs->num_rows;

                                for ($x = 0; $x < $num; $x++) {
                                    $data = $rs->fetch_assoc();
                                    ?>
                                    <option value="<?php echo ($data["cpu_id"]); ?>"><?php echo ($data["cpu_name"]); ?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="mb-3 col-6">
                            <label class="from-label" for="">RAM</label>
                            <select class="form-select" id="ram">
                                <option value="0">Select</option>

                                <?php
                                $rs = Database::search("SELECT * FROM `ram`");

                                $num = $rs->num_rows;

                                for ($x = 0; $x < $num; $x++) {
                                    $data = $rs->fetch_assoc();
                                    ?>
                                    <option value="<?php echo ($data["ram_id"]); ?>"><?php echo ($data["ram_size"]. "GB"); ?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 col-12">
                        <label class="from-label" for="">Capacity</label>
                        <select class="form-select" id="capacity">
                            <option value="0">Select</option>
                            <?php
                            $rs = Database::search("SELECT * FROM `capacity`");
                            $num = $rs->num_rows;

                            for ($x = 0; $x < $num; $x++) {
                                $data = $rs->fetch_assoc();
                                ?>
                                <option value="<?php echo ($data["capacity_id"]); ?>">
                                    <?php echo ($data["capacity_size"] . "GB"); ?>
                                </option>

                                <?php
                            }


                            ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <textarea class="form-control" id="desc"></textarea>
                    </div>


                    <div class="mb-3">
                        <label for="" class="form-label">Product Image</label>
                        <input type="file" class="form-control" id="file">
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-success" onclick="regProduct();">Register Product</button>
                    </div>
                </div>



                <div class="col-6">
                    <h2 class="text-center">Stock Update</h2>
                    <div class="mb-3">
                        <label for="" class="form-label">Product Name</label>
                        <select class="form-select">
                            <option>Select</option>
                            <option>MSI</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Qty</label>
                        <select class="form-select col-12">
                            <option>Select</option>
                            <option>1</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Unit Price</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-success">Update Stock</button>
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
    echo "You're Not a admin";
}
?>