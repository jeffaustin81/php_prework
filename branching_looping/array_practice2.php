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
    <ul>
        <?php
            foreach ($groceries as $purchase) {
                echo "<li>" . $purchase . "</li>";
            }
        ?>
    </ul>
    </div>
</body>
</html>