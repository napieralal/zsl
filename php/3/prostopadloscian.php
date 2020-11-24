<?php
function sq($x, $y, $z){
  $pole = 2*$x*$y+2*$x*$z+2*$y*$z;
  $pole=number_format($pole, 2);
  return $pole;
}
function cap($x, $y, $z){
  $objetosc = $x * $y * $z;
  $objetosc=number_format($objetosc, 2);
  return $objetosc;
}
function len($x, $y, $z){
  $przekatna = sqrt(pow($x, 2)+pow($y, 2)+pow($z, 2));
  $przekatna=number_format($przekatna, 2);
  return $przekatna;
}
?>
