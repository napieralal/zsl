<?php
$id=$_GET['id'];
require_once "connect.php";
$sql="DELETE FROM `clients` WHERE `clients`.`id_client` = $id";
$connect->query($sql);
//echo $connect->affected_rows;
if($connect->affected_rows){
    header('location: ./customers.php?delete=0');
}
else
{
    header('location: ./customers.php?delete=1');
}
?>