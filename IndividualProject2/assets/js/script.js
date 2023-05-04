/* Alex Tedesco */
/* ISTE-240 */
/* Individual Project 2 */

// Function that toggles the current page between light mode and dark mode changing 
// the html and container colors as well as the light bulb icon itself
function lightMode () {
    var outer = document.getElementById("html");
    var inner = document.getElementById("container");

    if (inner.style.backgroundColor == "forestgreen") {
        outer.style.backgroundColor = "yellow";
        inner.style.backgroundColor = "goldenrod";
        document.getElementById("lightbulb").src = "http://solace.ist.rit.edu/~act2076/ISTE240/final/assets/images/lightmode.png";
        inner.style.transition = "background-color 0.5s ease-in-out";
        outer.style.transition = "background-color 0.5s ease-in-out";
    } else {
        inner.style.backgroundColor = "forestgreen";
        outer.style.backgroundColor = "darkgreen";
        document.getElementById("lightbulb").src = "http://solace.ist.rit.edu/~act2076/ISTE240/final/assets/images/darkmode.png";
        inner.style.transition = "background-color 0.5s ease-in-out";
        outer.style.transition = "background-color 0.5s ease-in-out";
    }
  } 
  
