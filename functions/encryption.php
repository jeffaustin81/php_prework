<?php
    $phrase1 = $_GET ["phrase1"];
    $phrase2 = $_GET ["phrase2"];
    $phrase3 = $_GET ["phrase3"];
    $encrypted = encryptConcat($phrase1, $phrase2, $phrase3);

    function encryptConcat($phrase1, $phrase2, $phrase3) {
        $reverse = strrev($phrase1);
        $uppercase = strtoupper($phrase2);
        $up = strtoupper($phrase3);
        $upReverse = strrev($up);

        return $reverse . " " . $uppercase . " " . $upReverse;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Encrypt a Message</title>
</head>
<body>
    <div class="container">
        <h1>Messages encrypted!</h1>
        <h3><?php echo $phrase1 . " " . $phrase2 . " " . $phrase3; ?></h3>
        <h4><?php echo $encrypted; ?></h4>
    </div>
</body>
</html>