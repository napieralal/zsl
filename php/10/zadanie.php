<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kolory</title>
  </head>
  <body>
    <?php
    echo "<form action=\"zadanie.php\" method=\"GET\">
      Podaj ilość ulubionych kolorów
      <input type=\"number\" name=\"ilosc\">
      <input type=\"submit\" name=\"submit\" value=\"OK\">
    </form>
    <br>";
  if(!empty($_GET['ilosc'])){
      echo("
      <form method=\"GET\">
          Podaj nazwy ulubionych kolorów<br>");
          for ($i=1;$i<=$_GET['ilosc'];$i++){
              echo("<input type=\"text\" name=\"kolor$i\" placeholder=\"Nazwa koloru $i\"><br/><br/>");
          }
          echo("<input type=\"submit\" value=\"OK\" name=\"submit\"/>
      </form>
      ");
  }
  else if (!empty($_GET['submit'])){
      echo ' Ilość ulubionych kolorów:<br>';
      $colors = [];
      for($i=1;$i<count($_GET);$i++){
          $count='kolor'.$i;
          if(!empty($_GET[$count])){
              array_push($colors, $_GET[$count]);
          }
      }
      rsort($colors);
      foreach($colors as $key => $value){
          $i = $key + 1;
          echo "Kolor $i: ",$value,"<br><br>";
      }
  }
      ?>
  </body>
</html>
