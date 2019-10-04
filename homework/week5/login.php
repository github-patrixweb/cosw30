<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login Form</title>
    </head>
    <body>
         <?php include 'includes/header.php' ?>
         <?php
            // engage db connection variables for script
            $servername = "50.62.209.47:3306";
            $username = "patrixweb";
            $password = "halloween19fall";
            $dbname = "patrixweb";

            // Create connection to database
            $conn = new mysqli($servername, $username, $password, $dbname);

            $email = "";
            # check for querystring
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $email = $_GET["e"];
                $verification_code = $_GET["rn"];

                # get verification code
                $sql = "Select e_verification from SITE_USERS where email = '$email'";
                if ($result=mysqli_query($conn,$sql)) {
                  // Return the number of rows in result set
                  $rowcount=mysqli_num_rows($result);
                  //printf("Result set has %d rows.\n",$rowcount);
                  // Free result set
                  mysqli_free_result($result);
                    # if record exist, then verified
                    $sql = "UPDATE SITE_USERS 
                    SET email_verify=1
                    WHERE email='$email'";
                    if ($conn->query($sql) === TRUE) {
                        $sql2 = "SELECT * FROM SITE_USERS WHERE email='$email'";
                        $result = $conn->query($sql2);
                        $row = $result->fetch_assoc();
                        $first_name = $row['first_name'];
                        $email_verify = $row['email_verify'];
                        if ($email_verify == 1) {
                            echo "<h2>Thank you, $first_name, your email, $email, has been verified.  You may now log into Cycling in the USA and enjoy the forums.</h2>";
                        }
                                } else {
                        echo "Error updating record: " . $conn->error;
                    }
                  }

        mysqli_close($conn);
        }


                 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                     $email = $_POST['email'];
                     // query db to find out if user n password match + if email verified
                     $sql = "SELECT * FROM SITE_USERS WHERE email='$email'";
                     // Create connection to database
                     $conn = new mysqli($servername, $username, $password, $dbname);
                     $result = $conn->query($sql);
                     $row = $result->fetch_assoc();
                     $email_verify = $row['email_verify'];
                     $pass = $row['password'];
                     if ($email_verify == 1 && $_POST['password'] == $pass) {
                         echo "<h2>Login Successfull</h2>\n";
                     }
                     else {
                         echo "<h2>Login Failed</h2>\n";
                         if ($email_verify == 1) {
                             echo "<p class='warning'>Your email/password combination is incorrect.</p>\n";
                         }
                         else {
                             echo "<p class='warning'>You have not verified your email address.<p>\n";
                         }
                     }
                 }
        ?>
        <h1><b>Login Form</b></h1>
        <form action="login.php" method="POST">
            <label>Email Address:</label>
            <input type="email" name="email" id="email" value="<?php echo $email ?>"required>
            <br><br>
            <label>Password:</label>
            <input type="password" name="password" id="password" required>
            <br><br>
            <button>Log In!</button>
        </form>
       
         <?php include 'includes/footer.php' ?>
         
        
    </body>
</html>