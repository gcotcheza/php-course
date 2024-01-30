<?php
    $title = 'Associative Arrays';
    $heading = 'PHP from Scratch';
    $string = 'Hello World';
    $output = null;

    $user = [
        'name' => 'John',
        'email' => 'john@gmail.com',
        'password' => '12345678',
        'hobbies' => ['Tennis', 'Video games'],
    ];

    $output = $user['name'];
    $output = $user['email'];

    // Accessing array key that doesn't exist.
    // $output = $user['age']; // undefined key array

    // Accessing nested array.
    $output = $user['hobbies'][0]; // Output: Tennis

    // Append a new item in the array.
    $output = $user['address'] = '123 Main St.';

    // Remove the last item in the array.
    unset($user['address']);

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
                    <?php print_r($user); ?>
                </pre>
            </p>
        </div>
    </div>
</body>
</html>