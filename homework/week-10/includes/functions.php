<?php

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
function dbTC_Max($conn, $tableName, $columnName){
    // this function requires db connection, table name, and column name
    // it then finds the maximum value of that column, adds one, and returns the result
    $query = "SELECT MAX($columnName) as editup
    FROM $tableName";
    $result = mysqli_query($conn, $query);
    if ($result){
        $row = $result->fetch_assoc();
        $ereg = $row['editup'] + 1;
    }else{
        $ereg = 0;
    }
    return $ereg;
}
function formInput($inputType, $labelName, $inputName, $value){
    // this function generates form fiels
    // pass: input type, label name, input name, and value
    echo "<fieldset>\n
        <legend>$labelName:</legend>\n
        <label for='$inputName'>$labelName:</label>\n
        <input type='$inputType' value='$value' name='$inputName'>\n
    </fieldset>\n";
}
?>