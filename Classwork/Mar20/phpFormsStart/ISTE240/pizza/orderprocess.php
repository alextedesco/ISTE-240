<?php

    $title = "Costs";
    $path = "./";

    include ($path . "assets/inc/header.php");

    $customerName = $_POST['customerName'];

    $customerID = $_POST['customerID'];

    $pizzaSize = $_POST['pizzaSize'];

    // die($customerName . "ID: " $customerID . "Size: " . $pizzaSize);
    

    if (empty($customerID)) {
        echo "<p>You forgot an ID</p>";

    } else {
    if (!is_numeric($customerID)) {
        echo "<p>You entered an invalid ID. Only numbers allowed!</p>";
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

        $taxAmount = $pizzaCost * .08;
        $totalCost = $taxAmount + $pizzaCost;

        die ("Tax: " . $taxAmount . " Total: " . $totalCost);
        die("Total: " . $pizzaCost . " Size: " . $pizzaType);
    }
}
?>

    Display Total

<?php
    include ($path . 'assets/inc/footer.php')