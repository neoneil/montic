

<?php

    $choosingValues = $_COOKIE['mycookie'];
    echo 'Choosing values are '.$choosingValues;

    print "<font color = \"red\"><p>how are you</p></font>";

    print "<p>$choosingValues</p>";

    $values = array(0, 0.0, false, '');

    //var_dump(explode(" ",$choosingValues));
    $chooseValuesAfterSplit = explode(" ",$choosingValues);


     foreach ($chooseValuesAfterSplit as $value) {
      print "$value<br>";
     }

     var_dump($chooseValuesAfterSplit);
      $cus = "Neo";

     print "<p><b>Dear Customer: </b>$cus ,</p> <br /> <p>This is an Auto-Reply Email generated by officail gmail from Montgomery International Consultants</p> <p>Your immigration score is $chooseValuesAfterSplit[11]</p>";

?>
