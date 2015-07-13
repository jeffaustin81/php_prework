<?php
    $authors = array('James Patterson', 'Stephen King', 'Ken Follet', 'Dean Koontz', 'John Grisham', 'Dan Brown');
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Authors</title>
</head>
<body>
    <div class="container">
        <h1>These are my favorite authors!</h1>
        <?php
            foreach ($authors as $authorName) {
                echo "<h2>" . strrev($authorName) . "</h2>";
            }
        ?>
    </div>
</body>
</html>