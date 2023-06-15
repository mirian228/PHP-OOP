<?php

class Person {
    private string $name;
    private string $eyeColor;
    private int $age;
    
    public static int $drinkingAge = 21;


    public function __construct(string $name,string $eyeColor, int $age)
    {
        $this->name=$name;
        $this->eyeColor=$eyeColor;
        $this->age=$age;
    }

    public function __destruct()
    {
        
    }


    // Methods

    public function setName(string $name) {
        $this->name = $name;
    } 

    public function getName() {
        return $this->name;
    }
    public function setEyeColor(string $eyeColor) {
        $this->eyeColor = $eyeColor;
    } 

    public function getEyeColor() {
        return $this->eyeColor;
    }
    public function setAge(string $age) {
        $this->age = $age;
    } 

    public function getAge() {
        return $this->age;
    }



}

?>