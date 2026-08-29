<?php 

//variable scope 

//local vars
// This variable can only be used inside the function

function myFunc() {

    $price = 10;

    // Show the price
    echo $price;
}

// Call the function
myFunc();


// The variable $age is only inside this function
// function myFuncTwo($age) {
//     echo $age;
// }

// Call the function
// myFuncTwo(25);

// We cannot use $age here
// echo $age;


// GLOBAL VARIABLES
// A global variable can be used outside the function

function sayHello() {

    // Use the global variable $name
    global $name;

    // Give a value to $name
    $name = 'farisha';

    // Show the name
    echo "hello $name";
}

// Call the function
sayHello();

// $name can be used here because we used "global"
echo $name;


// This function has its own $name
function sayBye($name) {

    // Change the value of the local $name
    $name = 'irfan';

    // Show the name
    echo "bye $name";
}

// Call the function
sayBye($name);

// This will still show "farisha"
// because the $name inside sayBye() is local
echo $name;

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorials </title>
    </head>
    <body>



    </body>
</html> 