<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
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
    <h3>Informations</h3>
    <table>
        <th>Name</th>
        <th>Surname</th>
        <th>Country</th>
        <th>State</th>
        <th>City</th>
        <th>NIP</th>
        <th>Postal Code</th>
        <th>Street and number</th>
    <?php
    $connect=new mysqli('localhost','root','','shop');
    $sql = "select `clients`.`name`,`clients`.`surname`,`cities`.`city`,`cities`.`Postal_code`,`clients`.`NIP`,`clients`.`Street_house_nr`,`states`.`state`,`tbl_countries`.`CountryName`\n"

    . "from `clients`\n"

    . "inner join `cities`\n"

    . "on `clients`.`city_id`=`cities`.`city_id`\n"

    . "inner join `states`\n"

    . "on `cities`.`state_id`=`states`.`state_id`\n"

    . "inner join `tbl_countries`\n"

    . "on `states`.`country_id`=`tbl_countries`.`CountryID`";
    $result=$connect->query($sql);
    while($row=$result->fetch_assoc())
    {
        $postalcode = substr($row['Postal_code'],0,2).'-'.substr($row['Postal_code'],3,3);
        echo <<< Info
        <tr>
         <td>$row[name]</td>
         <td>$row[surname]</td>
         <td>$row[CountryName]</td>
         <td>$row[state]</td>
         <td>$row[city]</td>
         <td>$row[NIP]</td>
         <td>$postalcode</td>
         <td>$row[Street_house_nr]</td>
         <td><p><a href="shop.php">Usuń</a></p></td>
         </tr>
Info;
    }
    ?>
    </table>
    <p><a href="shop.php">Powrót</a></p>
</body>
</html>