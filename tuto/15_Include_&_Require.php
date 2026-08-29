<?php


// Include the file 15.php
// PHP will get the code from that file
include('15.php');
// Require the file 15.php
// PHP will also get the code from that file
require('15.php');

echo 'end of php';

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Tutorials </title>
</head>

<body>


    // Add the content from 15.php
    <?php include('15.php'); ?>
    <?php include('15.php'); ?>
    <?php include('15.php'); ?>

</body>

</html>