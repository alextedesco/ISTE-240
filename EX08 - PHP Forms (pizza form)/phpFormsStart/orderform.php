<!-- Alex Tedesco -->
<!-- ISTE-240 -->
<!-- EX08 - PHP Forms (Pizza) -->


<?php
	$title = "Order a Pizza";
	$path = "./";

	include ($path . "assets/inc/header.php")
?>
		<h2>Order a Delicious Pizza!</h2>
	
		<form name="OrderForm" action="orderprocess.php"  onsubmit="return validateForm();" method="post">
			<p>Name:  <input type="text" name="customerName"  /></p>
			<?php
			if (isset($_GET['name'])) {
				echo "<strong>You really messed up your idea moron</strong>";
			}
			?>
			<p>ID:  <input type="text"  name="customerID"  /></p>
			<p> Check the size of Pizza you would like to order:<br />
				<!-- Note the <label> tags below that allow the user to click on the text! -->
				<input type="radio" name ="pizzaSize" value = "P" id="personal"/><label for="personal">Personal<label><br/>
				<input type="radio" name ="pizzaSize" value = "S" id="small"/><label for="small">Small<label><br/>
				<input type="radio" name ="pizzaSize" value = "M"  id="medium" checked="true"/><label for="medium">Medium<label><br/>
				<input type="radio" name ="pizzaSize" value = "L"  id="large"/><label for="large">Large<label>
			</p>
			<p> Select the number of toppings you want on your pizza:<br />
				<!-- Step 1: Added toppings radio buttons in the order form -->
				<input type="radio" name ="pizzaToppings" value = "None" id="zeroToppings" checked="true"/><label for="zeroToppings">No Extra Toppings<label><br/>
				<input type="radio" name ="pizzaToppings" value = "One" id="oneToppings"/><label for="oneToppings">One Topping<label><br/>
				<input type="radio" name ="pizzaToppings" value = "Two"  id="twoToppings"/><label for="twoToppings">Two Toppings<label><br/>
				<input type="radio" name ="pizzaToppings" value = "Three"  id="threeToppings"/><label for="twoToppings">Three Toppings<label>
			</p>
			<p>
				<input type="submit"  name="Submit"  value=" Send Form"  />
			</p>
		</form>

		<?php
			include ($path . "assets/inc/header.php")
		?>