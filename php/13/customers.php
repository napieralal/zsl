<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klienci</title>
    <style>
        table,th,tr,td{
            border:1px solid black;
            border-collapse:collapse;
            text-align:center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h3>Clients</h3>
    <table>
        <th>Surname</th>
        <th>Name</th>
        <th>NIP</th>
        <th>Postal Code</th>
        <th>Country</th>
        <th>City</th>
        <th>Street and house number</th>
    <?php
    $connect=new mysqli('localhost','root','','shop');
    $sql="SELECT * FROM `clients` inner join `tbl_countries` on `clients`.`Country`=`tbl_countries`.`CountryID`";
    $result=$connect->query($sql);
    while($row=$result->fetch_assoc())
    {
        echo <<< Clients
        <tr>
        <td> $row[surname]</td>
        <td> $row[name]</td>
        <td> $row[NIP]</td>
        <td> $row[Postal_code]</td>
        <td> $row[CountryName]</td>
        <td> $row[City]</td>
        <td> $row[Street_house_nr]
        </tr>
Clients;
    }
    ?>
    </table>
    <p><a href="shop.php">Powrót</a></p>
</body>
</html>