<?php 

function add($a, $b) 
{
    return $a + $b;
}

$add = add(1,2);
echo $add; 
echo '<br>';
echo add(100, 200);
echo '<br>';
// echo add(); // Error: Too few arguments to function add()

// Declaring default value for $name
function sayHello($name = 'World') 
{
    return 'Hello'. $name; 
}

echo sayHello('John'); // Hello John
echo sayHello(); // Hello World

// Using argument spread
function addAll(...$numbers) 
{
    $total = 0;

    foreach($numbers as $number) 
    {
        $total += $number;
    }

    return $total;
}

echo '<br>';
echo addAll(1,2,3,4,5, 6,7,8,9);
