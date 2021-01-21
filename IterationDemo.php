<pre>
    <?php

    class Person {

        public $name = "Mahtab";
        public $age = "21";
        public $skill = "Bloging";
        private $email = "mmm@gmail.com";
        protected $password = "12345";

        function iteratorInner() {
            foreach ($this as $key => $value) {
                echo "$key=> $value"; 
            }
        }

    }

    $c = new Person();
    $c->iteratorInner();
    ?>
</pre>