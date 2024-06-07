<?php

include "connection.php";
session_start();

if (!isset($_SESSION["u"])) {
    die(json_encode(["error" => "User not logged in"]));
}

$user = $_SESSION["u"];

$stockList = array();
$qtyList = array();

if (isset($_POST["cart"]) && $_POST["cart"] == "true") {
    // From Cart

    $rs = Database::search("SELECT * FROM `cart` WHERE `user_id` = '" . $user["id"] . "'");
    if ($rs) {
        $num = $rs->num_rows;

        for ($i = 0; $i < $num; $i++) {
            $d = $rs->fetch_assoc();
            if ($d) {
                $stockList[] = $d["stock_stock_id"];
                $qtyList[] = $d["cart_qty"];
            }
        }
    } else {
        die(json_encode(["error" => "Failed to fetch cart details"]));
    }
} else {
    echo json_encode(["message" => "From Buy now"]);
    exit();
}

$merchant_id = "1224091";
$merchant_secret = "MjQ5NzY5MDY0MDIzOTU5MzkxMjUyNDkyMjA4ODk0NDc4NzY5MTk2";
$items = "";
$netTotal = 0;
$currency = "LKR";
$orderId = uniqid();

for ($i = 0; $i < sizeof($stockList); $i++) {
    $rs2 = Database::search("SELECT * FROM `stock` INNER JOIN `product` ON `stock`.`product_id` = `product`.`id` WHERE `stock`.`stock_id` = '" . $stockList[$i] . "'");
    if ($rs2) {
        $d2 = $rs2->fetch_assoc();
        if ($d2) {
            $stockQty = $d2["qty"];

            if ($stockQty >= $qtyList[$i]) {
                // Stock Available
                $items .= $d2["name"];

                if ($i != sizeof($stockList) - 1) {
                    $items .= ", ";
                }

                $netTotal += (intval($d2["price"]) * intval($qtyList[$i]));
            } else {
                die(json_encode(["error" => "Product has no available stock"]));
            }
        } else {
            die(json_encode(["error" => "Failed to fetch stock details for item $i"]));
        }
    } else {
        die(json_encode(["error" => "Database query failed for item $i"]));
    }
}

// Delivery Fee
$netTotal += 500;

$hash = strtoupper(
    md5(
        $merchant_id .
        $orderId .
        number_format($netTotal, 2, '.', '') .
        $currency .
        strtoupper(md5($merchant_secret))
    )
);

$payment = array();
$payment["sandbox"] = true;
$payment["merchant_id"] = $merchant_id;
$payment["first_name"] = $user["fname"];
$payment["last_name"] = $user["lname"];
$payment["email"] = $user["email"];
$payment["phone"] = $user["mobile"];
$payment["address"] = $user["no"] . ", " . $user["line_1"];
$payment["city"] = $user["line_2"];
$payment["country"] = "Sri Lanka";
$payment["order_id"] = $orderId;
$payment["items"] = $items;
$payment["currency"] = $currency;
$payment["amount"] = number_format($netTotal, 2, '.', '');
$payment["hash"] = $hash;
$payment["return_url"] = "";
$payment["cancel_url"] = "";
$payment["notify_url"] = "";

echo json_encode($payment);

?>