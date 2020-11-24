<?php
function sq($r, $h){
  $pole = 2*pi()*$r*($r+$h);
  $pole=number_format($pole, 2);
  return $pole;
}
function cap($r, $h){
  $objetosc = pi()*pow($r, 2)*$h;
  $objetosc=number_format($objetosc, 2);
  return $objetosc;
}
function sqp($r, $h){
  $polep = pi(pow($r, 2));
  $polep=number_format($polep, 2);
  return $polep;
}
function sqb($r, $h){
  $poleb = 2*pi()*$r*$h;
  $poleb=number_format($poleb, 2);
  return $poleb;
}
?>
