<?php
    $output = null;
    $ids = [10, 22, 15, 45, 67];
    $users = ['user1', 'user0', 'user3', 'user2', 'user4'];

    // count
    $output = count($ids);

    // sort
    $output = sort($users); // Sort the value from ascending
    $output = sort($users); // Sort the value alphabetically

    // rsort 
    $output = rsort($ids); // Reverse sort
    $output = rsort($users);

    // array_push
    array_push($ids, 100); // Add 100 at the end of the array.
    array_push($users, 'user10');

    // array_pop
    array_pop($ids); // Removes the last item in the array.
    array_pop($users); // Removes the last item in the array.

    // array_shift
    array_shift($ids); // Removes the first element in the array.
    array_shift($users);
    
    // array_unshift
    array_unshift($ids, 100); // Prepend an item in the array.
    array_unshift($users, 'user5');

    // array_slice(array, offse, length)
    $ids2 = array_slice($ids, 2, 3); // Creates a new array containing the 3(length) items from index 2.
    // var_dump($ids2);

    // array_splice(array, offset, lenght, replacement)
    array_splice($ids, 1, 1, 'New ID'); // Removes the element at index 1 and replace it with 'New ID';
    array_splice($users, 1, 1, 'New User'); // Removes and replaced the element at index 1 with 'New User';

    // array_sum
    $output = 'Sum of IDs: ' . array_sum($ids); // Summation of the values of the array. 

    // array_search(value, array): index
    $output = 'User 2 is at index: ' . array_search('user2', $users); // Returns the indexof the value.

    // in_array(value, array): bool
    $output = 'User 1 exist: ' . in_array('user1', $users); // Returns true or 1 if the item 'user1' exist in  $users array

    // explode(separator, string): array
    $tags = 'tech, code, programming';
    $tagArray = explode(',', $tags);

    // implode(separator, array) // Output a string with comma separated list of items. 
    $output = implode(', ', $users); // user5, New User, user2, user1, user0

    // var_dump($tagArray);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <!-- Output -->
            <p class="text-xl"><?= $output ?></p>
            </p>
        </div>
    </div>
</body>
</html>