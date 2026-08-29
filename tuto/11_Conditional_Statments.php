<?php

$price = 20;


// Check if the price is less than 30
// If yes, show this message
//if ($price < 30) {
//  echo 'the condition is met';

// Check another condition
//} else if ($price < 20) {
//    echo 'elseif condition met';

// If none of the conditions are true
//} else {
//    echo 'condition not met';
//}

//$products = [
//  ['name' => 'shiny star' , 'price' => 20] ,
//['name' => 'green shell' , 'price' => 10] ,
//['name' => 'red shell' , 'price' => 15] ,
//['name' => 'gold coin' , 'price' => 5] ,
//['name' => 'lightning bolt' , 'price' => 40] ,
//['name' => 'banana skin' , 'price' => 2] ,
//];


// Go through each product in the list
foreach ($products as $product) {


    // Check if the price is less than 15
    // And check if the price is more than 2
    if ($product['price'] < 15 && $product['price'] > 2) {
        echo $product['name'] . '<br />';
    }


    // Check if the price is more than 20
    // OR if the price is less than 10
    if ($product['price'] > 20 || $product['price'] < 10) {
        echo $product['name'] . '<br />';
    }
}


?>


<!DOCTYPE html>
<html>

<head>
    <title>PHP Tutorials </title>
</head>

<body>

    <div>
        <ul>
            <?php foreach ($products as $product) { ?>
                // Check if the product price is less than 15
                <?php if ($product['price'] < 15) { ?>
                    <li><?php echo $product['name']; ?></li>
                <?php } ?>
            <?php } ?>
        </ul>
    </div>

</body>

</html>