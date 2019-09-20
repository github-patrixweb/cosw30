<?php
/*
            Patrick Olesiak
            COSW 30
            Homework 4/Week 4
            Arrays
        
*/
        
$city_state_pop = array("New York, New York" => "8,622,698", "Los Angeles, California" => "3,999,759", "Chicago, Illinois" => "2,716,450", "Houston, Texas" => "2,312,717", "Phoenix, Arizona" => "1,626,078", "Philadelphia, Pennsylvania" => "1,580,863", "San Antonio, Texas" => "1,511,946", "San Diego, California" => "1,419,516", "Dallas, Texas" => "1,341,075", "San Jose, California" => "1,035,317", "Austin, Texas" => "950,715", "Jacksonville, Florida" => "892,062", "San Francisco, California" => "884,363", "Columbus, Ohio" => "879,170", "Fort Worth, Texas" => 
"874,168",)


?>
<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/quote-style.css">
        <meta name="viewport" content="class="citystate"width=device-width, initial-scale=1">
       <title>Most Populous Cities &#40;2017 populations&#41;</title>
    </head>
    <body><a href="quote.html" title="Quote Page">Click here for the Quote Page.</a>
       <div class="citystate">
            <table border="1" cellspacing="1" cellpadding="3">
                <tbody>
                <tr>
                    <td colspan="3" valign="top">
                    <p><strong>The 15 Most Populous Cities as of July 1, 2017<br />Sorted by Population</strong></p>
                    </td>
                </tr>
                <tr>
                    <td >
                        <p><strong>Rank</strong></p>
                    </td>
                    <td valign="top">
                        <p><strong>City, State</strong></p>
                    </td>
                    <td  valign="top">
                        <p><strong>2017 total population</strong></p>
                    </td>
                </tr>
                
                <?php
                # populate the table with data
                $i = 0;
                foreach ($city_state_pop as $k => $v){
                    $i++;
                    echo "<tr>\n<td>$i</td>\n";
                    echo "<td>$k</td>\n";
                    echo "<td>$v</td>\n<tr>\n";
                }

            
                    ?>         </tbody>
           </table>
        </div>   
        <div class="citystate">
                           <table border="1" cellspacing="1" cellpadding="3">
                               <tbody>
                                    <tr>
                                        <td colspan="2" valign="top">
                                        <p><strong>The 15 Most Populous Cities as of July 1, 2017<br />Sorted by City Name</strong></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                        <p><strong>City, State</strong></p>
                                        </td>
                                        <td  valign="top">
                                        <p><strong>2017 total population</strong></p>
                                        </td>
                                    </tr>

                <?php
                # populate the table with data
                
                ksort($city_state_pop);              
                foreach ($city_state_pop as $k => $v){
                    echo "<td>$k</td>\n";
                    echo "<td>$v</td>\n<tr>\n";
                }

            
                    ?>         </tbody>
                            </table>
            <p><a href="quote.html" title="Quote Page">Click here for the Quote Page.</a></p>
        </div>
    </body>
</html>      