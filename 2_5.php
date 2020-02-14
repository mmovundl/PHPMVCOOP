<?php

    class User{
        private $name;
        private $age;

        public function __construct($name,$age){

            $this->name = $name;
            $this->age = $age;
        }

       public function __get($property)
        {
            if(property_exists($this,$property))
            {
                return $this->$property;
            }
        }

       public function __set($property, $value)
        {
            if(property_exists($this, $property))
                {
                    $this->$property = $value;
                }
                return $this;
        }
         //setters
         /*public function setName($name)
         {
             $this->name = $name;
         }
         
        public function setAge($age)
        {
            $this->age = $age;
        }
        //getters
        public function getName()
        {
            return $this->name;
        }

        public function getAge()
        {
            return $this->age;
        }*/
    } 
    echo "<br>";
    
    $user1 = new User('Madimetja',24);
    echo $user1->__get('name');
    echo "<br>";
    echo $user1->__get('age');
    echo '<br>';
    $user1->__set('age',34);


?>