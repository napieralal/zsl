<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Ostrosłup</h3>
    <table>
    <td><a href="./3_zadanie_formularze_geometria.php"><img src="./ostrosłup.png"></td>
    </table>
    <hr>
    <b>Dane:</b><br>
    <form method="POST">
    <input type="text" name="a"  required pattern="[1-9]"><br><br>
    <input type="text" name="h"  required pattern="[1-9]"><br><br>
    <input type="text" name="H"  required pattern="[1-9]"><br><br>
    <input type="submit" name="oblicz" value="Oblicz:"><br><br>
  </form>
    <<?php
    require_once './ostroslup.php';
    if(isset($_POST['oblicz']))
    {
    $a = $_POST['a']; //podstawa
    $h = $_POST['h']; //wys boku
    $H = $_POST['H']; //wys ostroslupa
    $pole=sq($a,$h,$H);
    $objetosc=cap($a,$h,$H);
  }
  if($a==0&&$h==0&&$H==0){
    echo
    "Dane w formularzu nie mogą być 0!";
  }
  if($a<0&&$h<0&&$H<0){
    echo
    "Dane w formularzu muszą być liczbami dodatnimi!";
  }
  if((!empty($a)&&!empty($h)&&!empty($H))){
    echo
    "ul>
    <li>Pole: $pole cm<sup>2</sup></li><br>
    <li>Objętość: $objetosc cm<sup>3</sup></li><br>
    </ul>";
}
     ?>
  </body>
</html>
