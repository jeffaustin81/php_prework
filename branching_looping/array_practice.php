<?php
    $groceries = array("eggs", "milk", "bread");
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Array Practice</title>
</head>
<body>
    <div class="container">
    <h1>My Grocery List</h1>
    <h3><?php echo $groceries[0]; ?></h3>
    <h3><?php echo $groceries[1]; ?></h3>
    <h3><?php echo $groceries[2]; ?></h3>
    </div>
</body>
</html>