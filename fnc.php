<?php
class userdetails{/*class: keyword that informs the program to create a class, fnc- function
             Only one clas should be created*/
    var $fname;
    public $username;
    var $yob;
    protected $email_address;
    private $password;

     //creating a method
     public function computer_user($fname){
        return $fname;
    }
    public function user_age($name, $yob){
        $age=date('Y')- $yob;
        return $name . " is " .$age;
    }

}



