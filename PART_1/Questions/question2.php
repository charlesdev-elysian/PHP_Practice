<?php
// Question Output
echo "Question 2: What is the output of var_dump(\$person);?<br><br>";

// Define the $person array
$person = [
    'name' => 'Charles Jazon Dorero',
    'age' => 23,
    'email' => 'charlesjazondorero@gmail.com'
];

// Use var_dump to print the array with type information
echo "The output of var_dump(\$person):<br>";
var_dump($person);
?>
