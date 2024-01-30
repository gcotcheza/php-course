<?php

/*
  Challenge 1: Create a multiplication table using a nested `for` loop. The table should look like this:

1 x 1 = 1
1 x 2 = 2
1 x 3 = 3
1 x 4 = 4
1 x 5 = 5
1 x 6 = 6
1 x 7 = 7
1 x 8 = 8
1 x 9 = 9
1 x 10 = 10
2 x 1 = 2
2 x 2 = 4
2 x 3 = 6
2 x 4 = 8
... 
10 x 10 = 100
*/
echo '<h3>Multiplication Table</h3>';

for($i = 1; $i <= 10; $i++) {
  for($j = 1; $j <= 10; $j++) {
    echo $i . ' x ' . $j . ' = ' . $i * $j . '<br />';
  }
} 

/*
  Challenge 2: Get the sum of the numbers in an array by using a foreach loop. For bonus points, also use a for loop.
*/

echo '<h3>Array Sum</h3>';

$numbers = [2, 2, 3, 4, 5];


// foreach loop
$sum = 0;
foreach($numbers as $number) {
  $sum  += $number;
}
echo 'Total sum calculating with foreach loop is: ' . $sum . '<br />';

// for loop
$total = 0;
for($i = 0; $i < count($numbers); $i++) {
  $total += $numbers[$i];
}
echo 'Total number calculating with for loop is: ' . $total;


/*
  Challenge 3: Calculate the average students grade from an array of students. Each student has their own array with the key 'grades'. 

  1. Create an array of students with their names and grades (0 - 100)
	2. Iterate over the students array with a foreach loop
	3. Calculate the average grade for each student
*/

echo '<h3>Average Grade</h3>';

$students = [
  [
    'name' => 'jen',
    'grades' => [9, 10, 7, 8, 7,8],
  ],
    [
    'name' => 'jimmy',
    'grades' => [6, 7, 6, 8, 9, 7],
  ],
    [
    'name' => 'josh',
    'grades' => [9, 10, 7, 8, 7,8],
  ],
];

foreach($students as $student) {
  $name = ucfirst($student['name']);
  $grade = $student['grades'];
  $averageGrade  = number_format(array_sum($grade) / count($grade), 1);
  echo "{$name}: Average grade = {$averageGrade} <br>";
}
