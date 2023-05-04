<!-- Alex Tedesco -->
<!-- ISTE-240 -->
<!-- Individual Project 2 -->

<?php
// Confirms that the database can be connected to successfully
// If it is, "Connection successful" is outputed in console.log
include ("dbcon.php");

// Sanitize function for the form
function sanitize($string, $len = 200){
    $string = trim($string);
    $string = htmlentities($string);
    $string = substr($string,0,$len);

    return $string;
}

// Checks if the inputs aren't empty before submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (!empty($_POST['fname'] )  && !empty($_POST['lname'] ) && !empty($_POST['email'] ) && !empty($_POST['restaurant'] ) && !empty($_POST['sight'] ) && !empty($_POST['comment'] )) {
		$fname = sanitize($_POST['fname']);
		$lname = sanitize($_POST['lname']);
		$email = sanitize($_POST['email']);
		$restaurant = sanitize($_POST['restaurant']);
		$sight = sanitize($_POST['sight']);
		$comment = sanitize($_POST['comment']);
		
		$stmt = $conn->prepare("INSERT INTO `comments` (`fname`, `lname`, `email`, `restaurant`, `sight`, `comment`) VALUES (?, ?, ?, ?, ?, ?);");
		
		$stmt->bind_param("ssssss", $fname, $lname, $email, $sight, $restaurant, $comment);
		$stmt->execute();
		$stmt->close();	
// If there is a missing tag a JavaScript alert will appear informing the user to fill it in
} else {
	echo "<script>alert('Missing one of more required fields!');</script>";
	}
}

$sql = "SELECT * FROM `comments` ORDER BY `id` LIMIT 50";

$result = $conn->query($sql);

// Saves the data from the table into an iterable list
while ($row = $result->fetch_assoc() ) {
	$records[] = $row;
}

$sql = "SELECT * FROM `comments` ORDER BY `id` LIMIT 50";

$result = $conn->query($sql);

?>

<?php
    $title = "Comments";
    $cssPath = "assets/css/styles.css";
	$jsPath = "assets/js/script.js";
    $faviconPath = "assets/images/gatlinburg-logo.png";
    include ("assets/inc/header.php");
    include ("assets/inc/nav.php");
?>

        <span>
                <!-- Comments form -->
                <h1>Leave a comment</h1>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">		
			    First Name: <input type="text" id="fname" name="fname" /><br/>
		    	Last Name: <input type="text" id="lname" name="lname"/><br/>
				Email: <input type="text" id="msg" name="email"/><br/>
				Favorite Resturant: <input type="text" id="restaurant" name="restaurant"/><br/>
				Favorite Sight: <input type="text" id="sight" name="sight"/><br/>
				Comment: <input type="text" id="comment" name="comment"/><br/>
			    <input type="hidden" name="task" value="submitname"/><br/>
			    <input type="submit" value="Submit Comment"/><br/>
		      </form>

              <hr>

              <h1>Comments</h1>
			  <h2>Most Recent Comment</h2>

             <?php
			//  Obtains the most recent comment 
			 	$most_recent_record = end($records);
				echo "Name: " . $most_recent_record['fname'] . " " . $most_recent_record['lname'] .  "<br/>Email: " . $most_recent_record['email'] . "<br/>Favorite Restaurant: " . $most_recent_record['restaurant'] . "<br/>Favorite Sight: " . $most_recent_record['sight'] . "<br/>Comment: " . $most_recent_record['comment'];
				// Obtains all other comments from the record
			 	$other_records = array_slice($records, 0,  -1);
	        	// Outputs the current records in the comments MySQL table
				echo "<h2>Previous Comments</h2>";
	        	foreach ($other_records as $record) {
	    		echo "Name: " . $record['fname'] . " " . $record['lname'] . "<br/>Email: " . $record['email'] ."<br/>Favorite Restaurant: " . $record['restaurant'] . "<br/>Favorite Sight: " . $record['sight'] . "<br/>Comment: " . $record['comment'] . "<br/><br/>";
	        	}
	        ?>
<?php
include ("assets/inc/footer.php");
?>