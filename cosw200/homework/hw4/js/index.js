function inputS(txtString) {
  
  inputString = prompt("Please input a string 15 characters or more:");
  while(inputString.length < 15) {
    inputString = prompt("Your string was less than 15 characters.  Please re-enter: " )
}
  
  //this is for the first string objective: a conformation the string is valid 15 or more characters
  document.getElementById("s1").innerHTML = "You input a string of 15 or more characters.";
  
  // this is the 2nd string objective; display the original string.
  document.getElementById("s2").innerHTML = "You input: " + inputString;
  
  // this is the third string objective; print in lowercase
  document.getElementById("s3").innerHTML = "In lower case: " + inputString.toLowerCase();
  
  // this is the 4th string objective; print in uppercase
  document.getElementById("s4").innerHTML = "In UPPER CASE: " + inputString.toUpperCase() ;
  
  // this is the 5th string objective; print the number of characters
  document.getElementById("s5").innerHTML = "The number of characters in the string is:  " + inputString.length;
  
//  document.getElementByID("p5").innerHTML = "Hello";
  document.getElementById("s6").innerHTML = "Characters between 5 and 10 are: " + inputString.slice(5, 10)
  
  document.getElementById("s7").innerHTML = "5 characters starting at the 8th character are: " + inputString.slice(8, 13);
  
  document.getElementById("s8").innerHTML = "Go to school and exercise your mind... " + inputString;

  arrayFromString = inputString.split(" ");
  
  document.getElementById("a1").innerHTML = "Your input split into words: " + arrayFromString;

  document.getElementById("a2").innerHTML = "Words in array: : " + arrayFromString.length;
  arrayFromString.shift()
  document.getElementById("a3").innerHTML = "The first item was removed; now we have: " + arrayFromString;
  
  arrayFromString.push("banana");
  document.getElementById("a4").innerHTML = "Appended to the end is 'banana'; now we have: " + arrayFromString;
  
  document.getElementById("a5").innerHTML = "In reverse order: " + arrayFromString.reverse();
 

}
  
 inputS();