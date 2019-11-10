<?php
/*  
2019.11.7 re-build functions.php
Patrick Ole'
*/
function cleanUserInput($userInput){
    // strip all white space from string
    $userInput = preg_replace('/\s/', '', $userInput);
    // convert all special HTML characters to enities + characters that have an enity
    $userInput = htmlentities($userInput);
    // replace apostrapies for extra caution
    $userInput = str_replace("'", "&#39;", $userInput);
    // return a clean string
    return $userInput;
}
function validateEmail($email){
    // 2019.11.9 this function calls a built in filter to inspect email format; returns true if valid or false if not
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){;
        $email = true;
     }else{
        $email = false;
    }
    return $email;
}

?>