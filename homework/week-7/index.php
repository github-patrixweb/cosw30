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
                include 'includes/double_form.html';
                include 'includes/function_machine_instructions.html';    
                echo '</div>';
            }
              include 'includes/footer.php'; ?> 
            </div> 
            
            
    </body>
</html>      