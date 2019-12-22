<?php
/*
    Patrick Olesiak
    2019.9.16
    COSW 30 - Homework 3/week 3
*/
?>
<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="utf-8">
       <link rel="stylesheet" type="text/css" href="css/lbcc_tuition_calc.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>LBCC Tuition Calculator Results</title>
    </head>
    <body>
        <img src="http://elethompson.com/old_site/php/homework2/images/lbcc.gif" alt="Long Beach City College ">

<?php
        
        # get post form values and calculations
        $units = $_POST['units'];
        $tuition_rate = $_POST['residency'];
        $mandatory_fees = 20;
        $optional_fees = $_POST['csc'] + $_POST['parking'];
        $tuition = number_format($units * $tuition_rate + $mandatory_fees + $optional_fees);
        $scholarship = rand(0, $tuition);
        
        # output the results
        echo "<h2>Tuition cost:</h2>\n";
        echo "<p>Cost of Tuition: <strong>$units</strong> units x <strong>$" . $tuition_rate . " = $" . number_format($units * $tuition_rate) . "</strong></p>";
        echo "<P>Student Health Fee: <strong>$20</strong></p> ";
        echo "<p>College Service Card: <strong>$" . $_POST['csc'] . "</strong></p>";
        echo "<p>Parking Permit: <strong>$" . $_POST['parking'] . "</strong>";
        echo "<p><strong>Total Registration Cost: $" . $tuition . "</strong>\n</p>\n";
        echo "<p>Scholarship Award: <strong>$" . number_format($scholarship) . "</strong></p>\n";
        echo "<p><strong>Total College Balance Due: $" . number_format($units * $tuition_rate + $mandatory_fees + $optional_fees - $scholarship) . "</strong></p>\n"
        
        
?>        
  </body>
</html>      
