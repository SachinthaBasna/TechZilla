
<?php
    include "connection.php";

    $filter = $_POST["filter"];

    $rs = Database::search("SELECT `product`.*, `category`.*
    FROM `product`
    JOIN `category` ON `product`.`cat_id` = `category`.`cat_id`");
    
    $num = $rs->num_rows;
    // echo($num);
    
    
    for ($x = 0; $x < $num; $x++) {
        $data = $rs->fetch_assoc();
    
        if ($data["cat_id"] == $filter) {
            ?>
    
    
    
            <div class="row card col-1 d-flex justify-content-center align-items-center p-2">
                <div>
                    <div class="img-wrapper overflow-auto flex-wrap"><img src="<?php echo ($data["path"]) ?>" draggable="false"
                            class="img-fluid" /></div>
                    <h2 class="font-weight-bold"><?php echo ($data["name"]) ?></h2>
                    <p><?php echo ("- " . $data["cat_name"] . " -") ?></p>
                    <div class="price" id="Price">Rs. 120000/=</div>
                </div>
                <button type="button" class="buy col-md-7 mt-2">Buy Now</button>
            </div>
    
    
    
            <?php
        }
    }
?>