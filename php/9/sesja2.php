<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>strona 2</title>
</head>
<body>
  <h1>Strona 2</h1>
  <?php
    echo $_SESSION['name'],'<br>';
  ?>
  <a href="./sesja3.php">Strona 3</a>
</body>
</html>
