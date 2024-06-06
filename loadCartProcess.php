<?php
include "connection.php";
session_start();

$user = $_SESSION["u"];
$netTotal = 0;

$rs = Database::search("SELECT * FROM `cart` INNER JOIN `stock` ON `cart`.`stock_stock_id` = `stock`.`stock_id` 
INNER JOIN `product` ON `stock`.`product_id` = `product`.`id` 
INNER JOIN `category` ON `product`.`cat_id` = `category`.`cat_id`
INNER JOIN `brand` ON `product`.`brand_id` = `brand`.`brand_id`
WHERE `user_id` = '" . $user["id"] . "'");

$num = $rs->num_rows;

if ($num > 0) {
    ?>
    <div class="mb-5">
        <div class="mb-4 mt-4">
            <h3>Cart</h3>
        </div>

        <?php
        for ($i = 0; $i < $num; $i++) {
            $d = $rs->fetch_assoc();
            $total = $d["price"] * $d["cart_qty"];
            $netTotal += $total;

            ?>
            <!-- cart Items -->
            <div class="col-12 border border-2 rounded p-3 mb-2 border-dark d-flex justify-content-between">
                <div class="d-flex align-items-center col-5">
                    <img src="<?php echo $d["path"]?>" height="200px" class="rounded">
                    <div class="ms-5">
                        <h4><?php echo $d["name"]?></h4>
                        <p class="opacity-75">Category: <?php echo $d["cat_name"] ?></p>
                        <p class="opacity-75">Brand: <?php echo $d["brand_name"] ?></p>
                        <p class="text-warning fw-bold">Rs. <?php echo $d["price"] ?>.00/=</p>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <button class="btn btn-outline-light" onclick="decrementCartQty(<?php  echo $d['cart_id'] ?>)">-</button>
                    <input type="number" id="qty<?php echo $d['cart_id'] ?>" class="form-control text-center p-2" disabled value="<?php echo $d["cart_qty"]?>" style="max-width: 70px;">
                    <button class="btn btn-outline-light" onclick="incrementCartQty(<?php  echo $d['cart_id'] ?>)">+</button>
                </div>
                <div class="d-flex flex-column justify-content-center">
                    <p>Total</p>
                    <h4 class="fw-bold text-warning">Rs.<?php echo $total?>.00/= </h4>
                </div>
                <div class="col-2 d-flex justify-content-end">
                    <button class="btn btn-danger col-12" onclick="removeCart(<?php  echo $d['cart_id'] ?>)">Remove From Cart</button>
                </div>
            </div>
            <!-- cart Items -->
            <?php
            ?>
            <?php
        }
        ?>

        <div class="col-12 mt-4">
            <hr>
        </div>

        <!-- Checkout -->
        <div class="d-flex flex-column align-items-end bg-dark p-4">
            <h6>Number Of items: <?php echo $num?></h6>
            <h5>Delivery fee: Rs. 450</h5>
            <h2>Net Total: <span class="text-warning">Rs. <?php echo ($netTotal + 500) ?>.00/=</span></h2>
            <button class="btn btn-success col-3 mt-2 mb-4">Checkout</button>
        </div>

        <!-- Checkout  -->


        <?php
} else {
    ?>

        <div class="d-flex mt-4 justify-content-center align-items-center flex-column">
            <h1 class="text-center">No Items In your cart!</h1>
            <a href="index.php"><button class="btn btn-primary">Return to Home</button></a>
        </div>


        <?php
}


?>