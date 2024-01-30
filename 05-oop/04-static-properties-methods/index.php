<?php

class MathUtility 
{
    public static $pi = 3.14;
    
    public static function add(...$numbers)
    {
        return array_sum($numbers);
    }
}

echo MathUtility::$pi; // 3.14
echo MathUtility::add(1, 2, 3, 4, 5, 6, 7); // 28
