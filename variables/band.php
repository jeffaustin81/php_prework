<?php
    $band_name = "The Rolling Stones";
    $band_member1 = "Mick Jagger";
    $band_member2 = "Keith Richards";
    $band_member3 = "Charlie Watts";
    $band_member4 = "Ronnie Wood";
    $band_member5 = "Brian Jones";
    $band_member6 = "Ian Stewart";
    $band_genre = "Rock N Roll";
    $band_img = "rolling_stones.jpg";

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>We love <?php echo $band_name; ?>!</title>
</head>
<body>
    <div class="container">
    <h1>Welcome! We are fans of <?php echo $band_name; ?>!</h1>
    <h3>
        <?php echo $band_name;?> are the best band in the world! Members include <?php echo $band_member1 . ", " . $band_member2 . ", " . $band_member3 . ", " . $band_member4 . ", " . $band_member5 . ", " . $band_member6 . "."; ?> The band has been a powerhouse in the world of <?php echo $band_genre; ?>.
    </h3>
        <img src= "<?php echo $band_img; ?>" alt="test"/>
    </div>
</body>
</html>
