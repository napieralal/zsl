<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dane uzytkownika</title>
  </head>
  <body>
    <h4>Dane uzytkownika</h4>
    <?php
    //echo '<pre>',print_r($_GET),'</pre>';
    $pass = $_GET['pass'];
    $color = $_GET['color'];
    switch ($color) {
      case 'r':
        $color='czerwony';
        break;
      case 'g':
      $color='zielony';
        break;
        case 'b':
        $color='niebieski';
        break;
    }
    if(isset($_GET['regulamin'])){
      $reg = 'Zaznaczono regulamin';
    }else{
      $reg= 'Nie zaznaczono regulaminu';
    }
    echo <<<DATA
    Login: $_GET[login]<br>
    hasło: {$_GET['pass']}<br>
    hasło: $pass<br>
    kolor: $color<br>
    $reg
DATA;
     ?>
  </body>
</html>
