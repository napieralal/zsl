<?php
session_start();
?>
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
        #czerwony
        {
            color:red;
        }
    </style>
</head>
<body>
    <h3>Customers</h3>
    <table>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Country</th>
        <th>State</th>
        <th>City</th>
        <th>NIP</th>
        <th>Postal Code</th>
        <th>Street and number</th>
    </tr>
    <?php
    //require_once "./delete.php";
    require_once "./connect.php";
    $sql = "select `clients`.`id_client`,`clients`.`name`,`clients`.`surname`,`cities`.`city`,`cities`.`Postal_code`,`clients`.`NIP`,`clients`.`Street_house_nr`,`states`.`state`,`tbl_countries`.`CountryName`\n"

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
         <td>$row[id_client]</td>
         <td>$row[name]</td>
         <td>$row[surname]</td>
         <td>$row[CountryName]</td>
         <td>$row[state]</td>
         <td>$row[city]</td>
         <td>$row[NIP]</td>
         <td>$postalcode</td>
         <td>$row[Street_house_nr]</td>
         <td><a href="delete.php?id=$row[id_client]">Usuń</a></td>
         </tr>
Info;
    }
    ?>
    </table><hr>
    <h4>Dodawanie użytkownika</h4>
    <?php

if(isset($_SESSION['error']))
{
    echo '<div id="czerwony"><h4>',$_SESSION['error'],'</h4></div>';
    unset($_SESSION['error']);
}
    if(isset($_GET['add_user']))
    {
    if($_GET['add_user'] == 1)
    {
        echo "<h4>Dodano użytkownika: $_GET[name] $_GET[surname]</h4>";
    }
    else{
        echo "<h4>Nie dodano użytkownika</h4>";
    }
    }
    echo <<<FORMADDUSER
    <form action="add_user.php" method="POST">
    <input type="text" name="name" placeholder="Imie"><br><br>
    <input type="text" name="surname" placeholder="Nazwisko"><br><br>
    <input type="date" name="birthday" placeholder="Data urodzenia"><br><br>
    <input type="number" name="postalCode" placeholder="Kod pocztowy"><br><br>
    FORMADDUSER;

    $sql2 = "SELECT `city`,`city_id`,`state` from `cities` inner join `states` on `cities`.`state_id`=`states`.`state_id`";
    $result2 = $connect->query($sql2);
    echo '<select name="city">';
    while($row = $result2->fetch_assoc()){
        echo "<option value=\"$row[city_id]\">$row[city] / $row[state]</option>";
    }
    echo <<<FORMADDUSER
    </select><br><br>
    <input type="text" name="city" placeholder="Miasto"><br><br>
    <input type="text" name="street" placeholder="Ulica"><br><br>
    <input type="number" name="nip" placeholder="NIP"><br><br>
    <input type="submit" value="Dodaj użytkownika"><br>
    </form>
FORMADDUSER;
$connect->close();
?>
</body>
</html>