<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produkty</title>
    <style>
        table,th,tr,td{
            border:1px solid black;
            border-collapse:collapse;
            text-align:center;
        }
    </style>
</head>
<body>
    <h3>Products</h3>
    <table>
        <th>Product name</th>
        <th>Catalog price</th>
        <th>Weight</th>
        <th>Color</th>
    <?php
    $connect=new mysqli('localhost','root','','shop');
    $sql="SELECT * FROM `products`";
    $result=$connect->query($sql);
    while($row=$result->fetch_assoc())
    {
        echo <<< Products
        <tr>
         <td>$row[product_name]</td>
         <td>$row[catalog_price]</td>
         <td>$row[weight]</td>
         <td>$row[color]</td>
         </tr>
Products;        
    }
    ?>
    </table>
    <p><a href="shop.php">Powrót</a></p>
</body>
</html>