<?php
/* 2019.10.14 went from single form to double forms: one for math, and the other for a string.  I preferred the single form, but received positive user feedback with a side note about confussion regarding string/number input.  After updating with regular expressions via preg_replace(), I second thought this as a better user solution.  The time is limited, so some features are pending indefinately.

for now, 10.10.2019, this only includes a single function with several calls to internal functions */

function funMachine($sn1, $op, $sn2) {
    if (is_numeric($op)) {
        /* strip non-numeric data from user inputs*/
        $sn1 = preg_replace("/[^0-9]/", "", $sn1);
        $sn2 = preg_replace("/[^0-9]/", "", $sn2);
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
                echo "<h3>The string input, <strong>$sn1</strong>, was shuffled as:<br />&nbsp;<br /> $result</h3>";

            }
            else {
                echo "<h2 class='warning'>You selected to shuffle the string, but failed to input one.<br />Please try again.";
            }
        }
        else { // string operation strlen() a.k.a. length
            if (!empty($sn1) || !empty($sn2)) {
                $l1 = strlen($sn1);
                $l2 = strlen($sn2);
                $l3 = $l1 + $l2;
                echo "<h3>The string, $sn1, has a length of $l1 characters.</h3>";
            }
            else {
                echo "<h2 class='warning'>You selected to count the length of a string, but failed to input one.<br />Please try again.";

            }
        }
    }
include 'includes/function_machine_instructions.html';    
} ?>