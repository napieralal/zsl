<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprzedaż</title>
    <style>
        table,th,tr,td{
            border:1px solid black;
            border-collapse:collapse;
            text-align:center;
        }
    </style>
</head>
<body>
    <h3>Sales</h3>
    <table>
        <th>Client ID</th>
        <th>Date</th>
        <th>Transport</th>
        <th>Date Collection</th>
    <?php
    $connect=new mysqli('localhost','root','','shop');
    $sql="SELECT * FROM `sales`";
    $result=$connect->query($sql);
    while($row=$result->fetch_assoc())
    {
        echo <<< Sales
        <tr>      
         <td> $row[client_id]</td>
         <td> $row[date]</td>
         <td> $row[transport]</td>
         <td> $row[date_collection]</td> 
         </tr>
Sales;        
    }
    ?>
    </table>
    <p><a href="shop.php">Powrót</a></p>
</body>
</html>