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

        $taxAmount = $pizzaCost * .08;
        $totalCost = $taxAmount + $pizzaCost;

        die ("Tax: " . $taxAmount . " Total: " . $totalCost);
        
        $fmt = numfmt_create('en_US', NumberFormatter::CURRENCY)


        echo "Tax: " . numfmt_format_currency($fmt,$taxAmount, "USD"); . "<br/>";
        ?>
            Total: <?php echo "Total: " . numfmt_format_currency($fmt,$totalCost, "USD") ?>

            <br/>
            Thank you for your order <?php echo $_POST['customerName'] ?>. It will be ready soon

        <?php
    }
}
?>

    Display Total


    include ($path . 'assets/inc/footer.php')