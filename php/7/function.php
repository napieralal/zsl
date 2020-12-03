<?php
function wzor($a,$b){
$wynik=(-$a+(sqrt(pow($b, 2)-2*$a)))/$a;
$wynik=number_format($wynik, 3);
  echo "Wynik wynosi: $wynik";
}
?>
