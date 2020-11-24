<?php
$result = $_POST;
echo <<<TAG
    Konto: $result[accountType] </br>
    Imie i Nazwisko: $result[firstName] $result[lastName] </br>
    Kraj:  $result[country] </br>
    Adres 1: $result[streetAddress1] </br> 
    Adres 2: $result[streetAddress2] </br>
    Kod Pocztowy i miasto: $result[zipCode] $result[city] </br>
    Wojewodztwo: $result[state] </br>
    Numer telefonu: $result[phoneNumber] </br>
TAG;
?>
