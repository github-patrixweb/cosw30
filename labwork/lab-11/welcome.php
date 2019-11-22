<?php
session_start();
include('includes/header.php');
include('includes/database.php');


// Check if the user is already logged in
// If they aren't, redirect to login.php
?>

<main class="container">

    <h1>Thank you, <?php echo $_SESSION['first_name']; ?>, you're logged in!</h1>

    <h2>Here's a list of other users</h2>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
         <?php 
            $query = "  SELECT first_name, last_name, email, user_id, active
                        FROM USER_OLESIAK
                        WHERE user_id!=" . $_SESSION['user_id'] .
                        " AND active=1";
                
            $result = mysqli_query($connection, $query);
            if ($result) {
                while ($users = mysqli_fetch_assoc($result)) {
                    $first_name = $users['first_name'];
                    $last_name = $users['last_name'];
                    $email = $users['email'];
                    echo "<tr>\n
                            <td>$first_name</td>\n
                            <td>$last_name</td>\n
                            <td>$email</td>\n
                        </tr>\n";
                }
            }
            
    ?>
        </tbody>
    </table>

</main>

<?php include('includes/footer.php'); ?>
