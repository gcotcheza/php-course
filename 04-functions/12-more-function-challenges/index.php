<?php
declare(strict_types=1);
/*
  Challenge 1: Fahrenheit to Celsius
  Create a function called `fahrenheitToCelsius` that takes a Fahrenheit temperature as an argument. Return the temperature converted to Celsius.

  The formula to convert Fahrenheit to Celsius is: Celsius = (Fahrenheit - 32) * 5/9
*/
// Easy solution
// Using normal function
function fahrenheitToCelsius($tempInFahrenheit)
{

    $tempInCelcius = ($tempInFahrenheit - 32) * 5 / 9;

    return "{$tempInFahrenheit}F = {$tempInCelcius}C";
}

echo fahrenheitToCelsius(68);
echo '<br>';

// Using arrow function
$tempInFahrenheit = 68;
$fahrenheitToCelsius = fn ($tempInFahrenheit) => ($tempInFahrenheit - 32) * 5 / 9;
echo $tempInFahrenheit . 'F' . ' = ' .  $fahrenheitToCelsius($tempInFahrenheit) . 'C';
echo '<br>';

// Creating a constant variable to hold the base temp of 32. 
const BASE_TEMP = 32;
$tempInFahrenheit = 68;
$fahrenheitToCelsius = fn ($tempInFahrenheit) => ($tempInFahrenheit - BASE_TEMP) * 5 / 9;
echo $tempInFahrenheit . 'F' . ' = ' .  $fahrenheitToCelsius($tempInFahrenheit) . 'C';
echo '<br>';

// Creating a global variable to hold the base temp of 32 using arrow function.
$baseTemp = 32;
$tempInFahrenheit = 68;
$fahrenheitToCelsius = fn ($tempInFahrenheit, $baseTemp) => ($tempInFahrenheit - $baseTemp) * 5 / 9;
echo $tempInFahrenheit . 'F' . ' = ' .  $fahrenheitToCelsius($tempInFahrenheit, $baseTemp) . 'C';
echo '<br>';

// Creating a global variable to hold the base temp of 32 using normal function 
$baseTemp = 32;
$tempInFahrenheit = 68;
$fahrenheitToCelsius = function ($tempInFahrenheit) use ($baseTemp) {
    return ($tempInFahrenheit - $baseTemp) * 5 / 9;
};
echo $tempInFahrenheit . 'F' . ' = ' .  $fahrenheitToCelsius($tempInFahrenheit) . 'C';
echo '<br><br>';


/*
  Challenge 2: Print names in uppercase
  Create a function called `printNamesToUpperCase` that takes an array of names as an argument. The function should loop through the array and print each name to the screen in uppercase letters.
*/
// Normal function
function printNameToUpperCase($names)
{
    foreach ($names as $name) {
        $nameToUpper = strtoupper($name);
        echo $nameToUpper . '<br>';
    }
}
$names = ['Alice', 'Bob', 'Charlie', 'David'];
printNameToUpperCase($names);
echo '<br> <br>';

// Named function
$nameToUpper = function (...$names) {
    $upperCasedNames = [];
    foreach ($names as $name) {
        array_push($upperCasedNames, strtoupper($name));
    }
    return $upperCasedNames;
};

$names = ['joy', 'mike', 'jack'];
echo implode(', ', $nameToUpper(...$names));
echo '<br> <br>';

// Using array_map
$upperCasedNames = array_map(function ($name) {
    return strtoupper($name);
}, $names);

echo implode('<br>', $upperCasedNames);
echo '<br> <br>';

/*
  Challenge 3: Find the longest word
  1. Create a function called `findLongestWord` that takes a sentence as an argument.
  2. The function should return the longest word in the sentence.
  3. The output should look like this:
*/


/**
 * Finding the longest word.
 */
function findLongestWord(string $string): string
{
    $string = trim($string);

    if (!empty($string)) {
        $words = explode(' ', $string);
        $longestWord = '';
        foreach ($words as $word) {
            $word = trim($word);
            if (strlen($word) > strlen($longestWord)) {
                $longestWord = $word;
            }
        }

        return $longestWord;
    };

    return 'Please enter a valid string or sentence';
}

echo findLongestWord('I am looking for the longest word in this sentence');


/*
  The & before the parameter in foo() function inidcates that it takes a reference/pointer to a variable, 
  modifies it's value, and returns the value, also updating the original variable's value.  
 */
function foo(&$arg)
{
  return ++$arg;
}

$arg = 5;
var_dump(foo($arg)); // 6
var_dump($arg); // 6

/*
The parameter passed to the bar() function without the & is copied, modified inside the function, 
and returned to the caller without altering the original variable's value.
 */
function bar($arg)
{
  return ++$arg;
}

$arg = 5;
var_dump(bar($arg)); // 6
var_dump($arg); // 5