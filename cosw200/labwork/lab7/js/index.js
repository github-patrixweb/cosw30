// Selecting and updating content using getElementById
var greeting = document.getElementById("greeting");
//console.log(greeting);
document.getElementById("greeting").innerHTML = "Hello world!";
//console.log(greeting);

// selecting and updating content using querySelector - this will get the FIRST match, not every match
var greeting2 = document.querySelector("#greeting2");
//console.log(greeting2);
greeting2.textContent = "Let's have fun with the Document Object Model!";
//console.log(greeting2);

// document.write just writes to the webpage under the last HTML item
document.write("This is another DOM method!");

// Change the CSS style of a particular item
document.getElementById("greeting2").style.color = "red";

// Read in the list item elements which stores to an array based on the HTML tag name
var groceries = document.getElementsByTagName('li');
//console.log(groceries[2]);
//console.log(groceries.length);

// change an item in the array to a different CSS class
if (groceries.length > 0) {
  var grocery_item = groceries[0];
  grocery_item.className = 'musthave';
}

// create a new item in the list
var addgrocery_item = document.createElement('li');
var new_text = document.createTextNode('grapes');
addgrocery_item.appendChild(new_text);
var position = document.getElementsByTagName('ul')[0];
console.log(position);
position.appendChild(addgrocery_item);

// Activity 1 - Add a new hobby to the list of hobbies (see page 222 in the Duckett book)
var newEl = document.createElement('li');
var newText = document.createTextNode('Bicycling');
newEl.appendChild(newText);
var position = document.getElementsByTagName('ul')[0];
position.appendChild(newEl);

var hobbies = document.getElementById('hobbies'); // store the list again
hobbies.insertBefore(newEl, hobbies.childNodes[0]); // move the new element to the top of the list

// Your turn - Add your own new hobby to the list and include it at the top of the list
var newEl2 = document.createElement('li');
var newText2 = document.createTextNode('Socializing');
newEl2.appendChild(newText2);
var position2 = document.getElementsByTagName('ul')[1];
position.appendChild(newEl2);

var hobbies2 = document.getElementById('hobbies'); // store the list again
hobbies.insertBefore(newEl2, hobbies2.childNodes[0]); // move the new element to the top of the list

// Activity 2 - Change the CSS color of the first element with a class of purple to green using JavaScript by updating the html tag's class attribute to green
var colorEl = document.querySelector('.purple');
colorEl.className = 'green';

// Your turn - now use the querySelectorAll() method to update all of the purple classes to green

var colorEl2 = document.querySelectorAll('.purple');
for (x = 0; x < colorEl2.length; x++) {
  colorEl2[x].className = 'green';
  console.log(x);
}

// Activity 3 - Change the HTML for the first link in the list to Mozilla Developer's Network Web Docs
var mylink = document.body.getElementsByTagName("a")[0]; // gets the first hyperlink found on the page
//console.log(mylink);
mylink.innerHTML = "Mozilla Developer's Network Web Docs";

// Your turn - Write code to update the Learn to Code HTML & CSS hyperlink to Learn to Code HTML & CSS with Shay Howe
mylink = document.body.getElementsByTagName("a")[2];
mylink.innerHTML = "Learn to Code HTML & CSS with Shay Howe";
hobbyCount();
/* activity 4 moved into function hobbyCount
// Activity 4 - Count how many children a given element has
// Your turn - create a new counter for the total website resources and add the output to the webpage */
var webCount = document.getElementById("websites").childElementCount;
var webDisplay = document.getElementById("totalWebsites");
webDisplay.innerHTML = "Total Websites: " + webCount;

// Your turn - create a prompt asking for another hobby. Add that hobby to the bottom of the hobbies list.
var newHobby = prompt("Please input another hobby:");
var node = document.createElement("LI");                 // Create a <li> node
var textnode = document.createTextNode(newHobby);         // Create a text node
node.appendChild(textnode);                              // Append the text to <li>
document.getElementById("hobbies").appendChild(node);     // Append <li> to <ul> with id="myList"
hobbyCount();

// Activity - get the first child element
var firstItem = document.getElementById("hobbies").firstChild.innerHTML;
console.log(firstItem);
 
function hobbyCount() {
  var hobbyCount = document.getElementById("hobbies").childElementCount;
  var hobbyDisplay = document.getElementById("totalHobbies");
  hobbyDisplay.innerHTML = "Total Hobbies: " + hobbyCount;

}