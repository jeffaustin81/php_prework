<?php
    $upper = $_GET["uppercase"];
    $upper_display = "\"$upper\"" . " in uppercase is: " . strtoupper($upper);
    $word_count = $_GET["word_count"];
    $word_count_display = "The word count of your phrase: " . "\"$word_count\"" . " is " . str_word_count($word_count) . ".";
    $shuffle = $_GET["shuffle"];
    $shuffle_display = "Your phrase: " . "\"$shuffle\"" . " scrambled is: " . str_shuffle($shuffle);
    $index = $_GET["index"];
    $index_display = "In your phrase: " . "\"$index\"" . " 'you' is at the index of " . stripos($index, "you") . ".";
?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Results</title>
</head>
<body>
    <div class="container">
        <h1>Here ya go!</h1>
        <p><?php echo $upper_display; ?> </p>
        <p><?php echo $word_count_display; ?> </p>
        <p><?php echo $shuffle_display; ?> </p>
        <p><?php echo $index_display; ?> </p>
    </div>
</body>
</html>