<?php
echo $_GET['z'];
include 'includes/header.html';
?>
                <?php
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
                    $first_name = cleanUserInput($_POST['first_name']);
                    // if any of the 4 form variable are empty, display error
                    if (!empty($first_name)){
                        ++$valid_input;
                    }
                    else {
                        echo "<h2 class='error'>First name is required.</h2>";
                    } 
                    // call cleanuserinput function, and pass direty string
                    $last_name = cleanUserInput($_POST['last_name']);
                    if (!empty($_POST['last_name'])){
                        ++$valid_input;
                    }
                    else {
                        echo "<h2 class='error'>Last name is required.</h2>";
                    }  
                    // call cleanuserinput function, and pass direty string
                    $email = cleanUserInput($_POST['email']);
                    if (!empty($email)){
                        ++$valid_input;
                    }
                    else {
                        echo "<h2 class='error'>Email is required.</h2>";
                    } 
                    $password = cleanUserInput($_POST['password']);
                    $confirm_password = cleanUserInput($_POST['confirm_password']);
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
                             echo "<h2 class='error'>Error:  $query <br> $connection->error</h2>";
                        }
                    }
                ?>

                <h1>Register for Cycle Forums.</h1>
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

                <h2>Last 10 Users Registered for Cycle Forums</h2>
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
                    echo "   <table border='1'>\n
                                <thead>\n
                                    <tr>\n
                                        <th>First Name</th>\n
                                        <th>Last Name</th>\n
                                        <th>Email</th>\n
                                        <th>Password</th>\n
                                        <th>Edit</th>\n
                                    </tr>
                                </thead>
                                <tbody>";
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row['first_name'] . "</td>\n
                                <td>" . $row['last_name'] . "</td>\n
                                <td>" . $row['email'] . "</td>\n
                                <td>" . $row['password'] . "</td>\n
                                <td><a href='update.php?id=" . $row['user_id'] . "' title='edit...'>Update this record</a></td>\n
                            </tr>";
                    }
                    echo "</tbody>
                    </table>";
                    // Next, query all users for select
                    $query = 'SELECT * FROM USER_OLESIAK
                        ORDER BY first_name';

                    // creat dropdown of all users ordered by first_name
                    echo    "<h3>Here is a list of all active users on Cycle Forums</h3>\n
                            <h4>Select any user and press the button to edit the data</h4>\n
                            <form action='update.php' method='get'>\n
                                <select name='id'>\n";
                    $result = mysqli_query($connection, $query);
                    while($row = $result->fetch_assoc()) {
                        echo "<option value=\"" . $row['user_id'] . "\">". $row['first_name'] . " " . $row['last_name'] . "</option>\n";
                    }
                    echo        "</select>\n
                                <button>Edit the selected user</button>\n
                                 <input type='image' src='images/mysql_dol.JPG' alt='edit user data' width='29' height='25'>\n
                            </form>";
                }
                 else {
                    // Output an error
                    die("<h2 class='error'>Connection failed:  $connection->connect_error</h2>");
                }  
                include 'includes/footer.html'?> 
    </body>
</html>
