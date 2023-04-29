<?php
// Function to print local name variable
function printLocalName()
{
    $localName = "Haytham <br>";
    echo $localName;
}
printLocalName();

// Function to check local age variable
function checkLocalAge()
{
    $localAge = 21;
    if ($localAge == 21) {
        echo "Age is 21 <br>";
    } else {
        echo "Age is not 21 <br>";
    }
}
checkLocalAge();

// Function to increment local age variable
function incrementLocalAge()
{
    $localAge = 21;
    $localAge += 1;
    echo "Age is $localAge <br>";
}
incrementLocalAge();

// Function to print local ID variable
function printLocalID()
{
    $localID = "2019XXXX";
    echo $localID . "<br>";
}
printLocalID();

// Function to check local name variable
function checkLocalName()
{
    $localName = "Haytham Salama";
    if ($localName == "Haytham Salama") {
        echo "Name is Haytham Salama <br>";
    } else {
        echo "Name is not Haytham Salama <br>";
    }
}
checkLocalName();
