<?php
include "connection.php";

$pname = $_POST["pname"];
$brand = $_POST["brand"];
$cat = $_POST["cat"];
$cpu = $_POST["cpu"];
$ram = $_POST["ram"];
$capacity = $_POST["capacity"];
$desc = $_POST["desc"];

// print_r($file);

if (empty($pname)) {
    echo ("Please Enter the Product Name!");
} else if ($brand == "0") {
    echo ("Please Select a Brand");
} else if ($cat == "0") {
    echo ("Please Select a Category");
} else if ($brand == "0") {
    echo ("Please Select a Brand");
} else if ($cpu == "0") {
    echo ("Please Select a cpu");
} else if ($ram == "0") {
    echo ("Please Select a ram");
} else if ($capacity == "0") {
    echo ("Please Select a capacity");
} else if (empty($desc)) {
    echo ("Please enter a description");
} else {
    if (isset($_FILES["image"])) {
        $image = $_FILES["image"];


        $path = "Resources/productImg/" . uniqid() . ".png";   // Define Image path
        move_uploaded_file($image["tmp_name"], $path);   // Save Uploaded file

        $rs = Database::search("SELECT * FROM `product` WHERE `name` = '.$pname.'");
        $num = $rs->num_rows;

        if ($num > 0) {
            echo ("Product has been already registerd");
        } else {
            Database::iud("INSERT INTO `product`(`name`, `description`, `path`, `cpu_id`, `ram_id`, `cat_id`, `brand_id`, `capacity_id`)
            VALUES('" . $pname . "', '" . $desc . "', '" . $path . "', '" . $cpu . "', '" . $ram . "','" . $cat . "', '" . $brand . "', '" . $capacity . "')");

            echo ("Success");
        }

    } else {
        echo ("Please Select a prodcut image");
    }
}

?>