<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test</title>
    <link rel="stylesheet" href="style.css">
  </head>

    <?php
      date_default_timezone_set('europe/amsterdam');
      echo '<p id="time">The time is' . date(" H:i:s a </p>");
      $t = date("H");
      if ($t < "06") {
        echo "<body class = 'night'>";
        echo "<p id='night'>Goodnight!</p>";
      }elseif ($t > "06" && $t < "12") {
        echo "<body class = 'morning'>";
        echo "<p id='morning'>Goodmorning!</p>";
      }elseif ($t >= "12" && $t < "18"){
        echo "<body class = 'afternoon'>";
        echo "<p id='afternoon'>Good afternoon!</p>";
      }else {
        echo "<body class = 'eavning'>";
        echo "<p id='eavning'>Good eavning!</p>";
      }
    ?>
  </body>
</html>
