<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table{
        border-collapse: collapse;
    }
    th,tr,td{
        border: 1px solid black;
    }
    </style>
</head>
<body>
<?php
$connect = new mysqli('localhost','root','','sklep_internetowy');
$sql = "select `program`,`cena`,count(`zestawy`.`Id_pakietu`) as `liczba_pakietow`\n"

. "from `programy`\n"

. "inner join `zestawy`\n"

. "on `programy`.`Id_programu`=`zestawy`.`Id_programu`\n"

. "inner join `pakiety`\n"

. "on `zestawy`.`Id_pakietu`=`pakiety`.`Id_pakietu`\n"

. "where `rodzaj`like\"edytor dokumentow tekstowych\"\n"

. "group by `program`\n"

. "having `liczba_pakietow`>=2";
$sql1 = "select `nazwa_pakietu`,`firma`,sum(`cena`) as `wartosc`\n"

. "from `programy`\n"

. "inner join `zestawy`\n"

. "on `programy`.`Id_programu`=`zestawy`.`Id_programu`\n"

. "inner join `pakiety`\n"

. "on `zestawy`.`Id_pakietu`=`pakiety`.`Id_pakietu`\n"

. "group by `nazwa_pakietu`\n"

. "order by `wartosc` desc\n"

. "limit 3";
$result = $connect->query($sql);
$result1 = $connect->query($sql1);
echo "<h3>Zadanie 6.1</h3>";
echo "Program - Cena - Liczba_pakietów";
while($row = $result->fetch_assoc())
{
    echo <<< ZADANIE1
    <ul>
    <li>$row[program] - $row[cena]zł - $row[liczba_pakietow]</li>
    </ul>
ZADANIE1;
}
echo "<hr><h3>Zadanie 6.2</h3>";
echo "<table>";
echo "<th>Nazwa pakietu</th>";
echo "<th>Firma</th>";
echo "<th>Wartość</th>";
while($row = $result1->fetch_assoc())
{
    echo <<< ZADANIE2
    <tr>
    <td>$row[nazwa_pakietu]</td>
    <td>$row[firma]</td>
    <td>$row[wartosc]zł</td>
    </tr>
ZADANIE2;
}
echo "</table>";
$connect->close();
?>
</body>
</html>