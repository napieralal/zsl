<?php
function sq($a, $h, $H){
  $pole = pow($a, 2)+2*$a*$h;
  $pole=number_format($pole, 2);
  return $pole;
}
function cap($a, $h, $H){
  $objetosc = 1/3*pow($a, 2)*$H;
  $objetosc=number_format($objetosc, 2);
  return $objetosc;
}
?>
