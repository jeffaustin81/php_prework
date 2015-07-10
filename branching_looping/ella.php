<?php
$food = $_GET["food"];
$answer = foodAnswer($food);

    /* I was asked to create an app evaluating what
       Ella can and can not eat using the "&&" operator so
       this code looks pretty redundant. Ella can't eat fish "OR" pineapple
       which would make more sense using the "||" operator. Unless I was
       expected to do something else with the "&&" operator
       that I am unaware of? The next challenge I have is to actually
       use the "||" operator for the same app which makes more sense. */


function foodAnswer($food) {
    if ($food = strtoupper("fish") && $food = strtoupper("fish"))
    {
        return "Ella can't eat that!";
    }
    elseif ($food = strtoupper("pineapple") && $food = strtoupper("pineapple"))
    {
        return "Ella can't eat that!";
        # code...
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

