<?php
function yday(){
$dni=getdate();
if(date('L')){
$przestepny = 1;
}
else $przestepny=0;
if($przestepny==1)
{
  $dni=366;
  return $dni;
}
else {
$dni=365;
return $dni;
}}
function left_day($dni,$dzien){
  if($dni==366){
  $left=366-$dzien['yday'];
  return $left;
}
else {
  $left=355-$dzien['yday'];
  return $left;
}}
?>
