
<?php
$number0 = 0;
$number1 = 5;
$number2 = 10;
$number3 = '20';
$fruit = 'apple';
$bool1 = true;
$bool2 = false;

// Implicit Conversion
$result = $number1 + $number2; // int
$result = $number1 + $number3; // int (string to int)
$result = $number3 + $number3; // int (string to int)
$result = $number1 . $number2; // int (int to string)
// $result = $fruit + $number2; // error
$result = $number1 + $bool1; // 6 // true will be converted to 1 (bool to int)
$result = $number1 + $bool2; // 5 // false will be converted to 0 (bool to int)
$result = $number1 + null; // int (null to int) 

 // Explicit Conversion
$result = (string) $number1;
$result = (int) $number3;
$result = (bool) $number1;
$result = (bool) $number0; // an

var_dump($result);