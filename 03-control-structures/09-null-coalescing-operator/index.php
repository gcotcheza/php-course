<?php
$favoriteColor = 'red';
// $secondFavoriteColor = 'green';

// Using ternary operator 
$color = isset($favoriteColor) ? $favoriteColor : 'blue';

// Null coalescing operator
$color = $favoriteColor ?? 'blue';

// Using ternary operator 
$color = isset($favoriteColor) ? $favoriteColor : (isset($secondFavoriteColor) ? $secondFavoriteColor : 'blue');

// Null coalescing operator
$color = $favoriteColor ?? $secondFavoriteColor ?? 'blue';

echo $color;