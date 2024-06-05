<?php

// echo("OK");
include "connection.php";

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$no = $_POST["no"];
$line1 = $_POST["line1"];
$line2 = $_POST["line2"];
$password = $_POST["pw"];


// echo($email);



if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
    $username = $_COOKIE['username'];
    $password = $_COOKIE['password'];

    $img = $_FILES["img"];

    $rs = Database::search("SELECT * FROM `user`");
    $num = $rs->num_rows;


    $path = "Resources/ProfileImg/" . uniqid() . ".png";   // Define Image path
    // Save Uploaded file
    move_uploaded_file($img["tmp_name"], $path);

    for ($i = 0; $i < $num; $i++) {
        $d = $rs->fetch_assoc();



        Database::iud("UPDATE `user` SET `fname` = '" . $fname . "', `lname` = '" . $lname . "', `mobile` = '" . $mobile . "', `email` = '" . $email . "', `line_1` = '" . $line1 . "', `line_2` = '" . $line2 . "', `no` = '" . $no . "', `img_path` = '" . $path . "'  WHERE  `uname` = '" . $username . "' AND `password` = '" . $password . "';");


    }
    echo ("success");
} else {
    echo ("error");
}



?>