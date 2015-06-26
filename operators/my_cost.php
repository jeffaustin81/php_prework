<?php
    $first_number = $_GET["first_number"];
    $second_number = $_GET["second_number"];
    $priceperpound = $first_number * 0.15;
    $pricepermile = $second_number * 0.25;
    $price = ($priceperpound + $pricepermile) - 0.75;
    $output = "The weight of your package is " . $first_number . " lbs." . " The distance your package is traveling is " . $second_number . " miles." . " The total cost of shipping your package is $" . round($price) . ".00.";
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Shipping details</title>
</head>
<body>
    <div class="container">
        <h1>Shipping Details</h1>
        <p><?php echo $output; ?></p>
    </div>
</body>
</html>