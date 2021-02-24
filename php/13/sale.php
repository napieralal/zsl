<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprzedaż</title>
</head>
<body>
    <h3>Sales</h3>
    <?php
    $connect=new mysqli('localhost','root','','shop');
    $sql="SELECT * FROM `sales`";
    $result=$connect->query($sql);
    while($row=$result->fetch_assoc())
    {
        echo <<< Sales
        Sale:
        <br>
        <b>Client ID</b>: $row[clienct_id]
        <b>Date</b>: $row[date]
        <b>Transport</b>: $row[transport]
        <b>Date Collection</b>: $row[date_collection]
        <hr>
Sales;        
    }
    ?>
    <p><a href="shop.php">Powrót</a></p>
</body>
</html>