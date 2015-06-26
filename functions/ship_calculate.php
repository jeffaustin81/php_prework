<?php
    $input_weight = $_GET["weight"];
    $input_distance = $_GET["distance"];
    $shipping_price = calculateShipping($input_weight, $input_distance);

    function calculateShipping($weight, $distance)
    {
        $price = $distance / $weight + 5;
        return $price;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Shipping Calculator</title>
</head>
<body>
    <div class="container">
        <h1>Price Calculated!</h1>
        <h3>Your package weighs: <?php echo $input_weight . " lbs"; ?> </h3>
        <h3>Your package is traveling: <?php echo $input_distance . " miles"; ?> </h3>
        <h3>The cost will be: $<?php echo $shipping_price; ?> </h3>
    </div>
</body>
</html>