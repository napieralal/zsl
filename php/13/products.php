<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produkty</title>
</head>
<body>
    <h3>Products</h3>
    <?php
    $connect=new mysqli('localhost','root','','shop');
    $sql="SELECT * FROM `products`";
    $result=$connect->query($sql);
    while($row=$result->fetch_assoc())
    {
        echo <<< Products
        Product:
        <br>
        <b>Product name</b>: $row[product_name]
        <b>Catalog price</b>: $row[catalog_price]
        <b>Weight</b>: $row[weight]
        <b>Color</b>: $row[color]
        <hr>
Products;        
    }
    ?>
    <p><a href="shop.php">Powrót</a></p>
</body>
</html>