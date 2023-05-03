<script>
    // Get the current day and time
    var now = new Date();
    var currentDay = now.getDay();
    var currentTime = now.getHours() + (now.getMinutes() / 60);

    // Get the opening hours for the current day
    var openingHoursList = document.getElementById("opening-hours");
    var openingHours = openingHoursList.children[currentDay].textContent;

    // Extract the opening and closing times from the opening hours string
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

    // Determine if the store is currently open or closed
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