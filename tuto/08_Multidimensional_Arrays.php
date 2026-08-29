<?php

//multidimensional arrays (an array containing other array)

$blogs = [
    ['title' => 'mario party' , 'author' => 'mario' , 'content' => 'lorem' , 'likes' => 30],
['title' => 'mario kart cheats' , 'author' =>  'toad' , 'content' => 'lorem' , 'likes' => 25],
['title' => 'zeldan hidden cheats' , 'author' => 'link' , 'content' => 'lorem' , 'likes' => 50]
];

//print_r($blogs[1]); //display second blog
//print_r($blogs[1][1]); //display second value of blog

//echo $blogs[2]['author']; //display author of the third blog

//echo count($blogs); //count number of blog

$blogs[] = ['title' => 'castle party' , 'author' => 'peach' , 'content' => 'lorem' , 'likes' => 100]; //add new blog

//print_r($blogs); //display all blog

$popped = array_pop($blogs); // Remove the last blog and store it in $popped
print_r($popped); // Display the removed blog

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorials </title>
    </head>
    <body>

    </body>
</html> 