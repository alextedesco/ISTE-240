<?php 

	function santize ($str, $length=50) {
		$str = trim($str);
		$str = htmllentities($str);
		return substr($str, 0, $length);

		// return $str;


	}

	if (!empty($_POST['fname'])) {

		
		$fname = $_POST['fname'];
		$fname = santize($fname);

		$email = $_POST['email'];
		$email = santize($email);

		$date = $_POST['date'];
		$date = santize($date);

		if (emailCheck($email)) {
			echo "Email looks good";
		} else {
			echo "Email looks bad";
		}

		// $email = filter_var($email,)

		if ()

		if (date1($date)) {

			echo "<br/>valid date";

			$newdate = strtotime($date);

			$newdate = date("Ymd", $newdate);

			echo "new date" . $newdate;



		}

		// $sql = "INSERT into (whaterver) and values ("..") ";

		echo $fname . "<br/>" . $email;

	} else {
		echo "problem with data";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset=utf-8" />
	<title>Clean input</title>
 	<style type="text/css">
 		form div{margin: 1em;}
 		form div label{float: left;width: 10%;}
 		form div.radio {float: left;}
 		.clearfix {clear: both;}
 	</style>
</head>
<body>
	<script>
		function validate () {
			if (document.forms[0].fname.value == "") {
				alert("You forgot the name");
				return false;

			}
			return false;

		}
	</script>
	<form name="testform" action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return false">
		<div>
			<label>First Name:</label>
			<input type="text" name="fname" size="30" />
		</div>
		<div>
			<label>Date:</label> (mm/dd/yyyy)
			<input type="text" name="date" size="30" />
		</div>
		<div>
			<label>Email:</label>
			<input type="text" name="email" size="30" />
		</div>
		<div class="clearfix">
			<input type="reset" value="Reset Form" />
			<input type="submit" name="submit" value="Submit Form" />
		</div>	
	</form>
	<?php

	?>
</body>
</html>