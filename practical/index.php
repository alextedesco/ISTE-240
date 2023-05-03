<?php
// Confirms that the database can be connected to successfully
include ("dbcon.php");

$sql = "SELECT * FROM `240reviews` ORDER BY `id` LIMIT 50";

$result = $conn->query($sql);

// Saves the data from the table into an iterable list
while ($row = $result->fetch_assoc() ) {
	$records[] = $row;
}

$sql = "SELECT * FROM `240reviews` ORDER BY `id` LIMIT 50";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html id="html" lang="en" style="background-color: darkblue;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rate My Dog</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>
<body>
    
    <!-- make sure to create a container/wrapper for overall site. -->
    <div id="container" class="container" style="background-color: lightblue;">
        <h1>Rate My Dog!</h1>
        <!-- Navigation element for containing all subpages (list elements) -->
  <header>
  <!-- Navigation element for containing all subpages (list elements) -->
  <nav>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Nav2</a></li>
      <li><a href="#">Nav3</a></li>
    </ul>
   </nav>
</header>

   <section>
      <h2>Sparky the Dog</h2>
      <img src="assets/images/tagline-img.png">
   </section>

   <h2>Recent Ratings:</h2>
    <?php
		// Outputs the current records in the comments MySQL table
		foreach ($records as $record) {
			echo "<strong><p>Name: </strong>" . $record['name'];
      echo "<strong><p>Rating: </strong>" . $record['rating'];
      echo "<strong><p>Comment: </strong>" . $record['comment'];
		}
	?>

  <hr/>
    
    <script>

      function validate() {

        name = document.forms['commentform']['name'].value;
        comment = document.forms['commentform']['name'].value;

        errormsg = "";

            if (name == "") {
                errormsg += "Fill in Name\n";
                alert ("You must include your name!")
            }

            if (comment == "") {
                errormsg += "Fill in Name\n";
                alert ("You must include your comment!")
            }

            rating = document.forms['commentform']['rating'];
            for (i = 0; i < rating.length; i++) {
                if (rating[i].checked) {
                    userRating = rating.value;
                    console.log (userRating);
                    break;
                } else {
                    errormsg += "You must check at least on box\n";
                }
            }

            return true;
        }

        function toggle() {
          var outer = document.getElementById("html");
          var inner = document.getElementById("container");

          console.log (outer);
          console.log (inner);

          if (inner.style.backgroundColor == "lightblue") {
              outer.style.backgroundColor = "lightblue";
              inner.style.backgroundColor = "darkblue";
          } else {
              inner.style.backgroundColor = "lightblue";
              outer.style.backgroundColor = "darkblue";
          }
        }
    </script>

    <form name="commentform" action="process.php" method="post" onsubmit="return validate();">
      Name: <input type="text" name="name" value=""/>
      <br/>
      Rating:
      <br/>
      <input type="radio" name="rating" value="1" id="1" checked>1<br/>
      <input type="radio" name="rating" value="2" id="2">2<br/>
      <input type="radio" name="rating" value="3" id="3">3<br/>
      <input type="radio" name="rating" value="4" id="4">4<br/>
      <input type="radio" name="rating" value="5" id="5">5<br/>
      Comment: <input type="text" name="comment" /> <br />
      <input type="submit" value="Submit"/><br/>
      </br>
    </form>

    <button onclick="toggle()">Toggle Dark Mode</button>
    <?php include ("assets/inc/footer.php");