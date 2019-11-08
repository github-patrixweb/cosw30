<?php
                include 'includes/header.html';

                if (!isset($_GET['id'])) {
                    header("Location: crud.php"); 
                }

                $id = $_GET['id']; ?>
                <h1>Update record id: <?php echo "$id"?></h1>
                <h2><a href='crud.php'>CRUD</a></h2>
                <?php 
                $query = "SELECT * FROM USER_OLESIAK
                WHERE user_id = $id";

                // Run your query
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
                            name='password'><br />\n";
                       
                        /* . " " . $row['last_name'] . " " . $row['email'] . " " . $row['password'] . " " . $row['user_id'] ; */
                }
                else {
                    echo "<h2 class='error>No result</h2>\n";

                            }





                include 'includes/footer.html'; 
?>