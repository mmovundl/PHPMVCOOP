<?php
    class User
    {
        public $name;
        public $age;

        //constructor with parameters
        //runs when an object is created
        public function __construct($name,$age){
            echo __CLASS__ . " class instantiated";

            $this->name = $name;
            $this->age= $age;
        }

        public function sayHello(){
            return $this->name . " is your name";
        }

        //Destructor. called when all the object have been used
        //mostly used for things such as database clean ups and closing 
        public function __destruct()
        {
            echo "<br>--Running Destructs--<br>";
        }
    }

    //instatiating the object
    $user1 =  new User("MADI",26);
    //$user1->name = "Francoe";
    echo "<br>";
    echo $user1->sayHello();

?>