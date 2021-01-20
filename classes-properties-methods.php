<?php
class User {
    //properties
    public $name;

    //methods
    public function sayHello(){
        return $this->name . ' says hello';
    }
}

//new user object from user class
$user1 = new User();
$user1->name = 'name1';
echo $user1->name;
echo '<br>';
echo $user1->sayHello();

echo '<hr>';

$user2 = new User();
$user2->name = 'name2';
echo $user2->name;
echo '<br>';
echo $user2->sayHello();