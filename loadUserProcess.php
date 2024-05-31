<?php
include "connection.php";

$rs = Database::search("SELECT * FROM `user` WHERE `user_type_id` = '2'");
// read only one row
// $d = $rs->fetch_assoc();

$num = $rs->num_rows;


for ($i =0; $i<$num; $i++){
    // read while for loop end
    $d = $rs->fetch_assoc();
?>
<tr>
    <th scope="row"><?php echo $d["id"] ?></th>
    <td><?php echo $d["fname"] ?></td>
    <td><?php echo $d["lname"] ?></td>
    <td><?php echo $d["email"] ?></td>
    <td><?php echo $d["mobile"] ?></td>
    <td>
        <?php
        if ($d["status"] == 1) {
            echo("Active");
        } else {
            echo("Deactive");
        }
        ?>
    </td>
</tr>
<?php
    
}


?>