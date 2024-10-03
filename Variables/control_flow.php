<?php
class Person {
    private $age;

    public function __construct($age) {
        $this->age = $age;
    }

    public function checkAge() {
        if ($this->age >= 18) {
            return "You are an adult";
        } else {
            return "You are a minor";
        }
    }
}

$person = new Person(20);

echo $person->checkAge();
?>
