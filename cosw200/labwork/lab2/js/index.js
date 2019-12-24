console.clear();
var username = prompt("Welcome to the Zombie Apocalypse. What is your name?");
console.log("Hi there " + username +"!");

var userAge=prompt("How old are you?");
var endurance = Math.floor((Math.random() * 100) + 1);
console.log("Number of hits " + endurance + ".");

var randomZombie = Math.floor((Math.random() * 100) + 1);
console.log("Number of zombies " + randomZombie);

confirm("Are you ready to play?");

// section 1--start of the game
alert("Welcome to the Zombie Apocalypse, " + username +"!")

console.log("Zombies are coming through the windows.  What do you do?  Type 1 to go outside; type 2 to grab a weapon.");

var response = prompt("Zombies are coming in the windows, do you...1 run outside, 2 grab a weapon?");
switch(response) 
{
  case "1":
    console.log("YOU ARE DEAD!");
    break;
  case "2":
    
//case "2": (response = 2)   {
  var weaponChoice = prompt("Which weapon do you want? [K]nife, [A]xe, [C]lub, [H]andgun. Choose your letter to continue.")
  switch(weaponChoice) {
    case "K":
      weaponChoice = "Knife";
      break;
    case "A":
      weaponChoice = "Axe";
      break;
    case "C":
      weaponChoice = "Club";
      break;
    case "H":
      weaponChoice = "Handgun";
      break;
  }
}
console.log("You have chosen " + weaponChoice + "." );
console.log("You have " + randomZombie + " attacking you.");
var userHits = prompt("How many times would you like to hit your zombie?");
if (endurance <= randomZombie) 
  {
    console.log("You win!");
  }
else
  {
    console.log("You are dead!");
  }






/*var level = 2;
switch(level) {
  case 1:
    msg = "Newbie";
    break;
  case 2:
    msg="Still a newbie";
    break;
  case 3:
    msg="Your level doesnt exist yet.";
    break;
}
*/