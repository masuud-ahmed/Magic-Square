<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Square Assignment</title>
</head>
<body>

<h2>3x3 Magic Square</h2>
 <h3>Masud Ahmed Yusuf C1211446</h3>
<?php
// Define an array of 9 consecutive numbers, as required by the assignment
$consecutiveNumbers = range(1, 9); // Example: [1, 2, 3, 4, 5, 6, 7, 8, 9]

// Validate the array for correctness
if (count($consecutiveNumbers) !== 9) {
    die("Error: The array must contain exactly 9 consecutive numbers.");
}

// Calculating the magic constant and median
$magicConstant = array_sum($consecutiveNumbers) / 3; // Sum divided BY the number of rows 3 
$median = $consecutiveNumbers[4]; // the median number of consecutive

// Create a 3x3 array (magic square) using the provided formulas
$magicSquare = [
    [$median + 1, $median + 3, $median - 3],
    [$median - 1, $median, $median + 2],
    [$median + 4, $median - 4, $median - 2],
];

// Adjusting remaining cells to ensure each row and column sums to the magic constant
$magicSquare[0][1] = $magicConstant - ($magicSquare[0][0] + $magicSquare[0][2]);
$magicSquare[1][0] = $magicConstant - ($magicSquare[0][0] + $magicSquare[2][0]);
$magicSquare[2][1] = $magicConstant - ($magicSquare[2][0] + $magicSquare[2][2]);

// Displaying the magic square in an HTML table
echo "<h3>The Solved Magic Square:</h3>";
echo "<table border='1' cellpadding='10'>";
for ($i = 0; $i < 3; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 3; $j++) {
        echo "<td>" . $magicSquare[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

// Displaying the magic constant
echo "<p>Magic Constant: " . $magicConstant . "</p>";
?>

</body>
</html>
