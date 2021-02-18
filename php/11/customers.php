<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Klienci</title>
  </head>
  <body>
    <h3>Klienci</h3>
    <?php
    //polaczenie z baza danych
    //$connect = mysqli_connect('localhost',"root","","php");
    $connect = new mysqli('localhost',"root","","php");

    // @ operator ignorowania błędów
    //print_r($connect);

    //echo '<hr>',$connect -> connect_error,'<br>';
    echo '<hr>Error:',$connect -> connect_errno,'<br>';

    /*
    0 - prawidlowe polaczenie z db
    2002 - serwer
    1045 - user
    1045 - pass
    1049 - db
    */

    $sql = "SELECT * FROM `customers`";
    $result = $connect->query($sql);

    while($row = $result->fetch_assoc())
    {
      echo <<< SHOW
    Imię i nazwisko: $row[name] $row[surname],
    data urodzenia: $row[birthday], wzrost: $row[height]cm
    <br>
SHOW;
}

      ?>
  </body>
</html>
