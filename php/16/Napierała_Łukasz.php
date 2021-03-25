<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klienci</title>
    <style>
        th, td{
            border: 1px solid black;
            padding: 3px 6px;
        }
        table{
            border-collapse: collapse;
            text-align:center;
        }
    </style>
</head>
<body>
    <h3>Klienci</h3>
    <table>
        <tr>
            <th>Kraj</th>
            <th>Kod poczotwy</th>
            <th>Województwo</th>
            <th>Ulica</th>
            <th>Nazwisko</th>
            <th>ID</th>
        </tr>
    <?php
    require_once './scripts_Łukasz/connect.php';
    if(!$connect->connect_errno){
    $sql = "select *
        from clients
        inner join cities
        using(city_id)
        inner join
        states using(state_id)
        inner join
        countries using(country_id)";
    $result=$connect->query($sql);
    while($row=$result->fetch_assoc())
    {
        $postalcode = substr($row['postal_code'],0,2).'-'.substr($row['postal_code'],2,3);
        echo <<< CLIENTS
        <tr>
        <td>$row[country]</td>
        <td>$postalcode</td>
        <td>$row[state]</td>
        <td>$row[street]</td>
        <td>$row[surname]</td>
        <td>$row[client_id]</td>
        <td><a href="./scripts_Łukasz/usun_Napierala.php?id=$row[client_id]">Usuń</a></td>
        </tr>
CLIENTS;
    }
    ?>
    </table>
    <br>
    <h3>Dodaj wojewodztwo</h3>
    <form action="./scripts_Łukasz/dodaj_Napierała.php" method="post">
        <input type="text" name="state" placeholder="Tutaj podaj wojewodztwo"><br>
        <select name="country">
        <?php
        $sql= "SELECT * FROM countries";
        $result=$connect->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo "<option value='$row[country_id]'>$row[country]</option>";
        }
        ?>
        </select><br>
        <input type="submit" value="Wyślij">
    </form>
<?php
    }
else
{
    echo "Błąd połączenia";
}
?>
</body>
</html>