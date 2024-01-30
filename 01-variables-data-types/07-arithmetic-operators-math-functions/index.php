<?php
  $title = 'Arithmetic Operators';
  $heading = 'Welcome to the course';
  $output = null;
/*
| Arithmetic Operators
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/
  $num1 = 20;
  $num2 = 10;
  $output = "$num1 + $num2 = " . $num1 + $num2;
  $output = "$num1 - $num2 = " . $num1 - $num2;
  $output = "$num1 * $num2 = " . $num1 * $num2;
  $output = "$num1 / $num2 = " . $num1 / $num2;
  $output = "$num1 % $num2 = " . $num1 % $num2;

  // Assignment Operator
  $num3 = 10;
  // $num3 = $num3 + 20;
  // $num3 += 20;
  // $num3 -= 20;
  $num3 /= 20;
  $output = $num3;

  // Built-in PHP functions
  // rand()
  $output = rand();
  $output = getrandmax();
  $output = rand(1, 10);

  // round()
  $output = round(4.2);
  $output = round(4.9);

  // ceil()
  $output = ceil(4.2); 
  $output = ceil(4.9);

  // floor()
  $output = floor(4.2);
  $output = floor(4.9);

  // sqrt()
  $output = sqrt(64);

  // pi()
  $output = pi();

  // abs()
  $output = abs(-4.6);

  // max()
  $output = max(1, 2, 4, 6, 10); // 10
  $output = max([1, 25, 4, 6, 10]); // 25

  // min()
  $output = min(1, 3, 4, 6, 10); // 1
  $output = min([-1, 3, 4, 6, 10]); // -1

  // number_format()
  $output = number_format(1234568694.239846, 2, '.', ',');
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