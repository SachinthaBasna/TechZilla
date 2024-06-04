<?php
session_start();
include "connection.php";


if (isset($_SESSION["a"])) {
    $rs = Database::search("SELECT * FROM `stock` INNER JOIN `product` ON `stock`.`product_id` = `product`.`id` ORDER BY `stock`.`stock_id` ASC");
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
                    style="color: white; font-size: 30px; background: rgba(255,255,255,.2); padding: 10px;"></i></a>
        </div>

        <div class="container">
            <h2 class="text-center">Stock Report</h2>
            <div>
                <table class="table table-responsive table-bordered table-dark d-print-block text-center d-print-table"  id="print">

                    <thead>
                        <tr>
                            <th>Stock Id</th>
                            <th>Product Name</th>
                            <th>Stock QTY</th>
                            <th>Unit Price</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        for ($i = 0; $i < $num; $i++) {
                            $d = $rs->fetch_assoc();
                            ?>
                            <tr>
                                <td><?php echo ($d["stock_id"]); ?></td>
                                <td><?php echo ($d["name"]); ?></td>
                                <td><?php echo ($d["qty"]); ?></td>
                                <td><?php echo ($d["price"]); ?></td>
                            </tr>
                            <?php
                        }

                        ?>

                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-end container mt-5">
                <button class="btn btn-warning col-2" onclick="printStock()">Print</button>
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