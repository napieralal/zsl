<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calculator</title>
  </head>
  <body>
    <h3>Kalkulator<h3>
<?php
require_once './funkcja.php';
$result=1.;
if(isset($_GET['zlicz']))
{
$x = $_GET['licz1'];
$y = $_GET['licz2'];
$znak=$_GET['funkcja'];
}
if((!empty($x)&&!empty($y))&&(is_numeric($x)&&is_numeric($y))){
  switch ($znak) {
    case 'plus':
    $result=plus($x,$y);
    break;
    case 'minus':
    $result=minus($x,$y);
    break;
    case 'tim':
    $result=tim($x,$y);
    break;
    case 'div':
    $result=div($x,$y);
    break;
  }
}
$form=<<<ABC
<form method="get">
  <input type="number" name="licz1" placeholder="x" step="0.000000001" required pattern="[0-9]">
  <select name="funkcja" required>
    <option value="plus" selected>+</option>
    <option value="minus">-</option>
    <option value="tim">*</option>
    <option value="div">/</option></select>
  <input type="number" name="licz2" placeholder="y" required step="0.000000001" pattern="[0-9]">
  <input type="submit" value="=" name="zlicz">
  <input type="text" disabled name="result" value=$result>
</form>
ABC;
echo $form;
 ?>
  </body>
</html>
