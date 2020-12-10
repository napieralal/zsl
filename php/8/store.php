<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $ilosc1=$_POST['ilosc1'];
    $ilosc2=$_POST['ilosc2'];
    $ilosc3=$_POST['ilosc3'];
    $produkt1=$_POST['produkt1'];
    $produkt2=$_POST['produkt2'];
    $produkt3=$_POST['produkt3'];
    $koszt;
    if(is_numeric($ilosc1)&&is_numeric($ilosc2)&&is_numeric($ilosc3)){
    $koszt=$ilosc1*$produkt1+$ilosc2*$produkt2+$ilosc3*$produkt3;
    if($produkt1=200){
      echo "Monitor x $ilosc1<br>";
    }
    if($produkt1=500){
      echo "Karta graficzna x $ilosc1<br>";
    }
    if($produkt1=600){
      echo "Procesor x $ilosc1<br>";
    }
    if($produkt2=200){
      echo "Monitor x $ilosc2<br>";
    }
     if($produkt2=500){
      echo "Karta graficzna x $ilosc2<br>";
    }
     if($produkt2=600){
      echo "Procesor x $ilosc2<br>";
    }
    if($produkt3=200){
      echo "Monitor x $ilosc3<br>";
    }
    if($produkt3=500){
      echo "Karta graficzna x $ilosc3<br>";
    }
    if($produkt3=600){
      echo "Procesor x $ilosc3<br>";
    }
    echo "<br>Łączny koszt sprzętu wynosi: ", $koszt;
    }
    else echo "Niepoprawne dane";
     ?>
  </body>
</html>
