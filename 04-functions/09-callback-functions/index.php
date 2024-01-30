<?php 

$numbers = [1,2,3,4,5,];

// Example of call back function. 
$squaredNumbers = array_map(function ($number) 
{
    return $number * $number; 
}, $numbers);

// print_r($squaredNumbers); // Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )
echo '<br>';

//Same example but storign the callback function in a variable. 
$square = function ($number) 
{
    return $number * $number; 
};

$squareNumber = array_map($square, $numbers);

// print_r($squareNumber); // Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )


// Understanding how callback works.
function applyCallback($callback, $value) 
{
    return $callback($value);
}

$double = function($number) 
{
    return $number * 2;
}; 

$result = applyCallback($double, 5);

echo $result; // 10

