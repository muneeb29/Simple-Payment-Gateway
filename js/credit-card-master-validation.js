//By Muneeb khalid 19065813

/*this is the javascript used to validate the card number 
by checking if its valid against the conditions of 
mastercard*/

//function name is cardnumber
function cardnumber(ccnum)
{
//gets the ccnum input from index.php
 var ccnum = document.getElementById("ccnum");
 /*checks if it starts with 51 or 55*/
 //checks length of card number
 var cardno = /^(?:5[1-5][0-9]{14})$/;
 //checks the cardnumber value against the conditions
 if(ccnum.value.match(cardno))
 {
//if number is valid it just returns true
 return true;
 }
 else
 {
//if it's false it returns false and displays an alert
 alert("Not a valid Mastercard number!");
 return false;
 }
 

}

