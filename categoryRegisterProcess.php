<?php 
include "connection.php";

$category = $_POST["c"];
// echo($category);

if(empty($category)){
    echo "Please Enter category";
} else if(strlen($category) > 20){
    echo ("Your category Name Should be less then 20 characters");
} else {
    $rs = Database::search("SELECT * FROM `category` WHERE `cat_name`='".$category."'");
    $num = $rs->num_rows;

    if ($num > 0){
        echo("Your category Name is Already Exsists");
    } else {
        Database::iud("INSERT INTO `category` (`cat_name`) VALUES ('".$category."')");
        echo("Success");
    }
}
?>