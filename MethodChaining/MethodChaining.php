<?php
class MethodChaining {

    function Framework() {
        echo "cakePhp is framework.";
        return $this;
    }

    function cms() {
        echo "Wordpress is framework.";
                return $this;

    }

}