
function circleArea() {
  // get user input: radius
  radiusInput = prompt("Please input the radius of the circle to get the area of: ");
  // check input is valid after converting string input to integer
  radiusInput = parseInt(radiusInput)
  while (isNaN(radiusInput)) {
    radiusInput = prompt("Input error: please re-submit the radius of the circle to get the area of: ");
  }
  areaOfCircle = Math.PI * radiusInput * 2;
  alert("The area of the circle rounded is: " + Math.round(areaOfCircle));
}

// function to generate a random number rounded down; between 500 and 10000
function randomNumber() {
 console.log("A random integer between 500 and 1,000 is: " + Math.round(Math.random() * (1000 - 500) + 500));
}

// get numbers function
function getNumbers(){
  num = prompt("Please input a number: ");
  num = parseInt(num);
while (isNaN(num)) {
    num = parseInt(prompt("Input error: please re-submit a number: "));
}
 return num;
  }


// this is a 4 number function to output largest and smallest values
function fourNumbers() {
  num1 = getNumbers();
  num2 = getNumbers();
  num3 = getNumbers();
  num4 = getNumbers();
document.write("You input: " +num1 + ", " + num2 + ", " + num3 + ", " + num4 + ".  The largest is: " + Math.max(num1, num2, num3, num4) + ", and the smallest is: " + Math.min(num1, num2, num3, num4));
}


var student = {
  firstName: "Patrick",
  lastName: "Olesiak",
  city: "Fountain Valley",
  state: "California",
  emailAddress: "lbcc@patrixweb.net",
  phoneNumber: "714.699.4696",
  studentID_Number: "0729844",
  major: "Web Development",
  classesRegisteredForThisSemester: ["33527 - Front End Web Development", "33528 - Intro to JavaScript", "33529 - Content Management"],
  interests: ["Computers", "Astronomy", "Math"],
  wholeObject : function() {
    return "My student's name: " + this.firstName + " " + this.lastName + "; city/state: " + this.city + ", " + this.state + ", email: " + this.emailAddress + ", phone: " + this.phoneNumber + ", student ID: " + this.studentID_Number + ", major: " + this.major + ", classes registered this semester: " + this.classesRegisteredForThisSemester + ", interests: " + this.interests 
  },
  bio : function() {
  return this.firstName + " " + this.lastName + "; " + this.city + ", " + this.state + "; major: " + this.major + "; interests: " + this.interests
},
sInfo : function() {
  return this.firstName + " " + this.lastName + "; " + this.emailAddress + ", phone" + this.phoneNumber + "; ID: " + this.studentID_Number + "; major: " + this.major, + ", classes: " + this.classesRegisteredForThisSemester
} 
};
circleArea() ;
randomNumber();
fourNumbers() ;
console.log(student.bio());
console.log(student.sInfo());
console.log(student.wholeObject());