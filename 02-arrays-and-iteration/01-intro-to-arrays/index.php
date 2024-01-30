<?php
    $title = 'Arrays';
    $heading = 'PHP from Scratch';
    $string = 'Hello World';
    $output = null;

    $names = array('John', 'Jack', 'Jill');
    $numbers = [1, 2, 3, 4, 5, 6];

    function inspect($value)
    {
        echo '<pre>';
        var_dump($value);
        echo '</pre>';
    }

    // print_r($names);
    // inspect($names);
    // echo $names[2];
    $numbers[6] = 100;

    // Add element to array;
    $numbers[6] = 100;
    $numbers[] = 101; // If the last index is not know, just use empty brackets, it will add the item at the end of the list.

    // Replace an element in an array.
    $numbers[3] = 300;

    // Delete an element from the array.
    unset($numbers[3]); // Deletes the array item including the index.

    $numbers = array_values($numbers); // Resets the indexing of the array. Re-index

    // inspect($numbers);
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>
    <?= $title ?>
  </title>
</head>
<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">
        <?= $title ?>
      </h1>
    </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-4">
            <?= $heading ?>
        </h2>
          <p>
            <?= $output ?>
          </p>
            <h2 class="tex-xl font-semibold my-4">ID's Array:</h2>
            <p>
                <pre>
                    <?php print_r($ids); ?>
                </pre>
            </p>
            <h2 class="tex-xl font-semibold my-4">User's Array:</h2>
            <p>
                <pre>
                    <?php print_r($users); ?>
                </pre>
            </p>
            <h2 class="tex-xl font-semibold my-4"></h2>
            <p>
                <pre>
                    <?php print_r($users); ?>
                </pre>
            </p>
        </div>
    </div>
</body>
</html>