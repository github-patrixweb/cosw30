<<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Registration Form</title>
    </head>
    <body>
        <h1><b>Registration Form</b></h1>
        <h3>Register today</h3>
        <form action="process_register.php" method="POST">
            <label>First Name:</label>
            <input type="text" name="first_name" id="first_name" required>
            <br><br>
            <label>Last Name:</label>
            <input type="text" name="last_name" id="last_name" required>
            <br><br>
            <label>Email Address:</label>
            <input type="email" name="email" id="email" required>
            <br><br>
            <label>Password:</label>
            <input type="password" name="password" id="password" required>
            <br><br>
            <label>Confirm Password:</label>
            <input type="password" name="confirm_password" id="confirm_password" required>
            <br><br> 
            <button>Register!</button>
            
            
        </form>
        <p>Fantasy WebSite <a href="login.php" title="Fantasy WebSite Login.">Login.</a></p>
    
    </body>
</html>
