<?php

/*
  Challenge 1: Sum of an array
  
  1. Create an array of numbers 
  2. Get the sum of all of the numbers combined and put into a variable.
  4. Get the amount of numbers in the array and put into a variable.
  5. Print out 'The sum of the {amount} numbers is: {sum} '. For example, if the array is [1, 2, 3, 4, 5], the output should be 'The sum of the 5 numbers is: 15'. 
*/
echo '<h3>Sum Of An Array</h3>';
  $numbers = [19, 10, 20, 56];
  $output = 'The sum of the '. count($numbers) . ' numbers is: ' . array_sum($numbers);


/*
  Challenge 2: Colors array

  1. Reverse the `$colors` array.
  2. Add 'purple' and 'orange' to the end of the array.
  3. Replace the second color with 'pink'
  4. Remove the last element of the array.

You should end up with the following array: ['yellow', 'pink', 'blue', 'red', 'purple']
*/


echo '<h3>Colors Array</h3>';

$colors = ['red', 'blue', 'green', 'yellow'];
$colors = array_reverse($colors);
array_push($colors, 'purple', 'orange');
array_splice($colors, 1, 0, 'pink');
array_pop($colors);

/*
  Challenge 3: Job listings array

  1. Create a multi-dimensional array of associative arrays of 3 job listings with the fields id, job_title, company, contact_email, and contact_phone. Also add an array field for skills. The skills array should be an array of strings with each skill a person has. For example, 'PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS', etc.
  2. Create a new listing using the `array_push()` function. The new listing should have the same fields as the others.
  3. Print out the job_title of the second job listing in the array.
  4. Print out the first skill of the third job listing in the array.
*/

echo '<h3>Job Listings</h3>';
 $jobs = [
    [
      'id' => 01,
      'job_title' => 'Full stack developer', 
      'company' => 'MSML',
      'contact_email' => 'info@msml.nl', 
      'contact_phone' => '0612345678',
      'skills' =>  ['PHP', 
          'MySQL', 
          'Javascript', 
          'Laravel', 
          'CSS'
      ],
    ],
      [
      'id' => 02,
      'job_title' => 'Product Owner', 
      'company' => 'MSML',
      'contact_email' => 'info@msml.nl', 
      'contact_phone' => '0612345678',
      'skills' =>  ['PHP', 
          'Project Management', 
          'SCRUM', 
          'Agile', 
      ],
    ],
      [
      'id' => 01,
      'job_title' => 'Marketing', 
      'company' => 'MSML',
      'contact_email' => 'info@msml.nl', 
      'contact_phone' => '0612345678',
      'skills' =>  [
          'SEO', 
          'SEM', 
          'Communication Skills', 
          'Digital Marketing', 
      ],
    ],
  ];

  $newJobEntry = [
    'id' => 07,
    'job_title' => 'DevOps Engineer',
    'company' => 'MSML',
    'contact_email' => 'info@msml.nl',
    'contact_phone' => '0612345678',
    'skills' => [
      'kubernetes', 
      'docker', 
      'linux', 
      'cloud computing'
    ],
  ];

  array_push($jobs, $newJobEntry);

  $output = $jobs[1]['job_title'];
  $output = $jobs[2]['skills'][0];