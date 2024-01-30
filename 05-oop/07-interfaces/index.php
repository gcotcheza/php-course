<?php

// By implementing a interface, all methods inside interface must be implemented. 
interface ContentInterface
{
    public function display();
    public function edit();
}

class Article implements ContentInterface
{
    private $title;
    private $content;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function display() 
    {
      echo "<h2>{$this->title}</h2>";
      echo "<h2>{$this->content}</h2>";
    }

    public function edit()
    {
        echo "Editing the article '{$this->title}'";
    }
}

class Video implements ContentInterface
{
    private $title;
    private $url;

    public function __construct($title, $url)
    {
        $this->title = $title;
        $this->url = $url;
    }

    public function display() 
    {
      echo "<h2>{$this->title}</h2>";
      echo "<iframe src='{$this->url}'></iframe>";
    }

    public function edit()
    {
        echo "Editing this video '{$this->title}'";
    }
}

// Instantiate Article and Video
$article = new Article('Introduction to PHP', 'PHP is a versatile scripting language');
$video = new Video('PHP voor Beginners', 'https://www.youtube.com/watch?v=BUCiSSyIGGU&ab_channel=TraversyMedia');
// var_dump($article);
// var_dump($video);
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
      <?= $article->display() ?>
    </div>
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <?= $video->display() ?>
    </div>
  </div>
</body>

</html>