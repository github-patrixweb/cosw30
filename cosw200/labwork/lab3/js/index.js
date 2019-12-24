var table_value = parseFloat(prompt("Please enter a number to calculate with; -1 is substituted in case input in non-numeric."));        // Unit of table to calculate from; -1 is assigned for non numeric input.
var oper =  prompt("Please enter * to multiply or + to add.  Multiply will be used for bad input.");   //'multiply is default; add if + is input
var el = document.getElementById('blackboard');
el.innerHTML = addOrMultiply(oper, table_value);
 
// this is the function to add or multiply depending on user input
function addOrMultiply(op, number) {
if (isNaN(number)) {
  number = -1;
}

if (op == "+") {
  var operator = "add";
}
else {
     var operator = "multiply"; // multiply is default in case user input error.
}
var i = 1;                 // Set counter to 1
var msg = "Let's learn to " + operator + " with the number " + number + ". <br>" ;              // Initialize Message
var eq = ""; // variable for equation.
  while (i <= 15) {
    if (op == "+") {
      eq = i + number; 
    }
    else {
      eq = i * number;
      op = "*";
    }
  
    msg += i + " " + op + " " + number + ' = ' + eq + '<br />'; // Append to the msg variable    
    i++;
  }
  return msg;
}