<?php

//sortowanie tablic

$tab = array(10,2,1000,5,-1);

function t($tab){
foreach ($tab as $value) {
  echo "$value ";
}
echo '<br>';
}
t($tab);

// sort,rsort,asort,arsort,ksort,krsort
//sortowanie niemalejaco
sort($tab);
t($tab);

//sortowanie nierosnaco
rsort($tab);
t($tab);

$names = array('Paweł','anna','Krystyna','janusz');

t($names);
sort($names);
t($names);

//zamiana na male litery

 function replaceToLowerCase(&$tab){
   foreach ($tab as $key => $value) {
     $replace = strtolower($value);
     $tab[$key]=$replace;
    // echo "$replace ";
   }
 }
 replaceToLowerCase($names);
 t($names);
 sort($names);
 t($names);

//zamiana pierwszej litery na duza
function replaceToUpperCase(&$tab)
{
  foreach ($tab as $key => $value) {
    $replace = ucfirst($value);
    $tab[$key]=$replace;
  }
}
replaceToUpperCase($names);
t($names);

//sortowanie tablicy asocjacyjnych
$tabAsoc = array(
  'name' => 'Paweł',
  'surname' => 'Nowak',
  'age' => 21,
  'heigth' => 195
);
t($tabAsoc);

//sortowanie niemalejace wedlug zawartosci
 asort($tabAsoc);
 t($tabAsoc);
 //nierosnace wg zawartosci
 arsort($tabAsoc);
 t($tabAsoc);
 //niemalejace wg kluacz
ksort($tabAsoc);
t($tabAsoc);
//nierosnace wg klucza
 krsort($tabAsoc);
 t($tabAsoc);

 // wyswietlenie danych z tablicy
  print_r('<pre>');
  var_dump($tabAsoc);
  print_r('<pre>');

  print_r('<pre>');
  print_r($tabAsoc);
  print_r('<pre>');


  //echo '<pre>';
  //var_dump($tabAsoc);
  //echo '<pre>';

  echo gettype($tabAsoc['name']); //string
  echo gettype($tabAsoc['age']); //integer

  
 ?>
