<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Customers</title>
  </head>
  <body>
    <h3>Klienci</h3>
    <?php
    require_once './scripts/connect.php';
    if(!$connect->connect_errno) //czy polaczenie jest prawidlowe
    {
      $sql = "SELECT `cu`.`id`, `cu`.`name`,`cu`.`surname`,`c`.`city` as `miasto` FROM `customers` as `cu` inner join `city` as `c` on `cu`.`cityid`=`c`.`id`";
      $result = $connect->query($sql);
      while($customer = $result->fetch_assoc())
      {
        echo <<<Customer
        <b>Użytkownik $customer[id]</b>:<br>
        Imie i nazwisko: $customer[name] $customer[surname]
        Miasto: $customer[miasto]
        <hr>
Customer;
      }
    }
    else
    {
      echo 'Błędne połączenie z bazą.<br>', $connect->connect_errno;
    }
     ?>
  </body>
</html>
