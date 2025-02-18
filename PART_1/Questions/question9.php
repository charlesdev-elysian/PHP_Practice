<?php
// Question Output
echo "Question 9: What are the keys in the \$person array?<br><br>";

// Define the $person array
$person = [
    'name' => 'Charles Jazon Dorero',
    'age' => 23,
    'email' => 'charlesjazondorero@gmail.com'
];

// Use array_keys() to get the keys of the $person array
$keys = array_keys($person);

// Output the keys
echo "The keys in the \$person array are: ";
print_r($keys);
?>
