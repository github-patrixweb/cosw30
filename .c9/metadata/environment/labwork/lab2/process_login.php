{"filter":false,"title":"process_login.php","tooltip":"/labwork/lab2/process_login.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":35,"column":2},"action":"remove","lines":["<?php","    //Capture the data from our form","    $email = $_POST['email'];","    $password = $_POST['password'];","    ","    //Create variables to match email and password against ","    $correct_email = 'test@test.com';","    $correct_password = 'supersecure123';","    ","    //Check if variables are empty","           // if(!empty($_POST['email'])){","            //   $email = $_POST['email'];","            //}","    ","    ","    ","    //Check if the data is good (isn't empty, matches our credentials)","    ","    ","    if ($email == $correct_email && $password == $correct_password) {","        //Successful - output and a success message","        echo '<h1>You logged in successfully!</h1>';","        echo \"<p>Email Address: $email</p>\";","        echo \"<p>Password: $password</p>\";","    }","    ","    else {","        //Error - output an error message","        echo '<h1>Sorry...try again!</h1>';","        echo '<a href=\"login.php\"Go back</a>';","    }","    ","    //Output a little message for fun","    ","    ","?>"],"id":2},{"start":{"row":0,"column":0},"end":{"row":49,"column":0},"action":"insert","lines":["<!doctype html>","<html>","    <head>","        <meta charset=\"utf-8\">","        <title>Process Login</title>","    </head>","    <body>","<?php","    //Capture the data from our form","    $email = $_POST['email'];","    $password = $_POST['password'];","    ","    //Create variables to match email and password against ","    $correct_email = 'test@test.com';","    $correct_password = 'supersecure123';","    ","    //Check if variables are empty","           // if(!empty($_POST['email'])){","            //   $email = $_POST['email'];","            //}","    ","    ","    ","    //Check if the data is good (isn't empty, matches our credentials)","    ","    ","    if ($email == $correct_email && $password == $correct_password) {","        //Successful - output and a success message","        echo '<h1>You logged in successfully!</h1>';","        echo \"<p>Email Address: $email</p>\";","        echo \"<p>Password: ***********123</p>\";","    }","    ","    else {","        //Error - output an error message","        echo '<h1>Sorry...try again!</h1>';","        echo '<a href=\"login.php\"Go back</a>';","    }","    ","    //Output a little message for fun","    ","    ","?>        ","        <footer>","            <p>&copy; 2019 <a href=\"index.php\" title=\"Fantasy WebSite\">Fantasy WebSite</a></p>","        </footer>","","    </body>","</html>",""]}]]},"ace":{"folds":[],"scrolltop":536.53125,"scrollleft":0,"selection":{"start":{"row":49,"column":0},"end":{"row":49,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":22,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1567713648364,"hash":"d91c715ce0947d050961fb29c98ab34c6dac6543"}