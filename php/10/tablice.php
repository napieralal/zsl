<?php
//tablice indeksowane numerycznie
  $colors=array('bialy','czarny','czerwony','zielony');
  echo 'Rozmiar tablicy: ',count($colors),'<br>';
  echo 'Pierwszy elemnt tablicy ',$colors[0],'<br>';
  echo 'Ostatni element tablicy ',$colors[2],'<br>';
  echo 'Ostatni element tablicy ',$colors[count($colors)-1],'<br>';

  /*petla for w formacie
  Kolor 1:biały
  Kolor 2:czarny
  Kolor 3:czerwony
  ...
  */

  for($i=0;$i<count($colors);$i++)
  {
    echo 'Kolor ',$i+1,': ',$colors[$i],'<br>';
  }
  echo '<hr>';

  /*
  */

    function tabColors(&$tab, $c1,$c2,$c3){
      $tab[0] = $c1;
      $tab[1] = $c2;
      $tab[2] = $c3;
    }
    function tabShow($tab){
      for($i=0;$i<count($tab);$i++)
      {
        echo 'Kolor ',$i+1,': ',$tab[$i],'<br>';
      }
    }

tabColors($colors1, 'aqua', 'magenta', 'cyan');
echo 'Zmiana kolorów: <br>';
tabShow($colors1);


//tablice asocjacyjne

$x = array('klucz1'=>'x','klucz2'=>'y');
echo $x['klucz2'],'<br>';

$data=array(
  'name' => 'Jan',
  'surname' => 'Kowalski',
  'age' => 20
);

echo $data['name'],'<hr>';
// wyświetlic wszystkie dane za pomoca heredoc

echo <<< AAA
Imie: {$data['name']}<br>
Nazwisko: $data[surname]<br>
Wiek: $data[age]<hr>
AAA;

//foreach
foreach ($data as $value) {
  echo "$value ";
}
echo '<br>';
foreach ($colors as $value) {
  echo "$value ";
}
echo '<br>';

foreach ($colors as $key => $value) {
  echo "$key: $value<br>";
}
echo '<br>';
foreach ($data as $key => $value) {
  echo ucfirst($key),": $value<br>";
}
echo '<br>';

//print_r()
echo '<pre>';
print_r($colors);
echo '</pre>';
echo '<pre>';
print_r($data);
echo '</pre>';
//indeksowana
function sposob($data,$colors){
foreach ($colors as $key => $value) {
  echo "$key: $value<br>";
}
foreach ($data as $key => $value) {
  echo ucfirst($key),": $value<br>";
}
}
sposob($data,$colors);
 ?>
