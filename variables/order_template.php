<?php
    $recipient = "Jesse";
    $downtown_address = "208 SW 5th Ave #105, Portland, OR 97204";
    $northwest_address = "1978 19th Ave, Portland, OR 97209";
    $south_address = "1493 SW 2nd Ave, Portland, OR 97201";
    $westlinn_address = "9876 W A Street, West Linn, OR 97068";
    $downtown_order = "20 lbs dark roast, 15 lbs light roast.";
    $northwest_order = "50 lbs dark roast.";
    $south_order = "40 lbs light roast.";
    $westlinn_order = "20 lbs light roast";
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,200' rel='stylesheet' type='text/css'>
    <link href="styles.css" rel="stylesheet" type="text/css">
    <title>Order Form</title>
</head>
<body>
    <div class="order">
    <h1 class="heading">Oregon Cafe Order</h1>
    <p>Hi <?php echo $recipient; ?>, </p>
    <p>Just making my weekly order. Details are below.</p>
    <div id="downtown">
    <p><?php echo $downtown_order; ?></p>
    <p><?php echo $downtown_address; ?></p>
    </div>
    <div id="northwest">
    <p><?php echo $northwest_order; ?></p>
    <p><?php echo $northwest_address; ?></p>
    </div>
    <div id="south">
    <p><?php echo $south_order; ?></p>
    <p><?php echo $south_address; ?></p>
    </div>
    <div id="westlinn">
    <p><?php echo $westlinn_order; ?></p>
    <p><?php echo $westlinn_address; ?></p>
    </div>
    <p>Thanks,</p>
    <p>Jeff</p>
    </div>
</body>
</html>