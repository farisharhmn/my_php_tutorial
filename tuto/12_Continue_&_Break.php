<?php

$price = 20;

// Check if the price is less than 30
// if ($price < 30) {
//     echo 'the condition is met';

// Check if the price is less than 20
// } else if ($price < 20) {
//     echo 'elseif condition met';

// If none of the conditions are true
// } else {
//     echo 'condition not met';
// }

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2],
];


// Go through each product
foreach ($products as $product) {


    // Stop the loop if the product is lightning bolt
    if ($product['name'] === 'lightning bolt') {
        break;
    }


    // Skip the product if the price is more than 15
    if ($product['price'] > 15) {
        continue;
    }

    echo $product['name'] . '<br />';

}



?>


<!DOCTYPE html>
<html>

<head>
    <title>PHP Tutorials </title>
</head>

<body>



</body>

</html>