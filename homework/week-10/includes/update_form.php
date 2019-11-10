<?php
                $query = "SELECT * FROM USER_OLESIAK
                            WHERE user_id = $id";
                $result = mysqli_query($connection, $query);

                if($result) {
                   $row = $result->fetch_assoc();
                    echo "<form action='update.php' method='post'>\n
                            <label for='first_name'>First Name:</label>\n
                            <input type='text' value='" . $row['first_name'] . "' 
                            name='first_name'><br />\n
                       <label for='last_name'>Larst Name:</label>\n
                            <input type='text' value='" . $row['last_name'] . "' 
                            name='last_name'><br />\n
                       <label for='email'>Email:</label>\n
                            <input type='text' value='" . $row['email'] . "' 
                            name='email'><br />\n
                       <label for='password'>Password:</label>\n
                            <input type='text' value='" . $row['password'] . "' 
                            name='password'><br />\n
                       <label for='active'>Remove user:</label>\n
                            <input type='checkbox' name='active' value='0'>\n
                            <input type='hidden' name='id' value='$id'>\n
                            
                            <input type='submit'>";
                        
                       
                        /* . " " . $row['last_name'] . " " . $row['email'] . " " . $row['password'] . " " . $row['user_id'] ; */
                }
                else {
                    echo "<h2 class='error'>No result</h2>\n";
                }
