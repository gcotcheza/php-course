<?php

class StringUtility 
{
    public static function shout($string)
    {
        return strtoupper($string) . '!'; 
    }

    public static function whisper($string)
    {
        return strtolower($string) . '.';
    }

    public static function repeat($string, $times = 2)
    {
        return str_repeat($string, $times);
    }
}

echo StringUtility::shout('ghie'); // GHIE!
echo '<br>';
echo StringUtility::whisper('Ghie'); // ghie.
echo '<br>';
echo StringUtility::repeat('Ghie', 5); // GhieGhieGhieGhieGhie
echo '<br>';
echo StringUtility::repeat('Ghie'); // GhieGhie