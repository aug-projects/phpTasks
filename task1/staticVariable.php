<?php
// Function to decrement a static number variable
function decrementNumber()
{
    static $number = 100;
    $number -= 10;
    echo $number . "<br>";
}

decrementNumber();
decrementNumber();

// Function to add two static number variables
function addNumbers($a, $b)
{
    static $num1;
    static $num2;
    $num1 = $a;
    $num2 = $b;
    echo $num1 + $num2 . "<br>";
}

addNumbers(10, 15);
addNumbers(15, 15);

// Function to subtract two static number variables
function subtractNumbers($a, $b)
{
    static $num1;
    static $num2;
    $num1 = $a;
    $num2 = $b;
    echo $num1 - $num2 . "<br>";
}

subtractNumbers(10, 15);
subtractNumbers(15, 15);

// Function to print the maximum of two static number variables
function printMax($a, $b)
{
    static $num1;
    static $num2;
    $num1 = $a;
    $num2 = $b;

    if ($num1 > $num2) {
        echo $num1 . "<br>";
    } else if ($num1 < $num2) {
        echo $num2 . "<br>";
    } else {
        echo "No maximum <br>";
    }
}

printMax(10, 15);
printMax(10, 10);

// Function to print the average of two static number variables
function printAverage($a, $b)
{
    static $num1;
    static $num2;
    $num1 = $a;
    $num2 = $b;
    echo ($num1 + $num2) / 2 . "<br>";
}

printAverage(10, 15);
printAverage(15, 15);
