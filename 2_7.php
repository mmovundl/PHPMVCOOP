<?php
    //static methods and variables
    class User{
        public $name;
        public $age;
        public static $minPassLength = 7;

        public static function validatePass($password)
        {
            if(strlen($password) >= self::$minPassLength)
                return true;
            else
                return false;
        }
    }

    $user = new User();
    $password =  "hello3455455";
    if(User::validatePass($password))
        echo "Valid Pass";
    else
        echo "Incalid Pass";

?>