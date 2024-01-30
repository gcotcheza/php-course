<?php
    $title = 'String Functions';
    $heading = 'Welcome to the course';
    $string = 'Hello World';
    $output = null;

    // strlen()
    $output = strlen($string); // 11

    // str_word_count()
    $output = str_word_count($string); // 2

    // strpos
    $output = strpos($string, 'World'); // 6 // The index where World starts

    // Get specific char by index
    $output = $string[4]; // o 

    // str_replace
    $output = str_replace('World', 'Universe', $string); // Hello Universe

   // strtolower
   $output = strtolower($string);

    // strtoupper
   $output = strtoupper($string);

    // ucwords
   $output = ucwords($string); // Hello World

    // trim()
    $output = trim('         Hello       World     ');
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

        </div>
    </div>
</body>
</html>