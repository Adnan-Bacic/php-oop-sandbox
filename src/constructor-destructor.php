<?php
class User{
    public $name;
    public $age;

    //runs when an object is created
    public function __construct($name, $age){
        //echo 'constructor';
        echo 'class:' . __CLASS__  . ' created';
        echo '<br>';
        $this->name = $name;
        $this->age = $age;
    }

    public function sayHello(){
        return $this->name . ' says hello';
    }

    //called when no other references to a certain object
    //used for cleanup, closing connections etc
    public function __destruct(){
        echo '<br>';
        echo 'destructor';
    }
}

$user1 = new User('name1', 1);
echo $user1->name . ' is ' . $user1->age . ' years old';
echo '<br>';
echo $user1->sayHello();

echo '<hr>';

$user2 = new User('name2', 2);
echo $user2->name . ' is ' . $user2->age . ' years old';
echo '<br>';
echo $user2->sayHello();