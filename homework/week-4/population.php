<?php
/*
            Patrick Olesiak
            COSW 30
            Homework 4/Week 4
            Arrays
        
*/
        
$city_state_pop = array("New York, New York" => "8,622,698", 
                        "Los Angeles, California" => "3,999,759", 
                        "Chicago, Illinois" => "2,716,450", 
                        "Houston, Texas" => "2,312,717", 
                        "Phoenix, Arizona" => "1,626,078", 
                        "Philadelphia, Pennsylvania" => "1,580,863", 
                        "San Antonio, Texas" => "1,511,946", 
                        "San Diego, California" => "1,419,516", 
                        "Dallas, Texas" => "1,341,075", 
                        "San Jose, California" => "1,035,317", 
                        "Austin, Texas" => "950,715", 
                        "Jacksonville, Florida" => "892,062", 
                        "San Francisco, California" => "884,363", 
                        "Columbus, Ohio" => "879,170", 
                        "Fort Worth, Texas" => "874,168",);

$city_state_rank = array("New York, New York" => "1", 
                        "Los Angeles, California" => "2", 
                        "Chicago, Illinois" => "3", 
                        "Houston, Texas" => "4", 
                        "Phoenix, Arizona" => "5", 
                        "Philadelphia, Pennsylvania" => "6", 
                        "San Antonio, Texas" => "7", 
                        "San Diego, California" => "8", 
                        "Dallas, Texas" => "9", 
                        "San Jose, California" => "10", 
                        "Austin, Texas" => "11", 
                        "Jacksonville, Florida" => "12", 
                        "San Francisco, California" => "13", 
                        "Columbus, Ohio" => "14", 
                        "Fort Worth, Texas" => "15",);


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
    <body>
       <div class="citystate">
           <p><a href="quote.html" title="Quote Page">Click here for the Quote Page.</a></p>
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
           <p><a href="quote.html" title="Quote Page">Click here for the Quote Page.</a></p>
        </div>   
        <div class="citystate">
                           <p><a href="quote.html" title="Quote Page">Click here for the Quote Page.</a></p>
                            <table border="1" cellspacing="1" cellpadding="3">
                               <tbody>
                                    <tr>
                                        <td colspan="3" valign="top">
                                        <p><strong>The 15 Most Populous Cities as of July 1, 2017<br />Sorted by City Name</strong></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                        <p><strong>Rank</strong></p>
                                        </td>
                                        <td  valign="top">
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
                    echo "<td>$city_state_rank[$k]</td>\n";
                    echo "<td>$k</td>\n";
                    echo "<td>$v</td>\n<tr>\n";
                }

            
                    ?>         </tbody>
                            </table>
            <p><a href="quote.html" title="Quote Page">Click here for the Quote Page.</a></p>
        </div>
    </body>
</html>      