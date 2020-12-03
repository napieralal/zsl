<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <style>
    table{
      text-align: center;
      border-collapse: collapse;
    }
    td{
       border:1px solid black;
       padding: 5px;
    }
    th{
       border:1px solid black;
       padding: 5px;
    }
    </style>
  <?php
    setlocale(LC_TIME, 'PL');
    $date=date('Y-m-d');
    $date1 = date("l",strtotime($date));
    switch($date1)
    {
      case 'Monday': $date1= 'Poniedziałek'; break;
      case 'Tuesday': $date1= 'Wtorek'; break;
      case 'Wednesday': $date1= 'Środa'; break;
      case 'Thursday': $date1= 'Czwartek'; break;
      case 'Friday': $date1= 'Piątek'; break;
      case 'Saturday': $date1= 'Sobota'; break;
      case 'Sunday': $date1 = 'Niedziela'; break;
    }
    $date5=strftime("%d %B %Y");
    $date6=date('G:i:s');
    ?>
    <table>
        <tr>
          <th colspan="2">Data: <?php echo "$date5 | $date1 | godzina: $date6" ?></th>
        </tr>
        <tr>
        <td>Klasa: 3B2t gr_2</td>
        <td><a href="" onclick="wzor()">(-a+(√𝑏^2-2𝑎))/a</a></td>
        </tr>
    </table>
    <?php
    $a=$_POST['liczba1'];
    $b=$_POST['liczba2'];
    $wynik=0;
    if(is_numeric($a)&&is_numeric($b))
    {
      require_once './function.php';
      wzor($a, $b);
    }
    echo "<br>";
    $imie=$_POST['text1'];
    $nazwisko=$_POST['text2'];
    /*$imie=ucfirst(strtolower(trim($imie)));
    $nazwisko=trim(ucfirst(strtolower($nazwisko)));*/
    $imie = trim(ucfirst(strtolower($imie)));
    $nazwisko = trim(ucfirst(strtolower($nazwisko)));
    echo "$imie $nazwisko";
     ?>
  </body>
</html>
