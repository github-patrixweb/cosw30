<!doctype html>
  <html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Process Register</title>
          </head>
   <body>
<?php
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password =$_POST['confirm_password'];
    
    if(!empty($first_name) && !empty($last_name) && !empty($email) && $password == $confirm_password){
        echo "<h1>Welcome to fantacy website,  $first_name $last_name</h1>";
        echo "<h2>Your email was recorded as: $email</h2>";
    }
   else {
        //Error - output an error message
        echo '<h1>Sorry...try again!</h1>';
        echo '<a href="register.php">Go back</a>'; 
    }
?>
       <p>Fantasy WebSite <a href="login.php">login</a>.</p>
      </body>
  </html>
