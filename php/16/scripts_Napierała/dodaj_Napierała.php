<?php
require_once './connect.php';
if(isset($_POST['state'])&&isset($_POST['country'])&&$_POST['state']!=NULL)
{
$state=$_POST['state'];
$country=$_POST['country'];
$sql = "insert into `states` (`state_id`, `country_id`, `state`) VALUES (NULL, '$country', '$state')";
$connect->query($sql);
//print_r($connect);
if($connect->affected_rows){
    header('location: ../Napierała_Łukasz.php');
}
else
{
    echo 'BŁĄD';
}
}
else
{
    echo "Nie wypełniłeś formularza";
}
?>