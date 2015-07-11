<?php
$food = $_GET["food"];
$answer = foodAnswer($food);

function foodAnswer($food) {

    if (strtoupper($food) == "FISH" || strtoupper($food) == "PINEAPPLE")
    {
        return "Ella can't eat that!";
    }
    else {
        return "Ella can eat that!";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Ella</title>
</head>
<body>
    <div class="container">
        <h1><?php echo $answer; ?></h1>
    </div>
</body>
</html>