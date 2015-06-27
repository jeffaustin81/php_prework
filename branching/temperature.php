<?php
    $temp = $_GET ["temp"];
    $message = tempResponse($temp);

    function tempResponse($temp)
    {

        if ($temp < 60) {
            return "It's cold out!";
        }
        elseif ($temp > 80) {
            return "It's too hot!";
        }
        else {
            return "It's lovely out!";
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>How hot is it?</title>
</head>
<body>

    <div class="container">

        <h1><?php echo $message;?></h1>

</body>
</html>
