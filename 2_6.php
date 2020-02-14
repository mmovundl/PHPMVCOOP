<?php 

//inheritence
    class User{
        protected $name;
        protected $age;

        public function __construct($name,$age)
        {
            $this->age = $age;
            $this->name = $name;
        }
    }

    class Customer extends User{

        private $balance;

        public function __construct($name,$age,$balance)
        {
            parent::__construct($name,$age);
            $this->balance = $balance;
        }

        public function __set($property,$value)
        {
            if(property_exists($this,$property))
            {
                $this->property = $value;
            }
            return $this;
        }

        public function __get($property){
            if(property_exists($this,$property))
            {
                return $this->$property;
            }
        }
        
        public function pay($amount)
        {
            return $this->name . ' Paid $' . $amount;
        }

        public function getBalance($amount)
        {
            $newBalance = $this->balance - $amount;
            $this->balance = $newBalance;
            return $newBalance;
            
        }
    }

    $user = new Customer('madi',24,1000);
    echo $user->__get('balance');
    echo '<br>';
    $amount = 123;
    echo $user->pay($amount);
    echo '<br>';
    echo $user->getBalance($amount);
    echo '<br>';
    echo $user->__get('balance');
?>