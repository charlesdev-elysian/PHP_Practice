# PHP_Practice

# PHP Loop Examples

## do_while_loop.php
```php
<?php
$matrix = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12]
];

$row = 0;
do {
    $col = 0;
    do {
        if ($matrix[$row][$col] % 2 == 0) {
            echo $matrix[$row][$col] . " ";
        }
        $col++;
    } while ($col < count($matrix[$row]));

    $row++;
} while ($row < count($matrix));
?>
```

## foreach_loop.php
```php
<?php
$matrix = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12]
];

foreach ($matrix as $row) {
    foreach ($row as $element) {
        if ($element % 2 == 0) {
            echo $element . " ";
        }
    }
}
?>
```

## while_loop.php
```php
<?php
$matrix = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12]
];

$row = 0;
while ($row < count($matrix)) {
    $col = 0;
    while ($col < count($matrix[$row])) {
        if ($matrix[$row][$col] % 2 == 0) {
            echo $matrix[$row][$col] . " ";
        }
        $col++;
    }
    $row++;
}
?>
```

## for_loop.php
```php
<?php
$fruits = array("Apple", "Banana", "Cherry", "Date", "Elderberry");
echo "<ol>";

for ($i = 0; $i < count($fruits); $i++) {
    echo "<li>" . $fruits[$i] . "</li>";
}

echo "</ol>";
?>
```

## while_loop.php
```php
<?php
$fruits = array("Mango", "Atis", "Guava", "Strawberry", "Orange");

$i = 0;

echo "<ol>";
while ($i < count($fruits)) {
    echo "<li>" . $fruits[$i] . "</li>";
    $i++;
}

echo "</ol>";
?>
```

## Practice_01.php
```php
<?php
/**
 * Calculates the area of a rectangle.
 * 
 * @param float $length Length of the rectangle
 * @param float $width Width of the rectangle
 * @return float The area of the rectangle
 */
function calculateArea(float $length, float $width): float {
    return $length * $width;
}

/**
 * Reverses a given string.
 * 
 * @param string $input The string to reverse
 * @return string The reversed string
 */
function reverseString(string $input): string {
    return strrev($input);
}

/**
 * Checks if a word is a palindrome.
 * 
 * @param string $word The word to check
 * @return string Message stating if the word is a palindrome or not
 */
function checkPalindrome(string $word): string {
    $reversedWord = strrev($word);
    return ($word === $reversedWord) 
        ? "The word '$word' is a palindrome."
        : "The word '$word' is not a palindrome.";
}

// Sample Data
$length = 59;
$width = 8;
$string = "hello world!";
$word = "Racetrack";

// Display Results
echo "Area of Rectangle: " . calculateArea($length, $width) . " square units\n";
echo "Reversed String: " . reverseString($string) . "\n";
echo checkPalindrome($word) . "\n";
?>
```
