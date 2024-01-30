<?php
 /*
   declare(strict_types = 1); is a directive in PHP that enforces strict type checking for function and method arguments and return values within a specific PHP file or code block. 
    When you enable strict type checking, PHP ensures that the data types of function arguments and return values match exactly with the declared types. 
  */ 

declare(strict_types = 1);


function getSum(int $a, int $b): int
{
    return $a + $b;
}
echo getSum(2, 4);


function greeting(string $name): string
{
    return 'Hello' . $name;
}

echo greeting('John');


function greet(string $name): void
{
    echo 'Hello' . $name;
}
