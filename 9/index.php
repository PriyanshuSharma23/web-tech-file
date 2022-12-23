<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Board</title>

    <link rel="stylesheet" href="styles.css">
</head>

<?php
$rows = 8;
$cols = 8;

?>

<body>
    <div class="chessboard">
        <?php

        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                $color = $i % 2 == $j % 2 ? 'black' : 'white';
                echo "<div class='square $color'></div>";
            }
        }

        ?>
    </div>
</body>

</html>
