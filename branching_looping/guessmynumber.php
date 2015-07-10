<?php
    $guess = $_GET ["user_guess"];
    $favorite_number = rand(1, 20);
    $message = checkGuess($guess, $favorite_number);

    function checkGuess($guess, $favorite_number)
    {

        if ($guess == $favorite_number) {
            return "Congrats! You guessed it!";
        }
        elseif ($guess < $favorite_number) {
            return "Too low! Sorry, you lose!";
        }
        else {
            return "Too high! Sorry, you lose!";
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Guess My Number</title>
</head>
<body>

    <div class="container">

        <h1><?php echo $message;?></h1>

</body>
</html>