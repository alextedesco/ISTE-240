var moving;

function $(id) {
    return document.getElementById(id)
}

function right (id) {
    stopMoving();
    console.log($ (id).style.left)
    $(id).style.left = parseInt ($(id).style.left) + 1 + "px";
    moving = setTimeout(right, 10, id);
    // moving = setTimeout(function(){ right (id) }, 10, id)
}

function left (id) {
    stopMoving ();
    console.log($ (id).style.left)
    $(id).style.left = parseInt ($(id).style.left) - 1 + "px";
    moving = setTimeout(left, 10, id);
    // moving = setTimeout(function(){ left (id) }, 10, id)

}

function stopMoving () {
    clearTimeout (moving);
}

function fadeIn (id) {

    if (parseFloat($(id).style.opacity) <= 0) {
        $(id).style.opacity = parseFloat ($(id).style.opacity) + 0.1
        console.log ("HERE");
        setTimeout (fadeIn, 10, id)
        document.getElementsByTagName ("button")[3].disabled=true
    } else {
        document.getElementsByTagName ("button")[3].disabled=false
    }
}

function fadeOut (id) {
    console.log (parseFloat($(id).style.opacity));

    if (parseFloat($(id).style.opacity) >= 0) {
        // console.log ("HERE");
        $(id).style.opacity = parseFloat ($(id).style.opacity) - 0.1
        setTimeout (fadeOut, 10, id)
        document.getElementsByTagName ("button")[4].disabled=true
    } else {
        document.getElementsByTagName ("button")[4].disabled=true
    }
}
