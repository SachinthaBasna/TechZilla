<?php
session_start();
include "connection.php";


if (isset($_SESSION["a"])) {
    $rs = Database::search("SELECT * FROM `user` INNER JOIN `user_type` ON `user`.`user_type_id` = `user_type`.`id`");
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
            <h2 class="text-center">User Report</h2>
            <div>
                <table class="table table-responsive table-bordered table-dark d-print-block text-center d-print-table"
                    id="print">

                    <thead>
                        <tr>
                            <th>User Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>mobile</th>
                            <th>User Name</th>
                            <th>email</th>
                            <th>status</th>
                            <th>User Type</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        for ($i = 0; $i < $num; $i++) {
                            $d = $rs->fetch_assoc();
                            ?>
                            <tr>
                                <td><?php echo ($d["id"]); ?></td>
                                <td><?php echo ($d["fname"]); ?></td>
                                <td><?php echo ($d["lname"]); ?></td>
                                <td><?php echo ($d["mobile"]); ?></td>
                                <td><?php echo ($d["uname"]); ?></td>
                                <td><?php echo ($d["email"]); ?></td>
                                <td><?php

                                if ($d["status"] == 1) {
                                    echo("Active");
                                } else {
                                    echo("Inactive");
                                }

                                ?></td>
                                <td><?php echo ($d["type"]); ?></td>
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