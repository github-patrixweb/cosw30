<?php
                    $first_name = cleanUserInput($_POST['first_name']);
                    $last_name = cleanUserInput($_POST['last_name']);
                    $email = cleanUserInput($_POST['email']);
                    $password = cleanUserInput($_POST['password']);
                    $confirm_password = cleanUserInput($_POST['confirm_password']); 
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
                    }else{
                        if (strlen($password) < 8){
                        $error[] = "Password must contain at least 8 characters.";
                        }else{
                            if ($password != $confirm_password){
                                $error[] = "Passwords DO NOT match.";
                            }
                        }
                    }
                    if (count($error) > 0){
                        foreach( $error as $value ) { 
                            echo "<h2 class='error'>$value</h2>"; 
                        } 
                    } else {
                           $ereg = dbTC_Max($connection, 'USER_OLESIAK', 'ereg');

                        }
                        $toup = date(DATE_W3C);
                        $query = "UPDATE USER_OLESIAK
                                SET first_name='$first_name',
                                last_name='$last_name',
                                email='$email',
                                password='$password',
                                active=$active,
                                update_time='$toup',
                                ereg=$ereg
                                WHERE user_id=$id" ;
                        
                    
                        if ($connection->query($query) === TRUE) {
                            header("Location: crud.php");
                        } 
                        else {
                            include 'includes/update_form.php';
                        }
?>