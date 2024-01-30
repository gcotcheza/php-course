<?php

class User
{
  // Properties
  public $name;
  public $email;
  private $status = 'active';

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  // Methods
  public function login()
  {
    echo $this->name . ' logged in <br>';
  }

  // Getter
  public function getStatus()
  {
    return $this->status;
  }

  // Setter
  public function seTStatus($status)
  {
    return $this->status = $status;
  }
}

// Instantiate a new object
$user1 = new User('John Doe', 'john@gmail.com');

$user1->login(); // John Doe logged in

$user2 = new User('Jane Doe', 'jane@gmail.com');

$user2->login(); // Jane Doe logged in

echo $user2->getStatus(); // active

$user2->seTStatus('inactive');
echo $user2->getStatus(); // inactive

// var_dump($user2);
