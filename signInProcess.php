<?php
session_start();
include "connection.php";

$username = $_POST["u"];
$password = $_POST["p"];
$rememberme = $_POST["r"];

// echo($username);

if (empty($username)) {
    echo ("Please Enter Your Username");
} else if (empty($password)) {
    echo ("Please Enter Your Password");
} else {
    $rs = Database::search("SELECT * FROM `user` WHERE `uname` = '" . $username . "' AND `password` = '" . $password . "'");
    $num = $rs->num_rows;
    $d = $rs->fetch_assoc();

    if ($num == 1) {

        if ($d["status"] == 1) {
            // Active User
            echo ("Success");

            $_SESSION["u"] = $d;
            setcookie("username", $username, time() + (60 * 60 * 24 * 365));
            setcookie("password", $password, time() + (60 * 60 * 24 * 365));
            if ($rememberme == "true") {
                // Set Cookie
                setcookie("username", $username, time() + (60 * 60 * 24 * 365));
                setcookie("password", $password, time() + (60 * 60 * 24 * 365));
            } else {
                // Destroy Cookie
                setcookie("username", "", -1);
                setcookie("password", "", -1);
            }
        } else {
            // Inactive User
            echo ("Inactive User");
        }
    } else {
        echo ("Invalid Username OR Password");
    }
}
?>