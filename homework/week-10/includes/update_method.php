<?php
    $method = $_SERVER['REQUEST_METHOD'];
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } elseif (isset($_POST['id'])){
        $id = $_POST['id'];
    } else {
            header("Location: crud.php"); 
    }
                        
    echo "<h1>Update record ID:  $id</h1>\n
        <h2><a href='crud.php'>CRUD</a></h2>\n";

                if ($method == 'POST') {
                    include 'includes/update_post.php';
                } elseif ($method == 'GET') {
                    include 'includes/update_form.php';    
                } else {
                    header("Location: crud.php");
                }
?>           