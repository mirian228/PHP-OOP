<?php

class Person {
    private $name;
    private $eyeColor;
    private $age;
    
    public function __construct($name, $eyeColor, $age)
    {
        $this->name=$name;
        $this->eyeColor=$eyeColor;
        $this->age=$age;
    }

    public function __destruct()
    {
        
    }


    // Methods

    public function setName($name) {
        $this->name = $name;
    } 

    public function getName() {
        return $this->name;
    }
    public function setEyeColor($eyeColor) {
        $this->eyeColor = $eyeColor;
    } 

    public function getEyeColor() {
        return $this->eyeColor;
    }
    public function setAge($age) {
        $this->age = $age;
    } 

    public function getAge() {
        return $this->age;
    }



}

?>