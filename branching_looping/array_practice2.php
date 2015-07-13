<?php
    $groceries = array("eggs", "milk", "bread", "apples", "bananas", "fruit rollups", "steak", "kale", "pasta", "flour", "sugar", "vanilla");
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
    <ul class="list-group">
        <?php
            foreach ($groceries as $purchase) {
                echo '<li class="list-group-item">' . $purchase . "</li>";
            }
        ?>
    </ul>
    </div>
</body>
</html>