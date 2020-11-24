
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data i czas</title>
  </head>
  <body>
    <b>Data i Czas</b><br>
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
    $przecinek=",";
     ?>
     <br>
    <form method="post">
      <input type="date" name="date" value="<?php echo $date?>"><br><br>
      <input type="time" name="time" value="<?php echo date('G:i:s')?>"><br><br>
      <input type="text" name="date" value="<?php echo $date1?>" size="10"><br><br>
      <input type="text" name="date" value="<?php echo "$date5, $date6 | $date1"?>" size="35"><br><br>
    </form>
    <?php
    require_once './function.php';
    $dni=yday();
    $dzien=getdate();
    $left=left_day($dni,$dzien);
    echo
    "<ul>
    <li>Ilość dni w roku:"; echo  $dni; if($dni==366){echo " Rok jest przestepny";}
    else echo " Rok nie jest przestepny";echo "</li><br>
    <li>Dzień roku: ";echo $dzien['yday'];echo "</li><br>
    <li>Numer tygodnia w roku: ";echo floor($dzien['yday']/7);echo " </li><br>
    <li>Dni do końca roku: $left </li><br>
    </ul>";
    ?>
  </body>
</html>
