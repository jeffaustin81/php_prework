<?php
    $month = $_GET["month"];
    $color = $_GET["color"]
    $color_fortune = colorFortune($color);
    $fortune = yourFortune($month);

    function yourFortune($month)
    {
        if (strtoupper($month) == "JANUARY") {
            return "All of your New Years resolutions will come true!";
        }
        elseif (strtoupper($month) == "FEBRUARY") {
            return "You will fall in love with a special someone!";
        }
        elseif (strtoupper($month) == "MARCH") {
            return "Luck will shine upon you!";
        }
        elseif (strtoupper($month) == "APRIL") {
            return "A golden egg of opportunity will fall into your lap.";
        }
        elseif (strtoupper($month) == "MAY") {
            return "Never fear! The end of something marks the start of something new.";
        }
        elseif (strtoupper($month) == "JUNE") {
            return "The sun will shine on you if you let it.";
        }
        elseif (strtoupper($month) == "JULY") {
            return "You can’t steal second base and keep your foot on first.";
        }
        elseif (strtoupper($month) == "AUGUST") {
            return "You will be sharing great news with all the people you love.";
        }
        elseif (strtoupper($month) == "SEPTEMBER") {
            return "You have the power to write your own fortune.";
        }
        elseif (strtoupper($month) == "OCTOBER") {
            return "You will be successful in your work.";
        }
        elseif (strtoupper($month) == "NOVEMBER") {
            return "You will enjoy good health; you will be surrounded by luxury.";
        }
        elseif (strtoupper($month) == "DECEMBER") {
            return "You will make change for the better.";
        }
        else {
            return "Error: You didn't enter your birth month!";
        }
    }

    function colorFortune($color)
    {
        if (strtoupper($color) == "RED") {
            return "";
        }
        elseif (strtoupper($color) == "BLUE") {
            return "";
        }
        elseif (strtoupper($color) == "PINK") {
            return "";
        }
        elseif (strtoupper($color) == "PURPLE") {
            return "";
        }
        elseif (strtoupper($color) == "WHITE") {
            return "";
        }
        elseif (strtoupper($color) == "BLACK") {
            return "";
        }
        elseif (strtoupper($color) == "ORANGE") {
            return "";
        }
        elseif (strtoupper($color) == "GREEN") {
            return "";
        }
        elseif (strtoupper($color) == "YELLOW") {
            return "";
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
        <h1><?php echo $color_fortune . $fortune; ?></h1>
    </div>
</body>
</html>