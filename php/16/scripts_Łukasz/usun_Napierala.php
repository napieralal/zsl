<?php
require_once './connect.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "delete from `clients` where `clients`.`client_id`= $id";
    $connect->query($sql);
    if($connect->affected_rows){
        header('location: ../Napierała_Łukasz.php');
    }
    else
    {
        echo "BŁĄD";
    }
}
?>