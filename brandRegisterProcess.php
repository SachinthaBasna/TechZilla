<?php 
include "connection.php";

$brand = $_POST["b"];
// echo($brand);

if(empty($brand)){
    echo "Please Enter Brand";
} else if(strlen($brand) > 20){
    echo ("Your Brand Name Should be less then 20 characters");
} else {
    $rs = Database::search("SELECT * FROM `brand` WHERE `brand_name`='".$brand."'");
    $num = $rs->num_rows;

    if ($num > 0){
        echo("Your Brand Name is Already Exsists");
    } else {
        Database::iud("INSERT INTO `brand` (`brand_name`) VALUES ('".$brand."')");
        echo("Success");
    }
}
?>