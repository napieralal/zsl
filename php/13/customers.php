<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klienci</title>
</head>
<body>
    <h3>Clients</h3>
    <?php
    $connect=new mysqli('localhost','root','','shop');
    $sql="SELECT * FROM `clients`";
    $result=$connect->query($sql);
    while($row=$result->fetch_assoc())
    {
        echo <<< Clients
        Client:
        <br>
        <b>Surname</b>: $row[surname]
        <b>Name</b>: $row[name]
        <b>NIP</b>: $row[NIP]
        <b>Postal Code</b>: $row[Postal_code]
        <b>City</b>: $row[City]
        <b>Street and house number</b>: $row[Street_house_nr]
        <hr>
Clients;        
    }
    ?>
    <p><a href="shop.php">Powrót</a></p>
</body>
</html>