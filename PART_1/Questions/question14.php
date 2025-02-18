<?php
// Question Output
echo "Question 14: What is the output of echo \$people[2]['email'];?<br><br>";

// Define the $people array with two elements
$people = [
    [
        'name' => 'Baham Gullos',
        'age' => 30,
        'email' => 'baham90@yahoo.com'
    ],
    [
        'name' => 'Kemjay Dolor',
        'age' => 25,
        'email' => 'baham,example.com'
    ]
];

// Check if the index exists before accessing
if (isset($people[2]['email'])) {
    echo "The email of the third person is: " . $people[2]['email'];
} else {
    echo "There is no third person in the array.";
}
?>
