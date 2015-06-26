<?php
    $number = $_GET ["number"];
    $squaredNumber = calculateSquare($number);

    function calculateSquare($number) {
        $square = $number * $number;
        return $square;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Squaring Calculator</title>
</head>
<body>
    <div class="container">
        <h1>Number Squared!</h1>
        <h3><?php echo "Your number: " . $number; ?> </h3>
        <h3><?php echo "Your number squared = " . $squaredNumber;?> </h3>

    </div>
</body>
</html>