<!-- Alex Tedesco -->
<!-- ISTE-240 -->
<!-- EX08 - PHP Forms (Pizza) -->

<?php

    $title = "Costs";
    $path = "./";

    include ($path . "assets/inc/header.php");

    $customerName = $_POST['customerName'];

    $customerID = $_POST['customerID'];

    $pizzaSize = $_POST['pizzaSize'];

    $pizzaToppings = $_POST['pizzaToppings'];

    // die($customerName . "ID: " $customerID . "Size: " . $pizzaSize);
    

    if (empty($customerID)) {
        echo "<p>You forgot an ID</p>";

    } else {
    if (!is_numeric($customerID)) {
        // echo "<p>You entered an invalid ID. Only numbers allowed!</p>";
        header("Location: orderform.php?name=" . $customerName);
    } else {
        // Pretty sure its ok to lets process
        switch ($pizzaSize) {
            case 'P':
                $pizzaCost = 7.99;
                $pizzaType = "Personal";
                break;
            case 'S':
                $pizzaCost = 10.99;
                $pizzaType = "Personal";
                break;
            case 'M':
                $pizzaCost = 12.99;
                $pizzaType = "Medium";
                break;
            case 'L':
                $pizzaCost = 16.99;
                $pizzaType = "Large";
                break;
            default:
                $pizzaCost = 12.99;
                $pizzaType = "Medium";
                break;
        }
        // Step 2: Checks value of the toppings radio button and gets the price for that value
        switch ($pizzaToppings) {
            case 'None':
                $toppingCost = 0.00;
                break;
            case 'One':
                $toppingCost = 2.00;
                break;
            case 'Two':
                $toppingCost = 3.00;
                break;
            case 'Three':
                $toppingCost = 3.75;
                break;
            default:
                $toppingCost = 0.00;
                break;
        }

        // Step 3: Processes the total pizza cost and the tax
        $taxAmount = (($pizzaCost + $toppingCost) * .08);
        $totalCost = $taxAmount + $pizzaCost + $toppingCost;

        // die ("Tax: " . $taxAmount . " Total: " . $totalCost);
        
        $fmt = numfmt_create('en_US', NumberFormatter::CURRENCY);

        // Step 4: echo'd out the cost of the pizza with each cost on its own line
        echo "Pizza Price: " . numfmt_format_currency($fmt,$pizzaCost, "USD") . "<br>";
        echo "Topping Price: " . numfmt_format_currency($fmt,$toppingCost, "USD") . "<br>";
        echo "Tax Amount: " . numfmt_format_currency($fmt,$taxAmount, "USD") . "<br>";
        echo "Total Cost of your order is: " . numfmt_format_currency($fmt,$totalCost, "USD") . "<br><br>";
        echo "Thank you for your order " . $customerName . "! It will be ready soon!";
        include ($path . "assets/inc/footer.php");
        }
    }
?>