<?php
    $repeat_text = $_GET["repeat_text"];
    $number_of_repeats = $_GET["number_of_repeats"];
    $repeated_text = str_repeat($repeat_text, $number_of_repeats);
?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>String Repeating</title>
</head>
<body>
    <div class="container">
        <h1>Here ya go!</h1>
        <p><?php echo $repeated_text; ?> </p>
    </div>
</body>
</html>