<?php
// Question Output
echo "Question 13: What is the output of echo \$people[0]['first_name'];?<br><br>";

// Define the $people array as an array of associative arrays
$people = [
    [
        'first_name' => 'Mark Oseas',
        'last_name' => 'Erray',
        'age' => 30
    ],
    [
        'first_name' => 'Maria Rena',
        'last_name' => 'Bandiala',
        'age' => 25
    ]
];

// Output the first name of the first person in the array
echo "The first name of the first person is: " . $people[0]['first_name'];
?>
