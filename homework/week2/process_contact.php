<?php
/*

Patrick Olesiak
2019.9.9
process_contact.php
COSW 30 week 2, homework 2

*/
?>

<!doctype html>
<html lang="en" style="background-color: navy">
    <head>
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
        <link rel="manifest" href="images/site.webmanifest">
        <link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon.png">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
       <meta charset="utf-8" name="viewport" content= "width=device-width, initial-scale=1.0"> 
        <title>Contact Selina Meyer Form ResultsS</title>
    </head>
    <body style="background-color: red; width: 60%; margin: auto">
        <div id="container" style="margin: auto; background-color: white; width: 40%; padding: 1em">
            <h1>Contact Selina Meyer Form Results</h1>
            <img src="images/Selina_Meyer_access-2019-9-8.jpg" height="201" title="Selina Meyer">
            <?php 
                #put post array in local variables
                $first_name = $_POST['first-name'];
                $last_name = $_POST['last-name'];
                $email = $_POST['email'];
                $gender = $_POST['gender'];
                $age = $_POST['age'];
                # put selected interests in an array - $interest[]
                $interest = array(1 => "", "", "", "", "", "");
                for ($i = 1; $i < 7; $i++){
                        $int = "interest" . $i;

                        $iTemp = $_POST["$int"];
                        if (!empty($iTemp)) {
                            $interest[$i] = $iTemp;
                        } # end if
                }  # end for loop
                $contribution = $_POST['contribution'];
                $email_list = $_POST['email-list'];
                $message = $_POST['message'];

                if ( !empty($first_name) && !empty($last_name) && !empty($email) && !empty($gender) && !empty($age)){
                    echo "<h2>Thank you $first_name.  Your message has been sent to Selina.</h2>\n";
                    echo "<h3>The information sent to Selina is listed in the table below.</h3>\n";
                    echo "<table width='33%' border='1'>\n";
                        echo "<tr>\n";
                            echo "<td>First Name:</td>\n";
                            echo "<td> $first_name</td>\n";
                        echo "</tr>\n";
                          echo "<tr>\n";
                            echo "<td>Last Name:</td>\n";
                            echo "<td>$last_name </td>\n";
                        echo "</tr>\n";
                          echo "<tr>\n";
                            echo "<td>Email:</td>\n";
                            echo "<td> $email</td>\n";
                        echo "</tr>\n";
                          echo "<tr>\n";
                            echo "<td>Gender:</td>\n";
                            echo "<td> $gender</td>\n";
                        echo "</tr>\n";
                         echo "<tr>\n";
                            echo "<td>Age:</td>\n";
                            echo "<td> $age </td>\n";
                        echo "</tr>\n";
                        echo "<tr>\n";
                            echo "<td colspan='2'>\n";

                            # check if array has data and add 1 for each non empty element
                            $iCount = 0;
                            for ($i = 1; $i < 7; $i++) 
                                if (!empty($interest[$i]))
                                    $iCount += 1 ;

                            #print if interest selected
                            if ($iCount > 0) {
                                echo "<h2>Interests ($iCount)</h2>";
                                echo "<ul>";
                                # loop printing of selected interest(s)
                                for ($i = 1; $i < 7; $i++){ 
                                    if (!empty($interest[$i]))
                                        echo "<li>$interest[$i] </li>";
                                }

                                echo "</ul>";
                            }
                            else 
                                echo "No interests were selected\n";


                            echo "</td>\n";
                        echo "</tr>\n";
                        echo "<tr>\n";
                            echo "<td>Contribution:</td>\n";
                            echo "<td>$" . number_format($contribution, 2, ".", ",") . "</td>\n";
                        echo "</tr>\n";
                           echo "<tr>\n";
                            echo "<td>Signed up for email list:</td>\n";
                            echo "<td>";
                            if (isset($email_list)){
                                echo "Yes";
                            } else {
                                echo "No";
                            }
                        echo "</td>\n";
                        echo "</tr>\n";
                        echo "<tr>\n";
                        echo "<td>Comments:</td>\n";
                        echo "<td>$message</td>\n";
                        echo "</tr>\n";

                echo "</table><br />&nbsp;<br />&nbsp;<br />&nbsp;\n";
                }
                # the client bypassed security and submitted an invalid form
                else {
                    echo "<h2>The form submtted did not include required information; please go back and fill out the form again\n";
                }
                echo "<footer>\n";
                    echo  "<a href='https://www.usa.gov/register-to-vote' title='Register to Vote' target='_blank'><img src='images/reg2vote123.png' alt='Register to Vote'></a>\n        <a href='https://en.wikipedia.org/wiki/Veep'>Wiki entry for Veep</a>\n";

                echo "</footer>\n";
        echo "</div>>\n;
        echo "</body>\n";
echo "</html>";
