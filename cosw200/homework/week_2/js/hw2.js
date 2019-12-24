        function inputS(txtString) {
            inputString = txtString; 
            
            while(inputString.length < 15) {
                inputString = prompt("Your string is less than 15 characters.  Please re-enter: " );
            }
            sl = "stringList";
  
            //this is for the first string objective: a conformation the string is valid 15 or more characters
            appendDOM("You input a string of 15 or more characters.", sl);
  
            // this is the 2nd string objective; display the original string.
            appendDOM("You input: " + inputString, sl);
  
            // this is the third string objective; print in lowercase
            appendDOM("In lower case: " + inputString.toLowerCase(), sl);
  
            // this is the 4th string objective; print in uppercase
            appendDOM("In UPPER CASE: " + inputString.toUpperCase(), sl) ;
  
            // this is the 5th string objective; print the number of characters
            appendDOM("The number of characters in the string are:  " + inputString.length, sl);
  
            // this is the 7th string objective; print 5 characters starting at index 8
            appendDOM("Five characters starting at the 8th character are: " + inputString.slice(8, 13), sl);
            
            // this is the 6th string objective; print characters betwen 5 & 10
            appendDOM("Characters between 5 and 10 are: " +  inputString.slice(5, 10), sl);
            
            // this is the 8th objective; combine strings... "Eat your vegetables."
            newString = "Eat your vegetables.  " + inputString;
            appendDOM(newString, sl);
            
            // final... split string into array for next part
            stringPieces = inputString.split(" ");
            // next go to arrayMethods function
            arrayMethods(stringPieces);
            
        }
            // this is the function for creating new li in string section
            function appendDOM(txt, eID) {
                listI = document.createElement("li");
                node = document.createTextNode(txt);
                listI.appendChild(node);

                element = document.getElementById(eID);
                element.appendChild(listI);

            }
            function arrayMethods(inArray) {
                // let's start this section via output the array... call appendDOM and pass array + list ID
                al = "arrayList"
                appendDOM("Your input split to words: " + inArray, al); 
                
                // next we output the # of items in the array.
                appendDOM("The array contains " + inArray.length + " words.", al)
                
                // now lets remove the first array element
                inArray.shift();
                appendDOM("The first item was removed; now we have: " + inArray, al);
                
                // lets add "banana" to the end of the array and output the new values.
                inArray.push("banana");
                appendDOM("We added banana to the end of the array: " + inArray, al);
                
                // finale: lets reverse and output the array
                appendDOM("In reverse order: " + inArray.reverse(), al);
            }