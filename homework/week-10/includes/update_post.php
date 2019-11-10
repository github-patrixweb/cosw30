<?php
                    $first_name = cleanUserInput($_POST['first_name']);
                    $last_name = cleanUserInput($_POST['last_name']);
                    $email = cleanUserInput($_POST['email']);
                    $password = cleanUserInput($_POST['password']);
                    if (!isset($_POST['active'])){
                        $active = 1;
                    }else{
                        $active = 0;    
                    }
                    
                    $error = [];

                    if ($first_name == ""){
                        $error[] = "First Name is required.";
                    }
                    if ($last_name == ""){
                        $error[] = "Last Name is required.";
                    }
                    if ($email == ""){
                        $error[] = "Email is required.";
                    }
                    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $error[] = "Invalid email format.";
                    }
                    if ($password == "") {
                        $error[] = "Password is required.";
                    }
                    if (strlen($password) < 8){
                        $error[] = "Password must contain at least 8 characters.";
                    }
                    if (count($error) > 0){
                        foreach( $error as $value ) { 
                            echo "<h2 class='error'>$value</h2>"; 
                        } 
                        include 'includes/update_form.php';
                    } else {
                        // sort by latest; logic required
                        $query = "SELECT MAX(ereg) as editup
                                FROM USER_OLESIAK";
                   
                        $result = mysqli_query($connection, $query);
                        while($row = $result->fetch_assoc()) {
                            $ereg = $row['editup'] + 1;
                        }
                
                        $query = "UPDATE USER_OLESIAK
                                SET first_name='$first_name',
                                last_name='$last_name',
                                email='$email',
                                password='$password',
                                active=$active,
                                ereg=$ereg
                                WHERE user_id=$id" ;
                        
                    
                        if ($connection->query($query) === TRUE) {
                            echo "<h2 class='success'>Record Updated Sucessfully!</h2>";
                            include 'includes/update_form.php';
                            //header("Location: crud.php");
                        } 
                        else {
                            echo "<h2 class='error'>Error updating record</h2>";//$query" . $connection->error;
                            include 'includes/update_form.php';
                        }
                    }    
  
  
?>