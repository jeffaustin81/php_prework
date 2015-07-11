<?php
    $month = $_GET["month"];
    $color = $_GET["color"];
    $colorFortune = color_fortune($color);
    $fortune = yourFortune($month);

    function yourFortune($month)
    {
        if (strtoupper($month) == "JANUARY") {
            return "all of your New Years resolutions will come true!";
        }
        elseif (strtoupper($month) == "FEBRUARY") {
            return "you will fall in love with a special someone!";
        }
        elseif (strtoupper($month) == "MARCH") {
            return "luck will shine upon you!";
        }
        elseif (strtoupper($month) == "APRIL") {
            return "a golden egg of opportunity will fall into your lap.";
        }
        elseif (strtoupper($month) == "MAY") {
            return "never fear! The end of something marks the start of something new.";
        }
        elseif (strtoupper($month) == "JUNE") {
            return "the sun will shine on you if you let it.";
        }
        elseif (strtoupper($month) == "JULY") {
            return "you can’t steal second base and keep your foot on first.";
        }
        elseif (strtoupper($month) == "AUGUST") {
            return "you will be sharing great news with all the people you love.";
        }
        elseif (strtoupper($month) == "SEPTEMBER") {
            return "you have the power to write your own fortune.";
        }
        elseif (strtoupper($month) == "OCTOBER") {
            return "you will be successful in your work.";
        }
        elseif (strtoupper($month) == "NOVEMBER") {
            return "you will enjoy good health; you will be surrounded by luxury.";
        }
        elseif (strtoupper($month) == "DECEMBER") {
            return "you will make change for the better.";
        }
        else {
            return "Error: You didn't enter your birth month!";
        }
    }

    function color_fortune($color)
    {
        if (strtoupper($color) == "RED" || strtoupper($color) == "PINK" || strtoupper($color) == "BLUE") {
            return "Your ambitions will become real and ";
        }
        elseif (strtoupper($color) == "PURPLE" || strtoupper($color) == "WHITE" || strtoupper($color) == "BLACK") {
            return "Your creativity will shine through and ";
        }
        elseif (strtoupper($color) == "ORANGE" || strtoupper($color) == "GREEN" || strtoupper($color) == "YELLOW") {
            return "You will meet new people that will bring otimism to your life and ";
        }
        else {
            return "I don't know that color! But, ";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Your Fortune</title>
</head>
<body>
    <div class="container">
        <h1><?php echo $colorFortune . $fortune; ?></h1>
    </div>
</body>
</html>