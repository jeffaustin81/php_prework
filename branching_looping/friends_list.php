<?php
    $friends = array('Victor', 'Cristina', 'Chris', 'Scott', 'Eric', 'Jesse', 'Donny');
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>My friends</title>
</head>
<body>
    <div class="container">
        <h1>These are my friends!</h1>
        <?php
            foreach ($friends as $friend) {
                echo "<h1>" . $friend . " is my friend." . "</h1>";
            }
        ?>
    </div>
</body>
</html>