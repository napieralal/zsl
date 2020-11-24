<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formularze</title>
  </head>
  <body>
<h4>dane uzytkownika</h4>
<form action="./costam_show.php" method="get">
  <input type="text" name="login" placeholder="login" autofocus><br><br>
<input type="password" name="pass" placeholder="hasło"><br><br>
<input type="radio" name="color" value="r" checked>Czerwony
<input type="radio" name="color" value="g">Zielony
<input type="radio" name="color" value="b">Niebieski<br><br>
<input type="checkbox" name="regulamin">Regulamin<br><br>
  <input type="submit" value="zatwierdz dane">
  </body>
</html>
