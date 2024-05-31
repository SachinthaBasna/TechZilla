<?php 
    include "connection.php";
    session_start();

    $username = $_POST["u"];
    $password = $_POST["p"];

    if(empty($username)){
        echo("please Enter your details");
    } else if(empty($password)){
        echo("Please Enter your password");
    } else {
        $rs = Database::search("SELECT * FROM `user` WHERE `uname`='".$username."' AND `password`='".$password."'");
        
        $num = $rs->num_rows;

        if($num == 1){
            // Check next row
            $d = $rs->fetch_assoc();

            if($d["user_type_id"] == 1){
                echo("Success");

                $_SESSION["a"] = $d;
            } else {
                echo("You Don't have access");
            }
        } else {
            echo("Invalid User name or password");
        }
    }



?>