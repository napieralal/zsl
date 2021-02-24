<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szczegóły sprzedaży</title>
</head>
<body>
    <h3>Sale Details</h3>
    <?php
    $connect=new mysqli('localhost','root','','shop');
    $sql="SELECT * FROM `sales_details`";
    $result=$connect->query($sql);
    while($row=$result->fetch_assoc())
    {
        echo <<< Sale_Details
        Sale_details:
        <br>
        <b>Transaction number</b>: $row[nr_transaction]
        <b>Product ID</b>: $row[id_product]
        <b>Quantity</b>: $row[quantity]
        <b>Price</b>: $row[price]
        <b>Discount</b>: $row[discount]
        <hr>
Sale_Details;        
    }
    ?>
    <p><a href="shop.php">Powrót</a></p>
</body>
</html>