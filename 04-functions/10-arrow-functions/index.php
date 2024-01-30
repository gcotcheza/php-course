<?php

// Normal function
function add($a, $b)
{
    return $a + $b;
}

echo add(1,2);
echo '<br>';

// Arrow function
$add = fn ($a, $b) => $a + $b;

echo $add(1,2);
echo '<br>';

$numbers = [1,2,3,4,5,];

// Normal function
$squaredNumbers = array_map(function ($number) 
{
    return $number * $number; 
}, $numbers);

// Arrow function
$squaredNumbers = array_map(fn ($number) => $number * $number, $numbers);
print_r($squaredNumbers);