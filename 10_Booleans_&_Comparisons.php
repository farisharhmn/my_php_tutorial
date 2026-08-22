<?php

//comparisons booleans (true or false)
// echo true; (true displays as 1)
// echo false; (false displays nothing)

//numbers
//echo 5 < 10;
echo 5 < 10; // Is 5 smaller than 10? - true
echo 5 > 10; // Is 5 bigger than 10? - false
echo 5 == 10; // Is 5 equal to 10? - false
echo 10 == 10; // Is 10 equal to 10? - true
echo 5 != 10; // Is 5 NOT equal to 10? - true
echo 5 <= 5; // Is 5 smaller than or equal to 5? - true
echo 5 >= 5; // Is 5 bigger than or equal to 5? - true

// Strings
echo 'shaun' < 'yoshi'; // Is "shaun" before "yoshi"? - true
echo 'shaun' > 'yoshi'; // Is "shaun" after "yoshi"? - false
echo 'shaun' > 'Shaun'; // Compare lowercase and uppercase - true
echo 'mario' == 'mario'; // Are both strings the same? - true
echo 'mario' == 'Mario'; // Lowercase m and uppercase M are different - false

// Loose vs strict comparison
echo 5 == '5'; // Same value, different type - true
echo 5 === '5'; // Same value but different type - false
echo 5 === 5; // Same value and same type - true

echo true == "1"; // true is equal to "1" - true
echo false == ""; // false is equal to an empty string - true

?>


<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorials </title>
    </head>
    <body>

    </body>
</html> 