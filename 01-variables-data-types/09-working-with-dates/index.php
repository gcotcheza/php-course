<?php
    $title = 'Dates and Times';
    $heading = 'PHP from Scratch';
    $string = 'Hello World';
    $output = null;
    /*
      'Y' - The Year
      'm' - month
      'd' - day
      'D' - Day of the week short name
      'l - Full day of week name
      'h' - hour
      'i' - minute
      's' - seconds
      'a' - AM/PM
      */

      // Get year
      $output = date('Y'); // 2024

      // Get year with timestamp
      $output = date('Y', 936345600); // 1999

      // Get timestamp from strotime
      $output = date('Y', strtotime('1999-09-01'));
      
      // Get month
      $output = date('m'); // 11

      // Get day
      $output = date('D'); // Fri
      $output = date('l'); // Friday

      // Get year, month and day
      $output = date('Y-m-d'); 
      $output = date('m-d-Y');

      // Get hour, minute and seconds
      $output = date('h');
      $output = date('m');
      $output = date('s'); 
      $output = date('a'); // AM/PM
      $output = date('Y-m-d h:i:s a');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
      <?= $title ?>
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
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <!-- Output -->
            <p class="text-xl"><?php echo $output; ?></p>
        </div>
    </div>
</body>

</html>