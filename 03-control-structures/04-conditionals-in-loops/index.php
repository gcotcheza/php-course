<?php 

$number = 1;
while ($number <= 10){
    if($number % 2 == 0) {
        echo $number . ' is even <br>';
    } else {
        echo $number . ' is odd <br>';
    }
    $number++;
}
