<?php

class Article 
{
    public $title;
    public $content;
    private $published = false;

    public function __construc($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function publish()
    {
        return $this->published = true;
    }

    public function isPublished()
    {
        return $this->published;
    }
}

$article1 = new Article('ChatGPT Prompt', 'This is the content');
echo var_dump($article1->publish()); // true
echo var_dump($article1->isPublished()); // true

$article2 = new Article('AI Summit', 'This is the content of this article');
 echo var_dump($article2->isPublished()); // false