<?php

// tablice wielowymiarowe

$students = array(
  array('Anna','Nowak','20','Poznań'),
  array('Tomasz','Kowalski','25','Poznań')
);
/*for($i=0;$i<count($students[0]);$i++)
{
 echo $students[0][$i]," ";
}
 echo '<br>';
 for($i=0;$i<count($students[1]);$i++)
 {
  echo $students[1][$i]," ";
}*/
 for ($i=0; $i < count($students); $i++) {
   for ($j=0; $j < count($students[$i]); $j++) {
      echo $students[$i][$j]," ";
   }
   echo '<br>';
 }

// pętla foreach
foreach ($students as $key => $value) {
  foreach ($value as $key => $value) {
    echo $value,' ';
  }
  echo '<br>';
}

foreach ($students as $key => $value) {
  print_r($value);
  echo '<br>';
}

foreach ($students as $value) {
  foreach ($value as $data) {
    echo $data,' ';
  }
  echo '<br>';
}

//tablica 3-wymiarowa
$students = array(
  array(
    'Anna',
  array('Nowak','Pawlak'),
  '20',
  'Poznań'),
  array('Tomasz','Kowalski','25','Poznań'),
);

//funkcja
function foo($arr){
    foreach($arr as $arr1){
        foreach($arr1 as $key=>$value){
            echo ucfirst($key).": $value<br/>";
        }
    }
}

$data = [
    'kolory' => ['biały', 'czarny',' czerwony'],
    'dane' => [
        'imie'=> ["adam","marek"],
        'nazwisko' => 'kowalski',
        'wiek' => 21,
        'dokumenty' => [
            'dowodzik' => [
                'nrdowodu' => 123123,
                'dane' => [
                    'imie'=> ["adam","marek"],
                    'nazwisko' => 'kowalski',
                    'wiek' => 21
                ]
            ]
        ]
    ]
];

foreach ($data as $arr) {
    foreach($arr as $key => $val){
        if(gettype($val) != 'array'){
            echo $key.": ".$val.'<br/>';
        }else{
            echo "$key<br/>";
            foreach($val as $key2 => $val2){
                if(gettype($val2) != 'array'){
                    echo $key2.": ".$val2.'<br/>';
                }else{
                    echo "$key2<br/>";
                    foreach($val2 as $key3 => $val3){
                            if(gettype($val3) != 'array'){
                                echo $key3.": ".$val3.'<br/>';
                            }else{
                                echo "$key3<br/>";
                                foreach($val3 as $key4 => $val4){
                                    if(gettype($val4) != 'array'){
                                        echo $key4.": ".$val4.'<br/>';
                                    }else{
                                        echo "$key4<br/>";
                                        foreach($val4 as $key5 => $val5){
                                            echo $key5.": ".$val5.'<br/>';
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }

 ?>
