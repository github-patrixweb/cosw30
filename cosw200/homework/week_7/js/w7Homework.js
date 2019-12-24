// lets start with a count 
countList();


// this function counts the personality traits list
function countList() {
    var counter = document.getElementById("qualitiesJS.Programmer").childElementCount;
    var upHTML = document.getElementById("qualityCount");
    upHTML.innerHTML = "The JS Programmer Qualities in this list total: " + counter + ".";
}
// this function adds a quality to the list
function addTrait() {
  // Create a new element and store it in a variable, 
    var newEl = document.createElement('li'); 
        // Create a text node and store it in a variable, 
    var newText = prompt("Please input another quality: ");
    var newNode = document.createTextNode(newText);
        //newNode.classList.add('quality');
        // Attach the new text node to the new element. 
    newEl.appendChild(newNode); 
        // Find the position where the new element should be added, 
    var position = document.getElementsByTagName('ul')[0]; 
        // Insert the new element into its position, 
    position.appendChild(newEl);
    document.getElementById("addedConformation").innerHTML= newText + " was added to the list of desired quality traits for a JavaScript Programmer";
    document.getElementById("qualitiesJS.Programmer").lastChild.classList.add('quality');

    countList();
}
// this function randomly highlights three items from the quality list
function threeRandomTraits() {
    var itemsInList = document.querySelectorAll('li');
    
        if (itemsInList.length > 2) {
            var x = Math.floor(Math.random() * itemsInList.length - 1) + 1; /* random number for looping random list items */ 
            var checkX = [0, 0, 0]
            /* first lets loop and reset the class a' */
            for (i = 0; i < itemsInList.length; i++) {
                itemsInList[i].className = 'quality';
            }
            for (i = 0; i < 3; i++) {
                itemsInList[x].className = 'cool';
                x = Math.floor(Math.random() * itemsInList.length - 1) + 1;
            }
            document.getElementById("threeRandomP").textContent = "The top 1-3 qualities are highlighted below."
        }
    else {
        alert("The list has fewer than three qualities.");
    }

    
}

// this function randomly removes an item from the quality list
function removeQuality() {
    var qualityList = document.querySelectorAll('li'); //for the legnth of the list
    if (qualityList.length > 0) {
        //removing an element from DOM is 3 step... 
        var removeRandomQuality = document.getElementsByTagName('li')[Math.floor(Math.random() * qualityList.length - 1) + 1];
        var parentContainer = removeRandomQuality.parentNode;
        parentContainer.removeChild(removeRandomQuality);
        document.getElementById('removedConformation').textContent = "A random quality was sucesfully removed from the JS Quality Programmer List.";  // removal sucessful message on page ...sucess...
        countList(); //refresh counter
        
    }
    else {
        alert("The quality List is empty");  // alert if list empty
    }
}