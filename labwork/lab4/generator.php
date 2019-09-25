<?php
/*

Patrick Olesiak
lorem_ipsum_generator.php
Week 4 in-class labwork


1. An HTML file called generator_form.html with a form that accepts a string
2. A PHP file called generator.php which accepts the string from the HTML file, shuffles the string, and outputs the shuffled string to the page

We used the shuffle(), explode() and implode() functions to manipulate the string. We started by storing the string in a variable and using explode() to turn it into an array of words. We then shuffled the array using the shuffle() function. We then turned the array back into a string using the implode() function and outputted the string to the page.

*/
$li_string = $_POST["li-string"];
$manipulate = explode(" ", $li_string);
shuffle($manipulate);
$li_txt = implode(" ", $manipulate);
?>
<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/lig_style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Lorem Ipsum Generator Response</title>
    </head>
    <body>
       <div id="lorem-ipsum">
        <img src="https://loremflickr.com/800/222" width="800" height="222"/>
        <h1>You Input: <?php echo "<br />\n<em>\"$li_string\"</em><br />\n" ?> for Manipulation into Lorem Ipsum Text</h1>
        <h2>Roboto Shuffled it Below:</h2>
         <?php
           echo "<p>$li_txt</p>";
    
        ?>   
           <p><a href="generator_form.html" title="Input more text">Input more text.</a></p>
        </div>   
    </body>
</html>      