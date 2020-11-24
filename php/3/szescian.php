<?php
function sq($x){
  $pole = 6*pow($x, 2);
  $pole=number_format($pole, 2);
  return $pole;
}
function cap($x){
  $objetosc = pow($x, 3);
  $objetosc=number_format($objetosc, 2);
  return $objetosc;
}
function len($x){
  $przekatna = $x*sqrt(3);
  $przekatna=number_format($przekatna, 2);
  return $przekatna;
}
function wp($x){
  $wpisany = 0.5*$x;
  $wpisany=number_format($wpisany, 2);
  return $wpisany;
}
function op($x){
    $opisany = 0.5*$x*sqrt(3);
    $opisany=number_format($opisany, 2);
    return $opisany;
  }
?>
