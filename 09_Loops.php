<?php

//loops

$ninjas = ['Farisha' , 'Adila' , 'Irfan'];

//for ($i = 0; $i < count($ninjas); $i++){
  //  echo $ninjas[$i] .'<br />';
//}

//foreach ($ninjas as $ninja){
  //  echo $ninja .'<br />'; //display current name
//}

$products = [
    ['name' => 'shiny star' , 'price' => 20] ,
    ['name' => 'green shell' , 'price' => 10] ,
    ['name' => 'red shell' , 'price' => 15] ,
    ['name' => 'gold coin' , 'price' => 5] ,
    ['name' => 'lightning bolt' , 'price' => 40] ,
    ['name' => 'banana skin' , 'price' => 2] ,
];

// foreach ($products as $product) { // Go through each product
//     echo $product['name'] . ' - ' . $product['price']; // Display name and price
//     echo '<br />'; // Move to the next line
// }


// WHILE LOOP
// $i = 0; // Start counting from 0

// while ($i < count($products)) { // Repeat while there are still products
//     echo $products[$i]['name']; // Display the product name
//     echo '<br />'; // Move to the next line
//     $i++; // Increase the counter by 1
// }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorials </title>
    </head>
    <body>

<h1>Products</h1>
<ul>
    <?php foreach ($products as $product){ ?> //loop through each product

<h3><?php echo $product['name'];?></h3> //display name of product
<p>$ <?php echo $product['price']?></p> //display price of product

    <?php } ?> //end of foreach loop
</ul>

    </body>
</html> 