<?php
require_once "animal.php";

class ape extends animal {
    public function __construct($name)
    {
        parent::__construct($name);
        $this->legs = 2;
    }

    public function yell() {
        echo "Auooo";
    }
}