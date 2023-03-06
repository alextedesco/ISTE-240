// Alex Tedesco
// 2/19/2023
// ISTE-240 Exercise 6 - JavaScript (Part 2)

// Exercise 5a
function jsStyle() {
    // Changes the color of the p tag to blue
    document.getElementById("text").style.color = "blue";
    // Changes the font size of the p tag to 20px
    document.getElementById("text").style.fontSize = "20px";
}

// Exercise 6a
function moveButton() {
    // Moves the text to the right 10 pixels each time the button is clicked
    document.getElementById("text").style.left = parseInt(document.getElementById("text").style.left) + 10 + "px";
}

// Exercise 5b
function getFormValues() {
    // Stores the first and last name in a variable
    var first = document.getElementById("fname").value;
    var last = document.getElementById("lname").value;
    // Shows first and last name in an alert box
    alert(first + " " + last);
}

// Exercise 6b
function howmany () {
    // Stores the inputs in the form as a variable
    var inputs = document.getElementById("regForm").getElementsByTagName("input");
    // Stores number of inputs as a variable
    var totalInputs = inputs.length;
    var textInputs = 0;
    // For loop that checks if the type of the input at index of i is text. Increments the count if it is
    for (i=0; i < inputs.length; i++) {
        if (inputs[i].type == "text") {
            textInputs++;
        }
    }
    // Prints out the input counts to console
    console.log ("Total Inputs: " + totalInputs);
    console.log ('Total Inputs With type="text": ' + textInputs);
}

// Exercise 5c
function getOptions() {
    var form = document.getElementById('mySelect');
    // Shows the amount of options in the form in an alert box
    alert("There are " + form.childElementCount + " options");
}

// Exercise 6c 
function colorChanger() {
    // Stores the value of the current color in the dropdown to a variable
    var color = document.getElementById("mySelect").value;
    // Set the background color to the color of the dropdown
    document.getElementsByTagName("div")[4].style.backgroundColor = color;
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

// Exercise 6d
function mouseover () {
    // Stores the value of the current color in the dropdown to a variable
    var color = document.getElementById("mySelect").value;
    // Set the font color to the current color of the dropdown when the mouse is over the p tag
    document.getElementById('rb').style.color = color;
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

// Exercise 6e





