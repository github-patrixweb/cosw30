<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/quote-style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Quote Process</title>
    </head>
    <body>
       <div id="quote-results">
        <?php
        /*
            Patrick Olesiak
            COSW 30
            Homework 4/Week 4
            Arrays
        
        */
            
        $quote = explode(" ", trim($_POST['short-quote']));
        $o_quote = explode(" ", trim($_POST['short-quote']));
        #loop all in array as originally input; + count
        if (count($quote) < 5){
            echo "<h1>Your quote contains " . count($quote) . " words.</h1>\n <p>Five or more were required. Please <a href='quote.html'>click here</a> and enter 5 or more words.";
        }
        else {
            echo "<h2>List as Originally Input</h2>\n<h3>With " . count($quote) . " Words</h3>\n";
            echo "<ul>\n";
            foreach ($quote as $value){
                echo "<li>" . $value . "</li>\n";
            } 
            echo "</ul>\n";
            sort($quote);
            echo "<h2>List Alaphabetized by Words</h2>\n";
            echo "<ul>\n";
            foreach ($quote as $alpha){
                    echo "<li>" . $alpha . "</li>\n";
            }
            echo "</ul>\n";
            rsort($quote);
            echo "<h2>List Decending by Words</h2>\n";
            echo "<ul>\n";
            foreach ($quote as $decend){
                    echo "<li>" . $decend . "</li>\n";
            }
            echo "</ul>\n";
            
            array_push($o_quote, "I", "love", "you");
            echo "<h2>Original quote with \"I Love You\" appended (" . count($o_quote) . ")</h2>\n";
            echo "<ul>\n";
            foreach ($o_quote as $i){
                    echo "<li>" . $i . "</li>\n";
            }
            echo "</ul>\n";
            $output = array_slice($o_quote, 3);
            echo "<h2>Original quote with \"I Love You\" appended and first three words removed (" . count($output) . ")</h2>\n";
            echo "<ul>\n";
            foreach ($output as $i){
                    echo "<li>" . $i . "</li>\n";
            }
            
           echo "</ul>\n";
            echo '<h3>Input another <a href="quote.html" title="Input another quote">quote</a>.</h3>';
        }
        
        ?>
           
        </div>   
    </body>
</html>      