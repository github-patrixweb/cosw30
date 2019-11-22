<?php
session_start();
session_unset();
session_destroy();
include('includes/header.php');
?>

<main class="container">

    <h1>You successfully logged out!</h1>

</main>

<?php include('includes/footer.php'); ?>
