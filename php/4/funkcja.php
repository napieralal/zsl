<?php
/*function show($result){
  return "Wynik wynosi: $result";
}*/
function plus($x, $y){
  $result = $x + $y;
  return $result;
}
function minus($x, $y){
  $result = $x - $y;
  return $result;
}
function tim($x, $y){
  $result = $x * $y;
  return $result;
}
function div($x, $y){
  if($x!=0&&$y!=0){
  $result = $x / $y;
  return $result;
}
}
?>
