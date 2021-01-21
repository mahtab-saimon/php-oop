<?php

    class UserData {
        public $user;
        public $userId;
        
        function __construct($user, $userId) {
            $this->user=$user;
            $this->userId=$userId;
           
            
        
    }
    function display() {
         echo "The user name is $this->user <br> The user id is $this->userId";
    }

}
class Admin extends UserData{

    public $lavel="mmm";
      function display() {
         echo "The user name is $this->user <br> The user id is $this->userId <br> And user level is "."$this->lavel";
    }
    
    

}

$user="mahtab";
$userId=1484;
$u1 = new UserData($user, $userId);
$u = new Admin($user, $userId);
$u->display();

?>