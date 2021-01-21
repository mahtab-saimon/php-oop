<?php
    
    class UserData {

        public $user;
        public $userId;
                function __construct($user, $userId) {
                    $this->user=$user;
                    $this->userId=$userId;
                    echo "UserName is = $user and user id is = $userId";
        
    }
                function __destruct() {
                    unset($this->user);
                    unset($this->userId);
                    
        
    }

}

$us = new UserData("mahtab", "1484");


?>

