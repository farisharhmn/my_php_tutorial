<?php

// Functions


// Create a function to say hello
// function sayHello($name) {
//     echo "good morning $name";
// }

// Call the function
// sayHello('farisha');


// Create a function with default values
// If we don't give a name or time, it will use Irfan and morning
// function sayHello($name = 'irfan', $time = 'morning') {
//     echo "good $time $name";
// }

// Call the function without giving any value
// sayHello();


function sayHello($name = 'irfan', $time = 'morning')
{
    echo "good $time $name";
}

// Call the function and give the name and time
sayHello('farisha', 'night');


// Create a function to format the product information
function formatProduct($product)
{

    // Show the product information
    echo "{$product['name']} costs RM{$product['price']} to buy <br />";

    // Return the product information
    return "{$product['name']} costs RM{$product['price']} to buy <br />";
}


// Call the function
formatProduct(['name' => 'gold star', 'price' => 20]);


// Store the returned result in a variable
$formatted = formatProduct(['name' => 'gold star', 'price' => 20]);

// Show the result
echo $formatted;


?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Tutorials </title>
</head>

<body>



</body>

</html>