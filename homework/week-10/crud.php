<!doctype html>
    <html>
        <head>
            <meta charset="utf-8">
            <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Open+Sans&display=swap" rel="stylesheet">        
            <link rel="stylesheet" type="text/css" href="includes/css/cf_style.css">
            <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>MySQL CRUD</title>
        </head>
        <body>
            <div id="wrapper">
                <div id="innerContent">
                    <img src="https://loremflickr.com/800/222" width="800" height="222"/>
                    <?php
                    // Add the database connection
                    include 'includes/database.php';
                    //set sticky form variables to empty strings in casse script does not change them.
                    $first_name = "";
                    $last_name = "";    
                    $password = "";
                    $email = "";    

                        /*
                    *   CHECK IF THE FORM HAS BEEN SUBMITTED AND INSERT
                    *   NEW USER INTO THE DATABASE
                    */

                    if($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $valid_input = 0;
                        // strip all white space from each form variable; one at a time...
                        $first_name = preg_replace('/\s/', '', $_POST['first_name']);
                        // if any of the 4 form variable are empty, display error
                        if (!empty($first_name)){
                            $first_name = str_replace("'","&#39;",$first_name);
                            ++$valid_input;
                        }
                        else {
                            echo "<h2 class='error'>First name is required.</h2>";
                        } 
                        // strip all white space from each form variable; one at a time...
                        $last_name = preg_replace('/\s/', '', $_POST['last_name']);
                        if (!empty($_POST['last_name'])){
                            $last_name = str_replace("'","&#39;",$last_name);
                            ++$valid_input;
                        }
                        else {
                            echo "<h2 class='error'>Last name is required.</h2>";
                        }  
                        // strip all white space from each form variable; one at a time...
                        $email = preg_replace('/\s/', '', $_POST['email']);
                        if (!empty($email)){
                            $email = str_replace("'","&#39;",$email);;
                            ++$valid_input;
                        }
                        else {
                            echo "<h2 class='error'>Email is required.</h2>";
                        } 
                        $password = preg_replace('/\s/', '', $_POST['password']);
                        $confirm_password = preg_replace('/\s/', '', $_POST['confirm_password']);
                        // password control structure
                        if (strlen($password) < 8) {
                            echo "<h2 class='error'>Please enter a password of 8 or more characters excluding whitespace.</p>";
                        }
                        else {
                            if ($password == $confirm_password) {
                                ++$valid_input;
                            }
                            else {
                                echo "<h2 class='error'>The passwords entered did not match.  Please enter a password of 8 or more characters, excluding whitespace, and confirm it.</p>";
                                    }
                        }
                        $password = str_replace("'","&#39;",$password);

                        }
                        // if all input not empty after white space stripped, and passwords match, input in database
                        if ($valid_input == 4) {
                            $query = "INSERT INTO USER_OLESIAK (first_name, last_name, email, password)
                                        VALUES ('$first_name', '$last_name', '$email', '$password')";
                            if ($connection->query($query) === true) {
                                echo "<h2 class='success'>$first_name $last_name, thank you for registering at Cycle Forums!<br />  Your record was successfully added to our system.<br />You may now login and enjoy Cycle Forums.</h2>";
                                $first_name = "";
                                $last_name = "";
                                $email = "";
                                $password = "";
                            }
                            else {
                                 echo "<h2 class='error'>Error:  $sql <br> $connection->error</h2>";
                            }
                        }
                    ?>

                    <h1>Create a New User</h1>
                    <div id="formLables">
                        <label for="first_name" class="formLable">First Name</label>
                        <br />&nbsp;<br />

                        <label for="last_name" class="formLable">Last Name</label>
                        <br />&nbsp;<br />

                        <label for="email" class="formLable">Email</label>
                        <br />&nbsp;<br />

                        <label for="password" class="formLable">Password</label>
                        <br />&nbsp;<br />

                        <label for="confirm_password" class="formLable">Retype Password</label>
                    </div>
                    <div id="formFields">
                        <form action="crud.php" method="POST">

                            <input type="text" id="first_name" name="first_name" value="<?php echo $first_name ?>" placeholder="First Name"><br />&nbsp;<br />


                            <input type="text" id="last_name" name="last_name" value="<?php echo $last_name ?>" placeholder="Last Name"><br />&nbsp;<br />


                            <input type="email" id="email" name="email" value="<?php echo $email ?>" placeholder="email"><br />&nbsp;<br />


                            <input type="password" id="password" name="password" value="<?php echo $password ?>" placeholder="Password of 8 or more characters excluding white space"><br />&nbsp;<br />

                            <input type="password" id="confirm_password" name="confirm_password" placeholder="Retype password of 8 or more characters excluding white space"><br />&nbsp;<br />

                            <button>Register</button>

                        </form>
                    </div>

                    <h2>Output a List of Users</h2>
                    <?php

                    /*
                    *   QUERY THE DATABASE AND STORE ALL USERS INTO A VARIABLE
                    */
                    // Create your query
                    $query = 'SELECT * FROM USER_OLESIAK
                            ORDER BY user_id DESC
                            LIMIT 0, 10';

                    // Run your query
                    $result = mysqli_query($connection, $query);

                    // Check if the database returned anything
                    if($result) {
                        echo "   <table border='1'>
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                </tr>
                            </thead>
                            <tbody>";
                       // while($row = mysqli_fetch_array($result)){
                            // Output the results

                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>" . $row['first_name'] . "</td>\n
                                    <td>" . $row['last_name'] . "</td>\n
                                    <td>" . $row['email'] . "</td>\n
                                    <td>" . $row['password'] . "</td>\n
                                </tr>";

                        }
                        echo "</tbody>
                        </table>";

                        }
                     else {
                        // Output an error
                        die("<h2 class='error'>Connection failed:  $connection->connect_error</h2>");
                    }  
                    include 'includes/footer.html'?> 
                </div>   
            </div>
        </body>
    </html>
