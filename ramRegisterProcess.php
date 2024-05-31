<?php 
include "connection.php";

$ram = $_POST["ram"];
// echo($category);

if(empty($ram)){
    echo "Please Enter ram Size";
} else if(strlen($ram) > 20){
    echo ("Your ram Name Should be less then 20 characters");
} else {
    $rs = Database::search("SELECT * FROM `ram` WHERE `ram_size`='".$ram."'");
    $num = $rs->num_rows;

    if ($num > 0){
        echo("Your ram Size is Already Exsists");
    } else {
        Database::iud("INSERT INTO `ram` (`ram_size`) VALUES ('".$ram."')");
        echo("Success");
    }
}
?>