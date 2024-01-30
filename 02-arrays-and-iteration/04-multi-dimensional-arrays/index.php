<?php
    $title = 'Multi-Dimensional Arrays';
    $heading = 'PHP from Scratch';
    $string = 'Hello World';
    $output = null;

    $fruits = [
        ['Apple', 'red'],
        ['Orange', 'orange'],
        ['Banana', 'yellow']
    ];

    $output = $fruits[0][0];
    $fruits[] = ['Grape', 'purple'];

    $users = [
        ['name' => 'John', 'email' => 'john@gamil.com', 'password' => '12345678'],
        ['name' => 'Jack', 'email' => 'jack@gamil.com', 'password' => '12345678'],
        ['name' => 'Jill', 'email' => 'jill@gamil.com', 'password' => '12345678'],
        ['name' => 'Jenny', 'email' => 'jenny@gamil.com', 'password' => '12345678'],
    ];

    // Access the email address of Jack
    $output = $users[1]['email'];

    // Add user
    $users[] = ['name' => 'mike', 'email' => 'mike@gamil.com', 'password' => '12345678'];
    
    // Prepend an item in an array
    array_push($users,  ['name' => 'Johnny', 'email' => 'johnny@gamil.com', 'password' => '12345678']);

    // Remove the last item in the array
    array_pop($users);

    // Remove the first item in the array.
    array_shift($users);

    // Remove specific item in the array.
    unset($users[0]);

    // count 
    $output = count($users);
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
            <h2 class="tex-xl font-semibold my-4">User's Array:</h2>
            <p>
                <pre>
                    <?php // print_r($users); ?>
                    <?php print_r($users); ?>
                </pre>
            </p>
        </div>
    </div>
</body>
</html>