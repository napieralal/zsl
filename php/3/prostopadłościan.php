<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
  require_once './prostopadloscian.php';
    if(isset($_POST['oblicz']))
    {
    $x = $_POST['x'];
    $y = $_POST['y'];
    $z = $_POST['z'];
    $pole=sq($x,$y,$z);
    $objetosc=cap($x,$y,$z);
    $przekatna=len($x,$y,$z);
	}
  ?>
    <h3>Prostopałościan</h3>
    <table>
    <td><a href="./3_zadanie_formularze_geometria.php"><img src="./prostopadłościan.png"></td>
    </table>
    <hr>
    <b>Dane:</b><br>
    <form method="POST">
    <input type="input" name="x" value="1" required pattern="[1-9]"><br><br>
    <input type="text" name="y" value="2" required pattern="[1-9]"><br><br>
    <input type="text" name="z" value="3" required pattern="[1-9]"><br><br>
    <input type="submit" name="oblicz" value="Oblicz:"><br><br>
  </form>
    <?php
    require_once './prostopadloscian.php';
    if(isset($_POST['oblicz']))
    {
    $x = $_POST['x'];
    $y = $_POST['y'];
    $z = $_POST['z'];
    $pole=sq($x,$y,$z);
    $objetosc=cap($x,$y,$z);
    $przekatna=len($x,$y,$z);
  }
  if($x==0||$y==0||$z==0){
    echo
    "Dane w formularzu nie mogą być 0!";
  }
  if($x<0||$y<0||$z<0){
    echo
    "Dane w formularzu muszą być liczbami dodatnimi!";
  }
  if((!empty($x)&&!empty($y)&&!empty($z))){
    echo
    "
    <li>Pole: $pole cm<sup>2</sup></li><br>
    <li>Objętość: $objetosc cm<sup>3</sup></li><br>
    <li>Długość przekątnej: $przekatna cm</li><br>
    </ul>";
}
     ?>
  </body>
</html>
