<!doctype html>
<html>
<head>
   <style>
       .error {
           color: red;
       }
       .success {
           color: green;
       }
    </style>
    <title>MySQL CRUD</title>
</head>
<body>

<?php
// Add the database connection
include 'includes/database.php';
//set sticky form variables to empty strings in casse script doen not change them.
$first_name = "";
$last_name = "";
$password = "";
$email = "";

    /*
*   CHECK IF THE FORM HAS BEEN SUBMITTED AND INSERT
*   NEW USER INTO THE DATABASE
*/

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $valid_input = 0;
    // if any of the 4 form variable are empty, display error
    if (!empty($_POST['first_name'])){
        $first_name = $_POST['first_name'];
        ++$valid_input;
    }
    else {
        echo "<h2 class='error'>First name is required.</h2>";
    }
    if (!empty($_POST['last_name'])){
        $last_name = $_POST['last_name'];
        ++$valid_input;
    }
    else {
        echo "<h2 class='error'>Last name is required.</h2>";
    }
    if (!empty($_POST['email'])){
        $email = $_POST['email'];
        ++$valid_input;
    }
    else {
        echo "<h2 class='error'>Email is required.</h2>";
    }
    if (!empty($_POST['password'])){
        if ($_POST['password'] != $_POST['confirm_password']){
            echo "<h2 class='error'>Your passwords did not match.</h2>";
        }
        else {
            ++$valid_input;
        }
        $password = $_POST['password'];

    }
    else {
        echo "<h2 class='error'>Password is required.</h2>";
    }
    // if all input not empty and passwords match, input in database
    if ($valid_input == 4) {
        $query = "INSERT INTO USER_OLESIAK (first_name, last_name, email, password)
                    VALUES ('$first_name', '$last_name', '$email', '$password')";
        if ($connection->query($query) === true) {
            echo "<h2 class='success'>Record added succesfully</h2>";
        }
        else {
             echo "<h2 class='error'>Error:  $sql <br> $connection->error</h2>";
        }
    }

}


?>

    <h1>Create a New User</h1>
    <form action="crud.php" method="POST">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" value="<?php echo $first_name ?>"><br>

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" value="<?php echo $last_name ?>"><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php echo $email ?>"><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" value="<?php echo $password ?>"><br>

        <label for="confirm_password">Retype Password</label>
        <input type="password" id="confirm_password" name="confirm_password"><br>

        <!--Add a second password input so the user has to retype their password -->

        <button>Register</button>

    </form>

    <h2>Output a List of Users</h2>
<?php

/*
*   QUERY THE DATABASE AND STORE ALL USERS INTO A VARIABLE
*/
// Create your query
$query = 'SELECT * FROM USER_OLESIAK';

// Run your query
$result = mysqli_query($connection, $query);

// Check if the database returned anything
if($result) {
    echo "   <table border='1'>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>";
   // while($row = mysqli_fetch_array($result)){
        // Output the results

    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['first_name'] . "</td>\n
                <td>" . $row['last_name'] . "</td>\n
                <td>" . $row['email'] . "</td>\n
                <td>" . $row['password'] . "</td>\n
            </tr>";

    }
    echo "</tbody>
    </table>";

    }
 else {
    // Output an error
    die("<h2 class='error'>Connection failed:  $conn->connect_error</h2>");
}
?>

        </body>
</html>
