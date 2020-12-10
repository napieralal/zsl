<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    table{
      border: 1px solid black;
      margin: auto;
      box-shadow:0 0 3px yellow;
      height:100px;
    }
    </style>
  </head>
  <body>
    <h3 style="text-align:center">Sklep internetowy<h3>
      <form method="post" action="./store.php">
        <table>
          <tr><td class="tekst">Wybierz produkty</td></tr>
              <tr><td>
                <select name="produkt1">
                <option value="200">Monitor</option>
                <option value="500">Karta graficzna</option>
                <option value="600">Procesor</option>
                <td><input type="number" name="ilosc1"></td>
              </select></td></tr>
              <tr><td>
                <select name="produkt2">
                <option value="200">Monitor</option>
                <option value="500">Karta graficzna</option>
                <option value="600">Procesor</option>
                <td><input type="number" name="ilosc2"></td>
              </select></td></tr>
              <tr><td>
                <select name="produkt3">
                <option value="200">Monitor</option>
                <option value="500">Karta graficzna</option>
                <option value="600">Procesor</option>
                <td><input type="number" name="ilosc3" ></td>
              </select></td></tr>
              <tr><td><button type="submit"value="KUP">KUP</button></td></tr>
          </table>
        </form>
  </body>
</html>
