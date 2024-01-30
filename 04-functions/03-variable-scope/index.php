<?php


// Global scope
$name = ' Alice';

// You can use the variable inside a function if you pass it as argument
function sayHi($name)
{
    // Local scope
    $name = 'Bob';
    echo 'Hello' . $name;  
    return $name;
}

sayHi($name); // Hello Bob;
echo $name; // Alice

function sayGoodbye()
{
    // Local scope
    $names = ['Jack', 'Jill'];
    echo 'Goodbye' . $names[0];
}

// echo $names[0]; // $names is not accesible outside the function
sayGoodbye(); // Goodbye Jack
// echo $names[0]; // $names is not accesible outside the function. 
