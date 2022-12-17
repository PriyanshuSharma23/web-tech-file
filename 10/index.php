<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <?php

    // if POST request
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // get the values from the form
        $first = $_POST['first'];
        $second = $_POST['second'];

        // check if the values are numbers
        if (is_numeric($first) && is_numeric($second)) {
            // check if the button is clicked
            if (isset($_POST['add'])) {
                $result = $first + $second;
            } else if (isset($_POST['subtract'])) {
                $result = $first - $second;
            } else if (isset($_POST['multiply'])) {
                $result = $first * $second;
            } else if (isset($_POST['divide'])) {
                if ($second == 0) {
                    $result = "Cannot divide by zero";
                } else {
                    $result = $first / $second;
                }
            }
        } else {
            $result = "Please enter numbers only";
        }
    } else {
        $result = "Enter numbers and click a button";
    }


    ?>

    <h1>
        Simple Calculator
    </h1>

    <form action="index.php" method="POST">
        <div class="input-group">
            <label for="first">First Number</label>
            <input type="number" name="first" id="first" placeholder="Enter First Number">
        </div>

        <div class="input-group">
            <label for="second">Second Number</label>
            <input type="number" name="second" id="second" placeholder="Enter Second Number">
        </div>

        <div class="button-section">
            <input type="submit" name="add" value="Add">
            <input type="submit" name="subtract" value="Subtract">
            <input type="submit" name="multiply" value="Multiply">
            <input type="submit" name="divide" value="Divide">

        </div>

        <div class="input-group">
            <label for="result">Result</label>
            <input readonly type="text" name="result" id="result" value="<?php echo $result; ?>" disabled>
        </div>
    </form>
</body>

</html>
