<?php
    //Capture the data from our form
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    //Create variables to match email and password against 
    $correct_email = 'test@test.com';
    $correct_password = 'supersecure123';
    
    //Check if variables are empty
           // if(!empty($_POST['email'])){
            //   $email = $_POST['email'];
            //}
    
    
    
    //Check if the data is good (isn't empty, matches our credentials)
    
    
    if ($email == $correct_email && $password == $correct_password) {
        //Successful - output and a success message
        echo '<h1>You logged in successfully!</h1>';
        echo "<p>Email Address: $email</p>";
        echo "<p>Password: $password</p>";
    }
    
    else {
        //Error - output an error message
        echo '<h1>Sorry...try again!</h1>';
        echo '<a href="login.php"Go back</a>';
    }
    
    //Output a little message for fun
    
    
?>
