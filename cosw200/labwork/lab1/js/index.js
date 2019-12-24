//alert about class
alert("I ♥ JavaScript class!");

//,this changes h1 text
document.getElementById("practice").textContent="Game of Thrones";

//this is a local var
myName = "Patrick Olesiak";
console.log(myName);

//function to calc area rectangle
function calculateArea (length, width) {
  var area = length * width;
  document.write("<p>The total area is " + area + ".</p>");
}
calculateArea(100, 15)
calculateArea(25, 15)
season = "winter"
document.write("<ul>")
switch(season) {
  case "winter": 
    document.write("<li>Snow suit.</li></ul>");
    break;    
  case "spring": 
    document.write("<li>Rain coat.</li></ul>");
    break;    
  case "summer": 
    document.write("<li>Swim suit.</li></ul>");
    break;    
  case "fall": 
    document.write("<li>Jeans and school t-shirt.</li></ul>");
    break;    
  default:
    alert("Input not valid.");
    break;    
     
   
}