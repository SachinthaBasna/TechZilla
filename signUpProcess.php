<?php

include "connection.php";

$fname = $_POST["f"];
$lname = $_POST["l"];
$mobile = $_POST["m"];
$uname = $_POST["u"];
$email = $_POST["e"];
$password = $_POST["p"];


$q = "INSERT INTO `user`(`fname`,`lname`,`mobile`,`uname`,`email`,`password`) 
    VALUES('" . $fname . "', '" . $lname . "', '" . $mobile . "', '" . $uname . "', '" . $email . "', '" . $password . "')";


if (empty($fname)) {
    echo ("Please Enter Your First Name");
} else if (strlen($fname) > 20) {
    echo ("Your First Name Should be less than 20 Characters");
} else if (empty($lname)) {
    echo ("Please Enter Your Last Name");
} else if (strlen($lname) > 20) {
    echo ("Your Last Name Should be less than 20 Characters");
} else if (empty($email)) {
    echo ("Please Enter Your Email");
} else if (strlen($email) > 100) {
    echo ("Your Email Address Should be less than 100 Characters");
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo ("Your Email Address is Invalid");
} else if (empty($mobile)) {
    echo ("Please Enter Your Mobile");
} else if (strlen($mobile) != 10) {
    echo ("Your mobile Number must contain 10 Characters");
} else if (!preg_match("/07[0,1,2,4,5,6,7,8]{1}[0-9]{7}/", $mobile)) {
    echo ("Your Mobile Number is Invalid");
} else if (empty($uname)) {
    echo ("Please Enter Your Username");
} else if (strlen($uname) > 20) {
    echo ("Your Username Should be less than 20 Characters");
} else if (empty($password)) {
    echo ("Please Enter Your Password");
} else if (strlen($password) < 5 || strlen($password) > 45) {
    echo ("Your Password must contain 5 - 45 Characters");
} else {
    $rs = Database::search("SELECT * FROM `user` WHERE `email` = '" . $email . "' OR `mobile` = '" . $mobile . "' OR `uname` = '" . $uname . "' ");
    $num = $rs->num_rows;

    if ($num > 0) {
        echo ("Your Email OR Username OR Mobile Already Exists");
    } else {
        // Insert Data
        Database::iud("INSERT INTO `user` (`fname`,`lname`,`email`,`mobile`,`uname`,`password`,`user_type_id`)
        VALUES ('" . $fname . "','" . $lname . "','" . $email . "','" . $mobile . "','" . $uname . "','" . $password . "','2')");

        echo ("Success");
    }
}

?>