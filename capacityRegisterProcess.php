<?php 
include "connection.php";

$capacity = $_POST["cap"];
// echo($capacity);

if(empty($capacity)){
    echo "Please Enter capacity";
} else if(strlen($capacity) > 20){
    echo ("Your capacity Should be less then 20 characters");
} else {
    $rs = Database::search("SELECT * FROM `capacity` WHERE `capacity_size`='".$capacity."'");
    $num = $rs->num_rows;

    if ($num > 0){
        echo("Your capacity is Already Exsists");
    } else {
        Database::iud("INSERT INTO `capacity` (`capacity_size`) VALUES ('".$capacity."')");
        echo("Success");
    }
}
?>