<?php

session_start();

//print_r($_POST);

foreach ($_POST as $key => $value)
{
    if(empty($value)){
        //echo $key;
        //header('location: customers.php');
        $_SESSION['error']='Wypelnij wszystkie dane!';
        echo "<script>history.back()</script>";
        exit();
    }
    ${$key} = $value;
}
echo "$name $surname $birthday $postalCode $city $street $nip";

require_once 'connect.php';
?>