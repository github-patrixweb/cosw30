<?php
// for now, 10.10.2019, this only includes a single function with several calls to internal functions
function funMachine($sn1, $op, $sn2) {
    if (is_numeric($op)) {
        /* strip non-numeric data from user inputs*/
        $sn1 = preg_replace("/[^0-9.]/", "", $sn1);
        $sn2 = preg_replace("/[^0-9.]/", "", $sn2);
        if (is_numeric($sn1) && is_numeric($sn2) ){
           // calc absolute value of arguments using operator passed
           switch ($op) {
               case 42:
                   $result = abs($sn1 * $sn2);
                   break;
               case 47:
                   if ($sn2 == "0") {
                     $result = "undefined: division by zero is not valid";
                       break;
                   }
                   $result = abs($sn1 / $sn2);
                   break;
               case 43:
                    $result = abs($sn1 + $sn2);
                    break;
               case 45:  
                   $result = abs($sn1 - $sn2);
                   break;
           }
           echo '<h3>The absolute value of ' . $sn1 . " " . chr($op) . " " . $sn2 . ' is <strong>' . $result . '</strong>.</h3>';
            } else {
                    echo "<h2 class='warning'>You selected a math operator, but failed to input two numeric values.<br />Please try again.</h2>";
                }
 }
    else {
        // string operation shuffle()
        if ($op == "s") {
            if (!empty($sn1) || !empty($sn2)) {
                $result = str_shuffle($sn1 . $sn2);
                echo "<h3>The string&#40s&#41 input, <strong>$sn1</strong> and <strong>$sn2</strong>, were shuffled as: $result</h3>";

            }
            else {
                echo "<h2 class='warning'>You selected to shuffle the strings, but failed to input any.<br />Please try again.";
            }
        }
        else { // string operation strlen() a.k.a. length
            if (!empty($sn1) || !empty($sn2)) {
                $l1 = strlen($sn1);
                $l2 = strlen($sn2);
                $l3 = $l1 + $l2;
                echo "<h3>The first string, $sn1, has a length of $l1 characters<br />The second string, $sn2, has a legnth of $l2 characters<br />The combined length is $l3 characters.</h3>";
            }
            else {
                echo "<h2 class='warning'>You selected to calculate string lengths, but failed to input any.<br />Please try again.";

            }
        }
    }
}?>