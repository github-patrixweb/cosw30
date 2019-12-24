// welcome message is displayed
alert("Welcome to our Fantasy Sea Creature Adventure Game.  Lets begin...");
// get the player's name
playerName = prompt("What is your name?");
// get the default action
defaultAction = prompt("When your opponent attacks, do you run or fight?")

// generate a player character by calling the character generator constructor
var playerCharacter = new Character();
// generate a system opponent by calling the character generator constructor
var playerOpponent = new Character();

// get the player character info into a variable
player1 = "a '" + playerCharacter.race + "', of class: " + playerCharacter.charClass + ", with these abilities: 1.  " + playerCharacter.ability1 + ", 2.  " + playerCharacter.ability2 + ", 3.  " + playerCharacter.ability3 + ", 4.  " + playerCharacter.ability4 + ", who is " + playerCharacter.age + " years old."
//... and the opponent
sysOpponent = "a '" + playerOpponent.race + "', of class: " + playerOpponent.charClass + ", with these abilities: 1.  " + playerOpponent.ability1 + ", 2.  " + playerOpponent.ability2 + ", 3.  " + playerOpponent.ability3 + ", 4.  " + playerOpponent.ability4 + ", who is " + playerOpponent.age + " years old."

//write the info to the web page...
document.write("<h1>Welcome to our Fantasy Sea Creature Adventure Game.</h1>")
document.write("<h2>Congratulations, " + playerName + ", your Fantasy Adventure Character is:</h2>");
document.write("<p>" + player1 + "</p>");
document.write("<h2>Your opponent is:</h2>");
document.write("<p>" + sysOpponent + "</p>");
document.write("<p>your default attack action is: " +  defaultAction + "</p>");  

// lets create an object constructor
function Character() {
    this.race = race(Math.floor(Math.random() * Math.floor(5)));
    this.charClass = charClass(Math.floor(Math.random() * Math.floor(5)));
    this.ability1 = abilities(Math.floor(Math.random() * Math.floor(5)));
    this.ability2 = abilities(Math.floor(Math.random() * Math.floor(5)));
    this.ability3 = abilities(Math.floor(Math.random() * Math.floor(5)));
    this.ability4 = abilities(Math.floor(Math.random() * Math.floor(5)));
    this.age = Math.floor(Math.random() * Math.floor(40) + 11);
    //ability: {" ", " ", " ", " "}
}

// a race function for the character constructor
function race(race) {
    switch(race) {
        case 0:
            race = "Bake Kujira. A Japanese skeletal whale monster.";
            break;
        case 1:
            race = "Ceffyl Dŵr. A shapeshifting Welse counterpart to the Selkie.";
            break;
        case 2:
            race = "Selkie. Seal-like Creature that shed their skin on land to become fair maidens.";
            break;
        case 3:
            race = "Kelpie. A Scottish counterpart to the Selkie that often appears as a horse or man.";
            break;
        case 4:
            race = "Siren. Similar to the mermaid but usually more elemental.";
            break;
        case 5:
            race = "Sapient Abaia . A giant magical eel.";
            break;
    }
    return race;
}

// a character class function for the character constructor
function charClass(cc) {
    switch(cc) {
        case 0:
            cc = "Barbarian";
            break;
        case 1:
            cc = "Bard";
            break;
        case 2:
            cc = "Cleric";
            break;
        case 3:
            cc = "Druid";
            break;
        case 4:
            cc = "Fighter";
            break;
        case 5:
            cc = "Monk";
            break;
    }
    return cc;
}

// an abilities function for the character constructor
function abilities(randomNum) {
  switch(randomNum) {
        case 0:
            ab = "Ability absorption - The ability to steal another's ability, rendering them powerless";
            break;
        case 1:
            ab = "Ability augmentation - The ability to augment other evolved human abilities";
            break;
        case 2:
            ab = "Ability replication - The ability to replicate one ability at a time through physical contact";
            break;
        case 3:
            ab = "Accelerated probability - The ability to predict the probability of a certain event correctly and accelerate one's self to achieve those predictions";
            break;
        case 4:
            ab = "Acid secretion - The ability to generate highly corrosive fluids";
            break;
        case 5:
            ab = "Acidic blood	- The ability to have acidic blood";
            break;
    }
    return ab;
}







/* ***************** ****** *****************
races:

1.  Bake Kujira. A Japanese skeletal whale monster
2.  The Ceffyl Dŵr. A shapeshifting Welse counterpart to the Selkie
3.  The Selkie. Seal-like Creature that shed their skin on land to become fair maidens
4.  The Kelpie. A Scottish counterpart to the Selkie that often appears as a horse or man.
5.  The Siren. Similar to the mermaid but usually more elemental
6.  A Sapient Abaia . A giant magical eel

classes:

1.  Barbarian
2.  Bard
3.  Cleric
4.  Druid
5.  Fighter
6.  Monk

abilities:

1.  Ability absorption	- The ability to steal another's ability, rendering them powerless
2.  Ability augmentation - The ability to augment other evolved human abilities
3.  Ability replication	- The ability to replicate one ability at a time through physical contact
4.  Accelerated probability	- The ability to predict the probability of a certain event correctly and accelerate one's self to achieve those predictions
5.  Acid secretion	- The ability to generate highly corrosive fluids
6.  Acidic blood	- The ability to have acidic blood

******************************************/