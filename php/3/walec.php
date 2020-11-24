<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Walec</h3>
    <table>
    <td><a href="./3_zadanie_formularze_geometria.php"><img src="./walec.png"></td>
    </table>
    <hr>
    <b>Dane:</b><br>
    <form method="POST">
    <input type="text" name="r" value="1" placeholder="r" required pattern="[1-9]"><br><br>
    <input type="text" name="h" value="2" placeholder="h" required pattern="[1-9]"><br><br>
    <input type="submit" name="oblicz" value="Oblicz:"><br><br>
  </form>
    <<?php
    require_once './waIec.php';
    if(isset($_POST['oblicz']))
    {
    $r = $_POST['r'];  //promien
    $h = $_POST['h'];  //wysokosc
    $pole=sq($r,$h);
    $objetosc=cap($r,$h);
    $polep=sqp($r,$h);
    $poleb=sqb($r,$h);
  }
  if($r==0||$h==0){
    echo
    "Dane w formularzu nie mogą być 0!";
  }
  if($r<0||$h<0){
    echo
    "Dane w formularzu muszą być liczbami dodatnimi!";
  }
  if((!empty($r)&&!empty($h))){
    echo
    "ul>
    <li>Pole podstawy: $polep cm<sup>2</sup></li><br>
    <li>Pole boczne: $poleb cm<sup>2</sup></li><br>
    <li>Pole całkowite: $pole cm<sup>2</sup></li><br>
    <li>Objętość: $objetosc cm<sup>3</sup></li><br>
    </ul>";
}
     ?>
  </body>
</html>
