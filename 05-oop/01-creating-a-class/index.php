<?php

class User {

    // Properties
    public $name;
    public $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    // Methods
    public function login() {
        echo $this->name . ' is logged in'; 
    }
}

// Instantiate a new object the 'manual' way.
    // $user1 = new User(); 
    // $user1->name = 'John Doe';
    // $user1->email = 'john@gmail.com';
    // $user1->login();
    // var_dump($user1);

    // $user2 = new User();
    // $user1->name = 'Jane Doe';
    // $user1->email = 'john@gmail.com';
    // var_dump($user2);

// Instantiate a new object using the construct
    $user3 = new User('John Doe', 'jon@gmail.com');
    $user3->login();
    echo '<br>';

    $user4 = new User('Jane Doe', 'jane@gmail.com');
    $user4->login();