<?php
session_start();
include "connection.php";


if (isset($_SESSION["a"])) {
    $rs = Database::search("SELECT * FROM `product` INNER JOIN `brand` ON `product`.`brand_id` = `brand`.`brand_id` 
    INNER JOIN `capacity` ON `product`.`capacity_id`= `capacity`.`capacity_id` 
    INNER JOIN `category` ON `product`.`cat_id` = `category`.`cat_id`
    INNER JOIN `cpu` ON `product`.`cpu_id` = `cpu`.`cpu_id`
    INNER JOIN `ram` ON `product`.`ram_id` = `ram`.`ram_id`;");
    $num = $rs->num_rows;
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TechZilla - Admin Dashboard</title>
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="bootstrap.css" />
    </head>

    <body class="body text-light">
        <div class="container mt-5">
            <a href="adminReport.php"><i class="fa fa-arrow-left" aria-hidden="true"
                    style="color: white; font-size: 20px; background: rgba(255,255,255,.2); padding: 10px;"></i></a>
        </div>

        <div class="container-fluid">
            <h2 class="text-center">Product Report</h2>
            <div>
                <table class="table table-responsive table-bordered table-dark d-print-block text-center d-print-table"
                    id="print">

                    <thead>
                        <tr>
                            <th>Product Id</th>
                            <th>Product Name</th>
                            <th>Brand</th>
                            <th>Category</th>
                            <th>CPU</th>
                            <th>capacity</th>
                            <th>RAM</th>
                            <th>Description</th>
                            <th>Product Image</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        for ($i = 0; $i < $num; $i++) {
                            $d = $rs->fetch_assoc();
                            ?>
                            <tr>
                                <td><?php echo ($d["id"]); ?></td>
                                <td><?php echo ($d["name"]); ?></td>
                                <td><?php echo ($d["brand_name"]); ?></td>
                                <td><?php echo ($d["cat_name"]); ?></td>
                                <td><?php echo ($d["cpu_name"]); ?></td>
                                <td><?php echo ($d["capacity_size"]); ?></td>
                                <td><?php echo ($d["ram_size"]); ?></td>
                                <td><?php echo ($d["description"]); ?></td>
                                <td class="m-0"><img src="<?php echo ($d["path"]); ?>" height="80px"></td>
                            </tr>
                            <?php
                        }

                        ?>

                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-end container mt-5">
                <button class="btn btn-warning col-2 mb-5" onclick="printStock()">Print</button>
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