<?php
    $itemList = array();
    $item1 = $_GET['item1'];
    $item2 = $_GET['item2'];
    $item3 = $_GET['item3'];
    $item4 = $_GET['item4'];
    $item5 = $_GET['item5'];
    array_push($itemList, $item1, $item2, $item3, $item4, $item5);
    $solution = 0;
    foreach ($itemList as $item) {
        $solution = $solution + $item;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Shopping Calculator</title>
</head>
<body>
    <div class="container">
    <h1>Your total cost is:</h1>
    <?php
        echo "<h1>" . "$" . number_format((float)$solution, 2, '.', '') . "</h1>";
    ?>
    </div>
</body>
</html>

