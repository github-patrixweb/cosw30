{"filter":false,"title":"process_contact.php","tooltip":"/homework/week2/process_contact.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":117,"column":7},"action":"remove","lines":["<?php","/*","","Patrick Olesiak","2019.9.9","process_contact.php","COSW 30 week 2, homework 2","","*/","?>","","<!doctype html>","<html lang=\"en\">","<head>","\t<meta charset=\"utf-8\">","\t<meta charset=\"utf-8\" name=\"viewport\" content= \"width=device-width, initial-scale=1.0\"> ","\t<title>Contact Selina Meyer Form ResultsS</title>","</head>","<body><h1>Contact Selina Meyer Form Results</h1>","<img src=\"http://patricks-web.22web.org/cosw30/homework/week-2/images/Selina_Meyer_access-2019-9-8.jpg\" height=\"201\" title=\"Selina Meyer\">","<?php ","    #get post array in local variables","    $first_name = $_POST['first-name'];","    $last_name = $_POST['last-name'];","    $email = $_POST['email'];","    $gender = $_POST['gender'];","    $age = $_POST['age'];","    $interest1 = $_POST['interest1'];","    $interest2 = $_POST['interest2'];","    $interest3 = $_POST['interest3'];","    $interest4 = $_POST['interest4'];","    $interest5 = $_POST['interest5'];","    $interest6 = $_POST['interest6'];","    $contribution = $_POST['contribution'];","    $email_list = $_POST['email-list'];","    $message = $_POST['message'];","    ","    if ( !empty($first_name) && !empty($last_name) && !empty($email) && !empty($gender) && !empty($age)){","        ?>","        <h2>Thank you for your message.</h2>","        <h3>The information received is listed in the table below.</h3>","        <table width=\"98%\" border=\"1\">","            <tr>","                <td>First Name:</td>","                <td><?php echo $first_name; ?></td>","            </tr>","              <tr>","                <td>Last Name:</td>","                <td><?php echo $last_name; ?></td>","            </tr>","              <tr>","                <td>Email:</td>","                <td><?php echo $email; ?></td>","            </tr>","              <tr>","                <td>Gender:</td>","                <td><?php echo $gender ?></td>","            </tr>","             <tr>","                <td>Age:</td>","                <td><?php echo $age ?></td>","            </tr>","            <tr>","                <td colspan=\"2\">","                <?php","                if (isset($interest1) || isset($interest2) || isset($interest3) || isset($interest4) || isset($interest5) || isset($interest6)){","                    echo (\"<h2>Interests</h2>\");    ","                }","                echo (\"<ul>\");","                # check incoming form checkboxes using isset; if value true/on, then print value; otherwise NOT","                if (isset($interest1)){","                    echo \"<li>NARAL Pro-Choice America</li>\";","                }","                if (isset($interest2)){","                    echo \"<li>National Right to Life Committee</li>\";","                }","                if (isset($interest3)){","                    echo \"<li>Planned Parenthood Action Fund</li>\";","                }","                if (isset($interest4)){","                    echo \"<li>Democrats for Life of America</li>\";","                }","                if (isset($interest5)){","                    echo \"<li>Emily's List</li>\";","                }","                if (isset($interest6)){","                    echo \"<li>Family Policy Alliance</li>\";","                }","                echo (\"</ul>\");","    }    ","    #the user bypassed client-side security and submitted bad info","    else {","        echo \"<h2>Your form was missing valid information.</h2>\";","        echo \"<h3> Please <a href='contact.html' title='contact.html'>fill out the form</a> and resubmit.</h3>\";","    }","                    ?>                ","                                             ","                </td>","            </tr>","            <tr>","                <td>Contribution:</td>","                <td><?php echo \"$\" . number_format($contribution, 2, \".\", \",\"); ?></td>","            </tr>","               <tr>","                <td>Signed up for email list:</td>","                <td><?php if (isset($email_list)){echo \"Yes\";} else {echo \"No\";} ?></td>","            </tr>","               <tr>","                <td>Comments:</td>","                <td><?php echo $message ?></td>","            </tr>","            ","      </table><br />&nbsp;<br />&nbsp;<br />&nbsp;","    <footer>","        <a href=\"https://en.wikipedia.org/wiki/Veep\">Wiki entry for Veep</a>","    </footer>","    </body>","</html>"],"id":2},{"start":{"row":0,"column":0},"end":{"row":130,"column":7},"action":"insert","lines":["<?php","/*","","Patrick Olesiak","2019.9.9","process_contact.php","COSW 30 week 2, homework 2","","*/","?>","","<!doctype html>","<html lang=\"en\">","<head>","\t<meta charset=\"utf-8\">","\t<meta charset=\"utf-8\" name=\"viewport\" content= \"width=device-width, initial-scale=1.0\"> ","\t<title>Contact Selina Meyer Form ResultsS</title>","</head>","<body><h1>Contact Selina Meyer Form Results</h1>","<img src=\"http://patricks-web.22web.org/cosw30/homework/week-2/images/Selina_Meyer_access-2019-9-8.jpg\" height=\"201\" title=\"Selina Meyer\">","<?php ","    #get post array in local variables","    $first_name = $_POST['first-name'];","    $last_name = $_POST['last-name'];","    $email = $_POST['email'];","    $gender = $_POST['gender'];","    $age = $_POST['age'];","    # put selected interests in an array - $interest[]","    $interest = array(1 => \"\", \"\", \"\", \"\", \"\", \"\");","    for ($i = 1; $i < 7; $i++){","            $int = \"interest\" . $i;","            ","            $iTemp = $_POST[\"$int\"];","            if (!empty($iTemp)) {","                $interest[i] = $iTemp;","                echo \"$i is: $interest[i]\";","                ","            }","    }  ","    # $interest[] = ","    $interest1 = $_POST['interest1'];","    $interest2 = $_POST['interest2'];","    $interest3 = $_POST['interest3'];","    $interest4 = $_POST['interest4'];","    $interest5 = $_POST['interest5'];","    $interest6 = $_POST['interest6'];","    $contribution = $_POST['contribution'];","    $email_list = $_POST['email-list'];","    $message = $_POST['message'];","    ","    if ( !empty($first_name) && !empty($last_name) && !empty($email) && !empty($gender) && !empty($age)){","        ?>","        <h2>Thank you for your message.</h2>","        <h3>The information received is listed in the table below.</h3>","        <table width=\"98%\" border=\"1\">","            <tr>","                <td>First Name:</td>","                <td><?php echo $first_name; ?></td>","            </tr>","              <tr>","                <td>Last Name:</td>","                <td><?php echo $last_name; ?></td>","            </tr>","              <tr>","                <td>Email:</td>","                <td><?php echo $email; ?></td>","            </tr>","              <tr>","                <td>Gender:</td>","                <td><?php echo $gender ?></td>","            </tr>","             <tr>","                <td>Age:</td>","                <td><?php echo $age ?></td>","            </tr>","            <tr>","                <td colspan=\"2\">","                <?php","                # assign number in array for check","                $iTemp = count($interest);","                echo $iTemp;","                #print if interest selected","                if ($iTemp > 0) {","                    echo (\"<h2>Interests</h2>\");","                    echo (\"<ul>\");","                    # loop printing of selected interest(s)","                    for ($i = 1, $i < 7, $i++){","                        echo \"<li>$interest[$i] </li>\";","                    }","                    ","                    echo (\"</ul>\");","                }","                else {","                    echo \"No interests were selected\";","                }    ","                   ","                ","                    ","                ","                ","                ","                ","    }","    #the user bypassed client-side security and submitted bad info","    else {","        echo \"<h2>Your form was missing valid information.</h2>\";","        echo \"<h3> Please <a href='contact.html' title='contact.html'>fill out the form</a> and resubmit.</h3>\";","    }","                    ?>                ","                                             ","                </td>","            </tr>","            <tr>","                <td>Contribution:</td>","                <td><?php echo \"$\" . number_format($contribution, 2, \".\", \",\"); ?></td>","            </tr>","               <tr>","                <td>Signed up for email list:</td>","                <td><?php if (isset($email_list)){echo \"Yes\";} else {echo \"No\";} ?></td>","            </tr>","               <tr>","                <td>Comments:</td>","                <td><?php echo $message ?></td>","            </tr>","            ","      </table><br />&nbsp;<br />&nbsp;<br />&nbsp;","    <footer>","        <a href=\"https://en.wikipedia.org/wiki/Veep\">Wiki entry for Veep</a>","    </footer>","    </body>","</html>"]}]]},"ace":{"folds":[],"scrolltop":2034,"scrollleft":0,"selection":{"start":{"row":130,"column":7},"end":{"row":130,"column":7},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":true,"wrapToView":true},"firstLineState":{"row":91,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1568250018909,"hash":"019102f7ea40bbb32fac291bac1fd142befa54fa"}