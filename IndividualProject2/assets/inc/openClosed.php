<script>
    // Obtains the current date
    var now = new Date();
    var currentDay = now.getDay();
    var currentTime = now.getHours() + (now.getMinutes() / 60);

    // Obtains the hours elements
    var openingHoursList = document.getElementById("opening-hours");
    var openingHours = openingHoursList.children[currentDay].textContent;

    // Uses regular expression to cut down the day/hours string
    var regex = /(\d+)(AM|PM)\s-\s(\d+)(AM|PM)/;
    var matches = openingHours.match(regex);
    var openingTime = parseInt(matches[1]);
    if (matches[2] === "PM") {
        openingTime += 12;
    }
    var closingTime = parseInt(matches[3]);
    if (matches[4] === "PM") {
        closingTime += 12;
    }

    // Determines if the attraction is open currently, if it is then we use open.gif, else we use closed.gif
    var isOpen;
    if (currentTime >= openingTime && currentTime < closingTime) {
        isOpen = true;
    } else {
            isOpen = false;
        }

    var openClosedImage = document.getElementById("open-closed-image");
    if (isOpen) {
        openClosedImage.src = "../../assets/images/open.gif";
    } else {
            openClosedImage.src = "../../assets/images/closed.gif";
        }
</script>