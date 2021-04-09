<?php

session_start();
require_once './connect.php';
foreach ($_POST as $key => $value)
{
    if(empty($value)){
        $_SESSION['error']='Wypelnij wszystkie dane!';
        header('location: ./customers.php');
    }
    ${$key} = $value;
}

$sql = "INSERT INTO `clients` (`id_client`, `city_id`, `surname`, `name`, `NIP`, 'Postal_code', `Street_house_nr`, `birthday`, `create_user`)
VALUES (NULL, '$city', '$surname', '$name', '$nip', '$postalCode', '$street', '$birthday', current_timestamp());";
$connect->query($sql);

if($connect->affected_rows != -1)
{
    header("location ../customers.php?add_user=1&name=$name&surname=$surname");
}
else{
    header("location ../customers.php?add_user=0");
}

?>