<?php
 echo "its been a while";
  //defininf a class
  class Users
  {
      //properties
        private $name;
       

    
        //getters and setters
    public function setUser($name)
    {
        $this->name = $name;
    }

    public function getUser()
    {
        return $this->name;
    }
    
      //methods
      public function sayHello(){
            return "Hello ". $this->name;
      }
  }

  //user1
  $user1 = new Users();
  echo "<br>";
  $user1->setUser("Madimetja");
  echo $user1->getUser();
  $greetings = $user1->sayHello();
  echo "<br>";
  echo $greetings;

  //user2
  echo "<br>";
  $user2 = new Users();
  echo $user2->setUser("Francis");
  echo $user2->getUser();

  $greetings = $user2->sayHello();
  echo "<br>";
  echo $greetings;
?>