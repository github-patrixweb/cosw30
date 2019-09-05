<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login Form</title>
    </head>
    <body>
        <h1><b>Login Form</b></h1>
        <form action="process_login.php" method="POST">
            <label>Email Address:</label>
            <input type="email" name="email" id="email" required>
            <br><br>
            <label>Password:</label>
            <input type="password" name="password" id="password" required>
            <br><br>
            <button>Log In!</button>
        </form>
        <p>New members must <a href="register.php" title="new member registration form">register</a>.</p>
    </body>
</html>
