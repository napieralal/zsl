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
    $connect = new mysqli('localhost',"root","","sklep sportowy");

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

    $sql = "SELECT * FROM `klienci`";
    $result = $connect->query($sql);

    while($row = $result->fetch_assoc())
    {
      echo <<< SHOW
    ID_klienta: $row[ID_klienta], Username: $row[Nazwa_klienta],
    Punkty: $row[Ilość_pkt], Płeć: $row[Płeć],
    E-mail:  $row[Mail]
    <br>
SHOW;
}

$sql = "SELECT * FROM `produkty`";
$result = $connect->query($sql);

while($row = $result->fetch_assoc())
{
  echo <<< SHOW
ID_produktu: $row[ID_produktu], Product_name: $row[Nazwa_produktu],
Cena: $row[Cena], Rating: $row[Opinia],
Dostępny?:  $row[Dostępność], Kategoria: $row[Kategoria]
<br>
SHOW;
}
      ?>
  </body>
</html>
