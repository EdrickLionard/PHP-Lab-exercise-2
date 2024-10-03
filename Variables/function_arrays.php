<?php

// Define the greet function
function greet($name) {
    return "Hello " . $name . "!";
}

// Create an array of student names
$students = ["Chaiden", "Leo", "Alicia", "Aurel", "Ivone"];

// Loop through each student and greet them
foreach ($students as $student) {
    echo greet($student) . "<br>";
}
?>
