<?php
                $query = "SELECT * FROM USER_OLESIAK
                            WHERE user_id = $id";
                $result = mysqli_query($connection, $query);

                if($result) {
                   $row = $result->fetch_assoc();
                    // formInput($inputType, $labelName, $inputName, $value)
                    echo "<form action='update.php' method='post'>\n";
                    formInput("text", "First Name", "first_name", $row['first_name']);
                    formInput("text", "Last Name", "last_name", $row['last_name']);
                    formInput("email", "Email", "email", $row['email']);
                    formInput("password", "Password", "password", $row['password']);
                    formInput("password", "Confirm Password", "confirm_password", "");
                    echo "  
                        <fieldset>\n
                            <legend>Update Record - Check Box to Remove User</legend>\n
                            <label for='active'>Remove user:</label>\n\n
                            <input type='checkbox' name='active' value='0'>\n
                            <input type='hidden' name='id' value='$id'>\n
                            <input type='submit' value='Update / Remove Record'>\n
                        </fieldset>\n
                    </form>\n
                    <hr>";
                } else {
                    echo "<h2 class='error'>No result</h2>\n";
                }
?>
                <details>
                  <summary>Edit the first and last names</summary>
                  <main>These are required fields that must not be left blank.</main>
                </details>                  <details>
                  <summary>Edit email</summary>
                  <main>The email is required, and must be in proper format &#40;e.g. username&#64;domain.com&#41;.  An email is sent to recover a password, receive important system information, and must be verified to access premium features.</main>
                </details>                  
                 <details>
                  <summary>Edit the password</summary>
                  <main>This is a required field that must contain a minimum of 8 characters.  White space is not allowed.</main>
                </details>                  <details>
                  <summary>Remove a user</summary>
                  <main>There is a checkbox next to the submit button.  Check it to remove a user from the system.</main>
                </details>        