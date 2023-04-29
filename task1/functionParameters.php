<?php

// Function to print student data
function printStudentData(string $name, string $id): string
{
    return "Student Name: $name, Student ID: $id";
}

echo printStudentData("Haytham", "2019XXXX");

// Function to calculate age based on birth year
function calculateAge(int $birthYear): int
{
    return date("Y") - $birthYear;
}

echo calculateAge(1998);

// Function to calculate the sum of two numbers
function calculateSum(int $num1, int $num2): int
{
    return $num1 + $num2;
}

echo calculateSum(10, 15);

// Function to calculate the area of a square
function calculateSquareArea(int $sideLength): int
{
    return $sideLength * $sideLength;
}

echo calculateSquareArea(5);

// Function to calculate the area of a circle
function calculateCircleArea(float $radius): float
{
    return M_PI * $radius * $radius;
}

echo calculateCircleArea(10);
