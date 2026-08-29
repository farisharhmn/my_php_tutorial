<?php

//Indexed Arrays = items have number positions starting from 0

$PeopleOne = ['Farisha', 'Adila', 'Ain']; // Create an indexed array

// echo $PeopleOne[1]; // Display Adila (index 1)

$peopleTwo = array('Irfam', 'Hakimi', 'Najmi'); // Another way to create an array

// echo $peopleTwo[2]; // Display Najmi (index 2)

$ages = [20, 30, 40, 50]; // Create an array of ages

// print_r($ages); // Display all ages

$ages[1] = 25; // Change the second value from 30 to 25

// print_r($ages); // Display the updated ages

$ages[] = 60; // Add 60 to the end of the array

// print_r($ages); // Display the updated array

array_push($ages, 70); // Add 70 to the end of the array

// print_r($ages); // Display the updated array

// echo count($ages); // Count the number of items


$peopleThree = array_merge($PeopleOne, $peopleTwo); // Combine two arrays

// print_r($peopleThree); // Display the combined array


// $name = 'Farisha'; // Store a string

// $name[1]; // Get the character at index 1


//Associative Arrays = use keys instead of numbers

$ninjasOne = [
    'Farisha' => 'pink',
    'Adila' => 'yellow',
    'Ain' => 'Black'
]; // Key = name, Value = colour

// echo $ninjasOne['Adila']; // Display Adila's colour

// print_r($ninjasOne); // Display the whole array

$ninjasTwo = array(
    'bowser' => 'green',
    'peach' => 'yellow'
); // Create another associative array

// print_r($ninjasTwo); // Display the array

$ninjasTwo['toad'] = 'pink'; // Add a new key and value

// print_r($ninjasTwo); // Display the updated array

$ninjasThree = array_merge($ninjasOne, $ninjasTwo); // Combine two associative arrays

print_r($ninjasThree); // Display the combined array

echo count($ninjasOne); // Count the items in ninjasOne

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorials </title>
    </head>
    <body>

    </body>
</html> 