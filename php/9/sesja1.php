<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strona 1</title>
</head>
<body>
  <h1>Strona domowa</h1>
  <?php

    $_SESSION['name'] = 'Janusz';
    echo $_SESSION['name'],'<hr>';

  ?>
  <a href="./sesja2.php">Strona 2</a>
</body>
</html>
