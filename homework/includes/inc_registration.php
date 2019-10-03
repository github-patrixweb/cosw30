<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    // first name control structure
    if (isset($_POST['first_name'])) {
        $first_name = preg_replace('/\s/', '', $_POST['first_name']);
        if ($first_name == "") {
            echo "<p class='warning'>Please enter your first name.</p>";
            $process_form = 0;
        }
        else {
            $process_form = 1;
        }
    }

    // last name control structure
    if (isset($_POST['last_name'])) {
        $last_name = preg_replace('/\s/', '', $_POST['last_name']);
        if ($first_name == "") {
            echo "<p class='warning'>Please enter your last name.</p>";
            $process_form = 0;
        }
        else {
            $process_form += 1;
        }
    }

    // email control structure
    if (isset($_POST['email'])) {
        $email = preg_replace('/\s/', '', $_POST['email']);
        if ($email == "") {
            echo "<p class='warning'>Please enter your email.</p>";
            $process_form = 0;
        }
        else {
            $process_form += 1;
        }
    }
    $password = preg_replace('/\s/', '', $_POST['password']);
    $confirm_password = preg_replace('/\s/', '', $_POST['confirm_password']);
    // password control structure
    if (strlen($password) < 8) {
        echo "<p class='warning'>Please enter a password of 8 or more characters excluding whitespace.</p>";
        $process_form = 0;
        }
    else {
        if ($password == $confirm_password) {
            $process_form += 1;
        }
        else {
            echo "<p class='warning'>The passwords entered did not match.  Please enter a password of 8 or more characters, excluding whitespace, and confirm it.</p>";
            $process_form = 0;

        }
    }
    if ($process_form == 4) {
        $servername = "50.62.209.47:3306";
        $username = "patrixweb";
        $db_password = "halloween19fall";
        $dbname = "patrixweb";

        // Create connection
        $conn = new mysqli($servername, $username, $db_password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $random_number = rand(1000000, 999999999);
        $first_name = str_replace("'", "&#39;", $first_name);
        $last_name = str_replace("'", "&#39;", $last_name);
        $email = str_replace("'", "&#39;", $email);
        $sql = "INSERT INTO SITE_USERS (first_name, last_name, email, password, e_verification)
        VALUES ('$first_name', '$last_name', '$email', '$password', '$random_number')";

        if ($conn->query($sql) === TRUE) {
            echo "<p>New record created successfully.  An e-mail has been sent to $email.  Please follow the link in it to verify your e-mail";

            $message = "Please follow this link to verify your email address:\r\n\r\nhttp://patrixweb.easydoesitbooksandgifts.com/cosw30/homework/homework5/login.php?e=$email&rn=$random_number";

            // In case any of our lines are larger than 70 characters, we should use wordwrap()
            $message = wordwrap($message, 70, "\r\n");

            // Send
            mail($email, 'Verify email for Cycling in the USA', $message);

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();

    }
}
?>


       
    
        <h1><b>Cycling in the USA</b></h1>
        <h3>Forum Registration Form</h3>
        <form action="register.php" method="POST">
            <label>First Name:</label>
            <input type="text" name="first_name" value="<?php echo $first_name; ?>">
            <br><br>
            <label>Last Name:</label>
            <input type="text" name="last_name" value="<?php echo $last_name?>">
            <br><br>
            <label>Email Address:</label>
            <input type="email" name="email" value="<?php echo $email?>">
            <br><br>
            <label>Password:</label>
            <input type="password" name="password" placeholder="password must be 8 or more characters" value="<?php echo $password?>">
            <br><br>
            <label>Confirm Password:</label>
            <input type="password" name="confirm_password" >
            <br><br>
            <button>Register!</button>
            
            
        </form>
    