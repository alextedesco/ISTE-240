// Alex Tedesco
// 2/19/2023
// ISTE-240 Exercise 5 - JavaScript (Part 1)

// Exercise 5a
function jsStyle() {
    // Changes the color of the p tag to blue
    document.getElementById("text").style.color = "blue";
    // Changes the font size of the p tag to 20px
    document.getElementById("text").style.fontSize = "20px";
}

// Exercise 5b
function getFormValues() {
    // Stores the first and last name in a variable
    var first = document.getElementById("fname").value;
    var last = document.getElementById("lname").value;
    // Shows first and last name in an alert box
    alert(first + " " + last);
}

// Exercise 5c
function getOptions() {
    var form = document.getElementById('mySelect');
    // Shows the amount of options in the form in an alert box
    alert("There are " + form.childElementCount + " options");
}

// Exercise 5d	
function mouseover() {
    // Sets the font color to red when the mouse is over the p tag
    document.getElementById('rb').style.color = 'red';
}
      
function mouseout() {
    // Sets the font color to black when the mouse is not over the p tag
    document.getElementById('rb').style.color = 'black';
}

// Exercise 5e

function multiply() {
    // Stores the first operand and the second operand into variables
    var num1 = document.getElementById('firstoperand').value;
    var num2 = document.getElementById('secondoperand').value;
    
    // Calculates answer and stores in variable
    var answer = parseInt(num1) * parseInt(num2);
    document.getElementById('result').innerHTML = answer;
}
  
  function divide() {
    // Stores the first operand and the second operand into variables
	var num1 = document.getElementById('firstoperand').value;
    var num2 = document.getElementById('secondoperand').value;
    // Calculates answer and stores in variable

    var answer = parseInt(num1) / parseInt(num2);
    document.getElementById('result').innerHTML = answer;
}




