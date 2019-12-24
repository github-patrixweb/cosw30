document.write();
var choice = prompt("Enter 1 to play Math 5, or 2 to add and multiply.")
switch (choice) {
  case "1":
    math5();
    break;
  case "2":
    addAndMultiply();
    break;
  default:
    alert("input not valid.");
    break;
}
//this is the function to play math 5
function math5() {
  var username = prompt("You chose to play Math 5.  Please input your name:");
  document.write("<h1>Math 5</h1><p>Welcome to our Math 5 game, " + username + ".  </p>");
  var randomNumber1;
  var randomNumber2 ;
  var op; 
  var total = 0;
  var tmp = 0;

  for (var i = 0; i < 5; i++) {
    randomNumber1 = Math.floor((Math.random() * 10) + 1);
    randomNumber2 = Math.floor((Math.random() * 10) + 1);
    switch (i) {
      case 0:
        op = "+";
        break;
      case 1:
        op = "-"
        break;
      case 2:
        op = "*"
        break;
      case 3:
        op = "/"
        break;
      case 4:
        op = "%"
        break;
}
  tmp = mathQuestion(randomNumber1, randomNumber2, op);
  total = total + tmp;
    
}
alert("Your score is " + total + " of 5.  Thanks for playing Math 5, " + username + ".");
}

/*########################################### 
this is the function for the five questions */
function mathQuestion(num1, num2, operator) {
  var rQ = "What is " + num1 + " " + operator + " " + num2
  var question = prompt(rQ);
  var answer; 
  var score = 0;  
  switch (operator) {
    case "+":
      answer = num1 + num2;
      break;
    case "-":
      answer = num1 - num2;
      break;
    case "*":
      answer = num1 * num2;
      break;
    case "/":
      answer = num1 / num2;
      break;
    case "%":
      answer = num1 % num2;
      break;
}  

  if (question == answer) {
    alert("Correct"); 
    score = 1;
} 
  else {
    alert("Sorry: " + num1 + operator + num2 + " = " + answer);    
  }
  return score;
}
// this is the function to add and multiply.
function addAndMultiply() {
  var num1 = prompt("Please input a number:");
  var num2 = prompt("Please input a second number:");
  var sum = parseFloat(num1) + parseFloat(num2);
  var product = num1 * num2;
  document.write("<h1>Add & Multiply Results:</h1>" + "<p>" + num1 + " + " + num2 + " = " + sum + "</p> <p>" + num1 + " * " + num2 + " = " + product + "</p>")
}