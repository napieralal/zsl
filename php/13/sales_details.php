<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szczegóły sprzedaży</title>
    <style>
        table,th,tr,td{
            border:1px solid black;
            border-collapse:collapse;
            text-align:center;
        }
    </style>
</head>
<body>
    <h3>Sale Details</h3>
    <table>
        <th>Transaction number</th>
        <th>Product ID</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Discount</th>
    <?php
    $connect=new mysqli('localhost','root','','shop');
    $sql="SELECT * FROM `sales_details`";
    $result=$connect->query($sql);
    while($row=$result->fetch_assoc())
    {
        echo <<< Sale_Details
        <tr>
        <td> $row[nr_transaction]</td>
        <td> $row[id_product]</td>
        <td> $row[quantity]</td>
        <td> $row[price]</td>
        <td> $row[discount]</td>
        </tr>
Sale_Details;        
    }
    ?>
    </table>
    <p><a href="shop.php">Powrót</a></p>
</body>
</html>