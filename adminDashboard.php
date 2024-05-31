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

    <body class="body" onload="loadUser();">
        <div class="container col-12 mt-4 fixed-top">
            <?php include "adminNavbar.php" ?>

        </div>


        <div class=" mt-5 col-12 table1">


            <h1 class="text-light">User Management</h1>

            <div class="row col-10 d-flex justify-content-end">

                <!-- Msg Div -->
                <div id="msgDiv" onclick="reload();">
                    <div class="alert alert-success d-none" id="msg"></div>
                </div>
                <!-- Msg Div -->

                <!-- Change Status -->
                <div class="col-2">
                    <input type="text" class="form-control dark" placeholder="userId" id="uid">
                </div>
                <button type="button" class="btn btn-dark col-2" onclick="updateUserStatus();">Change Status</button>
                <!-- Change Status -->
            </div>


            <div class="col-10 mt-2">
                <table class="table table-striped table-dark text-center table-hover">
                    <thead>
                        <tr>
                            <th scope="col">UserId</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">email</th>
                            <th scope="col">mobile</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody id="tb">

                    </tbody>
                </table>
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
    echo ("You're not a admin mf");
}
?>