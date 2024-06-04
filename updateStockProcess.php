<?php
include "connection.php";

$productId = $_POST["p"];
$qty = $_POST["q"];
$price = $_POST["up"];

if (empty($qty)) {
    echo ("Please Enter Quentity");
} else if (!is_numeric($qty)) {
    echo ("Only Number can enter to quentity");
} else if (strlen($qty) > 10) {
    echo ("Your Quentity should be less thean 10 characters");
} else if (empty($price)) {
    echo ("Please Enter unit price");
} else if (!is_numeric($price)) {
    echo ("Only Number can enter to unit price");
} else if (strlen($price) > 10) {
    echo ("Your unit price should be less thean 10 characters");
} else {
    $rs = Database::search("SELECT * FROM `stock` WHERE `product_id` = '" . $productId . "' AND `price` = '" . $price . "'");
    $num = $rs->num_rows;
    $d = $rs->fetch_assoc();

    if ($num == 1) {
        $newQty = $d["qty"] + $qty;
        Database::iud("UPDATE `stock` SET `qty` = '" . $newQty . "' WHERE `stock_id` = '" . $d["stock_id"] . "'");
        echo("Stock Updated Successfully");
    } else {
        Database::iud("INSERT INTO `stock` (`price`, `qty`, `product_id`) VALUES('".$price."', '".$qty."', '".$productId."')");
        echo("New Stock Added Successfully");
    }
}
?>