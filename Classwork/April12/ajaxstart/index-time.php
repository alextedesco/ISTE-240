<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function updateTime() {

            const xhttp = new XMLHttpRequest();

            console.log ("UPDATE TIME");

            xhttp.onload = function() {
                // console.log (this.respondText);
                // document.getElementById('time').innerHTML = this.responseText;
                jsondata = JSON.parse(this.responseText);

                document.getElementById('time').innerHTML = jsondata.time;

                console.log("Favorite Color: " + jsondata.favcolor);

            }

            xhttp.open("GET", "time.php");
            xhttp.send();
        }
    </script>
</head>
<body>

        <div id="time"><?php echo date("Y-m-d H:i:s")?></div>
        <br/>
        <button onclick="updateTime()">Update Time</button>

        <script>
            var interval = setInterval(updateTime(), 1000)
    
</body>
</html>