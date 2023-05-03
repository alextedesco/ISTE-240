function lightMode () {
    var outer = document.getElementById("html");
    var inner = document.getElementById("container");

    if (inner.style.backgroundColor == "forestgreen") {
        outer.style.backgroundColor = "yellow";
        inner.style.backgroundColor = "goldenrod";
    } else {
        inner.style.backgroundColor = "forestgreen";
        outer.style.backgroundColor = "darkgreen";
    }
  }

 