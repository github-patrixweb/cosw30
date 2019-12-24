/*  ... begin by creating a sales/promotion message
    this script loads at bottom of html doc; otherwise DOM is not structured as needed */

var msg = '<div class=\"promo\"><a id=\"close\" href=\"#\">close X</a>'; 
msg += '<h2>Software Upgrades</h2>'; 
msg += '<p class=\"promo\">Special offer: subscribe to our website and download unlimited software upgrades ';
msg += 'for only $199.99/year.</p>';
var promo = document.createElement('div'); // Create a new element  
promo.setAttribute('id', 'promo'); 
promo.innerHTML = msg; 
document.body.appendChild(promo); 
// below is the function called to close promo note

function dismissPromo() { 
    document.body.removeChild(promo); 
    document.getElementById('mainContent').style.visibility = "visible";
} 
var closePromo = document.getElementById('close');
closePromo.addEventListener('click', dismissPromo, false);// Click close-clear note

// call this functioon onblur to verify username is >= 8 characters & onfocus for tip
function usernameLength() {
    var username = document.getElementById('username');
    if (username.value.length < 8) {
        document.getElementById('unFeedback').innerHTML = "The username must contain at least 8 characters";
    } 
    else {
        document.getElementById('unFeedback').innerHTML = "The username meets the required length.";
    }
}
// let's display a message about 5 character requiremen for password onfocus
function passwordInput () {
    var password = document.getElementById('password');
    document.getElementById('pwFeedback1').innerHTML = "The password must contain at least 5 characters";
    
}
// let's verify password is >= 5 characters onblur
function passwordLength() {
    var password = document.getElementById('password');
    if (password.value.length < 5) {
        document.getElementById('pwFeedback1').innerHTML = "The password must contain at least 5 characters";
    } 
    else {
        document.getElementById('pwFeedback1').innerHTML = "The password meets the required length.";
    }
}
// let's verify the passwords match onblur of password2
function passwordsMatch() {
    var password = document.getElementById('password');
    var password2 = document.getElementById('password2');
    if (password.value === password2.value) {
        document.getElementById('pwFeedback2').innerHTML = "The passwords match.";
    }
    else {
        document.getElementById('pwFeedback2').innerHTML = "The passwords do not match.";
    }
}
// display message on promo selection change
function upgradeSelect() {
    var promoSelect = document.getElementById('promoSelect');
    if (promoSelect.value == '199.99') {
        document.getElementById('upgrades').innerHTML = "Wise choice!";
    } else {
        document.getElementById('upgrades').innerHTML = "Save $159.89 with the annual package.";
    }
}

// listen for events...
var username = document.getElementById('username'); 
username.onblur = usernameLength;
username.onfocus = usernameLength;
var password = document.getElementById('password'); 
password.onfocus = passwordInput;
password.onblur = passwordLength;
var password2 = document.getElementById('password2'); 
password2.onfocus = passwordsMatch;
password2.onblur = passwordsMatch;
var promoSelect = document.getElementById('promoSelect');
promoSelect.onchange = upgradeSelect;

// set focus to username on form
username.focus;