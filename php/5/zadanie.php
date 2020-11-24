<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zadanko</title>
  </head>
  <body>
    <form action="./costam_show.php" method="get">
    <table border = "1 px solid">
      <tr style=background-color:lightblue;>
<th>Name</th>
<th>Value</th>
      </tr>
      <tr>
<th>Name</th>
<th><input type="text" name="login">
</th>
      </tr>
      <tr>
<th>Sex</th>
<th>
  <input type="radio" name="sex" checked>Male<br>
<input type="radio" name="sex">Female
</th>
      </tr>
      <tr>
<th>Eye color</th>
<th><select name="eye">
  <option value="green">green</option>
  <option value="blue">blue</option>
  <option value="brown">brown</option>
  </th>
      </tr>
      <tr>
<th>Check all that apply</th>
<th>
<input type="checkbox" name="regulamin">Over 6 feet tall<br>
<input type="checkbox" name="regulamin">Over 200 pounds
</th>
      </tr>
      <tr>
      <td coldspan="2">Describe your athletic ability:<br>
      <textarea style="resize:none" name="athletic" rows="3" cols="40"></textarea>
    </td>
  </tr>
      <tr>
<td coldspan="2">
  <input style="margin:0 auto;display:block" type="submit" value="enter my information">
      </tr>
    </table>
  </body>
</html>
