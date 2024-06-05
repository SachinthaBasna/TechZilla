<?php
include "connection.php";

$page = $_POST["p"];
// echo($page);

$pageno = 0;

if ($page != 0) {
    $pageno = $page;
} else {
    $pageno = 1;
}


$rs = Database::search("SELECT * FROM `stock`
JOIN `product` ON `stock`.`product_id` = `product`.`id`
JOIN `category` ON `product`.`cat_id` = `category`.`cat_id`;
");
$num = $rs->num_rows;

for ($x = 0; $x < $num; $x++) {
    $data = $rs->fetch_assoc();
    ?>



    <div class="row card col-1 d-flex justify-content-center align-items-center p-2"
        onclick="singleProductview(<?php echo $data['stock_id'] ?>);">
        <div>
            <div class="img-wrapper overflow-auto flex-wrap"><img src="<?php echo ($data["path"]) ?>" draggable="false"
                    class="img-fluid" /></div>
            <h2 class="font-weight-bold"><?php echo ($data["name"]) ?></h2>
            <p><?php echo ("- " . $data["cat_name"] . " -") ?></p>
            <div class="price" id="Price"><?php echo ("Rs. " . $data["price"]) ?></div>
        </div>
        <button type="button" class="buy col-md-7 mt-2">Buy Now</button>
    </div>



    <?php
}
?>