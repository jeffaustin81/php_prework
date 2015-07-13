<?php
    $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $solution = 1;
    foreach ($numbers as $number) {
                $solution = $solution * $number;
            }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Multiplication</title>
</head>
<body>
    <div class="container">
        <h1>1 * 2 * 3 * 4 * 5 * 6 * 7 * 8 * 9 * 10 =</h1>
        <?php
            echo "<h2>" . $solution . "</h2>";
        ?>
    </div>
</body>
</html>