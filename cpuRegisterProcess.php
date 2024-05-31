<?php 
include "connection.php";

$cpu = $_POST["cpu"];
// echo($category);

if(empty($cpu)){
    echo "Please Enter cpu";
} else if(strlen($cpu) > 20){
    echo ("Your cpu Name Should be less then 20 characters");
} else {
    $rs = Database::search("SELECT * FROM `cpu` WHERE `cpu_name`='".$cpu."'");
    $num = $rs->num_rows;

    if ($num > 0){
        echo("Your cpu Name is Already Exsists");
    } else {
        Database::iud("INSERT INTO `cpu` (`cpu_name`) VALUES ('".$cpu."')");
        echo("Success");
    }
}
?>