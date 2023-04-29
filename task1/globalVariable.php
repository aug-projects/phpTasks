<?php

// Function to print student data
function printStudentData(string $name, string $id): string
{
    return "Student Name: $name, Student ID: $id";
}

$studentId = "2019XXXX";
$studentName = "Haytham Salama";

function printStudentInfo()
{
    global $studentId, $studentName;
    echo printStudentData($studentName, $studentId) . "<br>";
}

printStudentInfo();

// Function to print global age variable
$globalAge = 21;

function printGlobalAge()
{
    global $globalAge;
    echo $globalAge . "<br>";
}

printGlobalAge();

// Function to calculate age based on a global birth year variable
$birthYear = 2001;

function calculateAgeFromBirthYear()
{
    global $birthYear;
    return date('Y') - $birthYear;
}

echo calculateAgeFromBirthYear() . "<br>";

// Function to calculate the sum of two global variables
$globalA = 26;
$globalB = 21;

function calculateSumOfGlobals()
{
    global $globalA, $globalB;
    return ($globalA + $globalB);
}

echo calculateSumOfGlobals() . "<br>";

// Function to print a global language variable
$globalLanguage = "English";

function printGlobalLanguage()
{
    global $globalLanguage;
    echo "I can speak $globalLanguage <br>";
}

printGlobalLanguage();
