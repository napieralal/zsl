<?php
  session_start();
  unset($_SESSION['name']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>strona 3</title>
</head>
<body>
  <h1>Strona 2</h1>
  <?php
    echo $_SESSION['name'],'<br>';
    ?>
    <a href="./sesja1.php">Strona domowa</a>
</body>
</html>

if(!empty($_POST['produkt'])){
   echo $_POST['produkt'];
   echo "<br>";
   echo "Liczba produktu 1: ";
   echo $_POST['ilosc'];
   echo "<br>";
   echo "Cena";
   if($produkt=="monitor"){
       $koszt=200*$ilosc;
       echo $koszt;
   }
   if($produkt=="karta"){
       $koszt=500*$ilosc;
       echo $koszt;
   }
   if($produkt=="procesor"){
       $koszt=600*$ilosc;
       echo $koszt;
   }
