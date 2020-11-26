<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h4>Dane czlonkow rodziny</h4>
    <?php
    if(isset($_POST['button']))
    {
      echo 'Dane czlonkow rodziny:<br>';
      $x=0;
      for($i=1;$i<count($_POST);$i++)
      {
        if(!empty($_POST["osoba$i"]))
        {
        $x++;
        echo "Osoba $i: ",$_POST["osoba$i"],"<br><br>";
    }
  }
}else if (!empty($_POST['family'])){
  echo '<h4>Ilosc czlonkow: ',$_POST['family'],'</h4>';
  ?>
  <form method="post">
  <?php
  for($i=1;$i<=$_POST['family'];$i++)
  {
  echo "<input type=\"text\" placeholder=\"Osoba$i\" name=\"osoba$i\" value=\"\"><br><br>";

  }
  ?>
  <br><br><input type="submit" value="zatwierdz" name="button">
</form><?php
}
else{
  header('location: ./');
}
 ?>
  </body>
</html>
