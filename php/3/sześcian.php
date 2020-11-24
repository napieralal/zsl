<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Sześcian</h3>
    <table>
    <td><a href="./3_zadanie_formularze_geometria.php"><img src="./sześcian.png"></td>
    </table>
    <hr>
    <b>Dane:</b><br>
    <form method="POST">
    <input type="text" name="x" value="1" required pattern="[1-9]"><br><br>
    <input type="submit" name="oblicz" value="Oblicz:"><br><br>
  </form>
    <<?php
    require_once './szescian.php';
    if(isset($_POST['oblicz']))
    {
    $x = $_POST['x'];
    $pole=sq($x);
    $objetosc=cap($x);
    $przekatna=len($x);
    $wpisany=wp($x);
    $opisany=op($x);
  }
  if($x==0){
    echo
    "Dane w formularzu nie mogą być 0!";
  }
  if($x<0){
    echo
    "Dane w formularzu muszą być liczbami dodatnimi!";
  }
  if((!empty($x))){
    echo
    "ul>
    <li>Pole: $pole cm<sup>2</sup></li><br>
    <li>Objętość: $objetosc cm<sup>3</sup></li><br>
    <li>Długość przekątnej: $przekatna cm</li><br>
    <li>Promień kuli wpisanej w sześcian: $wpisany cm</li><br>
    <li>Promień kuli opisanej w sześcianie: $opisany cm</li><br>
    </ul>";
}
     ?>
  </body>
</html>
