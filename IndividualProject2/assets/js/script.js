function lightMode () {
    var outer = document.getElementById("html");
    var inner = document.getElementById("container");

    if (inner.style.backgroundColor == "forestgreen") {
        outer.style.backgroundColor = "yellow";
        inner.style.backgroundColor = "goldenrod";
        document.getElementById("lightbulb").src = "http://solace.ist.rit.edu/~act2076/ISTE240/final/assets/images/lightmode.png";
    } else {
        inner.style.backgroundColor = "forestgreen";
        outer.style.backgroundColor = "darkgreen";
        document.getElementById("lightbulb").src = "http://solace.ist.rit.edu/~act2076/ISTE240/final/assets/images/darkmode.png";
    }
  } 

function sanitize($string, $len = 200){
    $string = trim($string);
    $string = htmlentities($string);
    $string = substr($string,0,$len);

    return $string;
}