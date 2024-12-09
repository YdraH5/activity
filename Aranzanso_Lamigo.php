<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd or Even</title>
</head>
<body>
    <h1>Odd or Even</h1>

    <form method="POST" action="">
        <label for="numbers">Enter numbers separated by commas:</label><br>
        <input type="text" id="numbers" name="numbers" placeholder="e.g., 23,44,15" required><br><br>
        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['numbers'];
        $numbers = array_map('trim', explode(',', $input));

        echo "<h2>Results:</h2>";
        foreach ($numbers as $number) {
            if (is_numeric($number)) { 
                if ($number % 2 == 0) {
                    echo "The number $number is even.<br>";
                } else {
                    echo "The number $number is odd.<br>";
                }
            } else {
                echo "Invalid input: '$number' is not a number.<br>";
            }
        }
    }
    ?>
</body>
</html>