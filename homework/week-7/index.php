<?php
/*

Patrick Olesiak
Homework 7: Fuctions 
*/
include "includes/functions.php";
?>
<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Righteous&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/io_fun_machine.css">
        <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Function Machine</title>
    </head>
    <body>
        <div id="wrapper">
         <?php include 'includes/header.php' ?>
         <?php /* control structure to check if form submitted or not
                and respond */
            if (!empty($_POST)){
                $input1 = $_POST['input1'];
                $input2 = $_POST['input2'];
                $operator = $_POST['operator'];
                // check if operator was selected
                if ($operator != "") {
                    funMachine($input1, $operator, $input2);
                }
                else {
                    // an operator was not selected
                    echo '<h2 class="warning">Required operation data is missing...<br />please try again.</h2>';
                }
            
            echo '<h3><a href="index.php" title="Calculate again.">Calculate again</a></h3>';
            }    
            else
            {
             echo '<div id="functionMachineDiv">';
                 echo '<form action="index.php" method="post" id="functionMachineForm">';
                    echo ' <label for="input1">Please input either a string or number</label>';
                     echo '<input type="text" name="input1" placeholder="... a string or number"><br />&nbsp;<br />
                     <select name="operator">
                         <option value="">Please select an operator.</option>
                         <option value="42">Numbers: multiply &#40;&#42;&#41;</option>
                         <option value="47">Numbers: divide &#40;&#92;&#41;</option>
                         <option value="43">Numbers: add &#40;&#43;&#41;</option>
                         <option value="45">Numbers: subtract &#40;&#45;&#41;</option>
                         <option value="s">Strings: shuffle &#40;&#46;&#8226;&#9679;&#41;</option>
                         <option value="l">Strings: lengths &#40;&#63;&#41;</option>
                     </select><br />&nbsp;<br />
                     <label for="input1">Please input either a string or number</label>
                     <input type="text" name="input2" placeholder="... a string or number"><br />&nbsp;<br />
                     <button>Calculate</button>
                 </form> 
             </div>';
            }
              include 'includes/footer.php'; ?> 
            </div> 
            
            
    </body>
</html>      