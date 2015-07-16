<?php
    $person1_name = $_GET["person1_name"];
    $person2_name = $_GET["person2_name"];
    $person3_name = $_GET["person3_name"];
    $person4_name = $_GET["person4_name"];
    $person5_name = $_GET["person5_name"];
    $person1_address = $_GET["person1_address"];
    $person2_address = $_GET["person2_address"];
    $person3_address = $_GET["person3_address"];
    $person4_address = $_GET["person4_address"];
    $person5_address = $_GET["person5_address"];
    $address_book[$person1_name] = $person1_address;
    $address_book[$person2_name] = $person2_address;
    $address_book[$person3_name] = $person3_address;
    $address_book[$person4_name] = $person4_address;
    $address_book[$person5_name] = $person5_address;
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Address Book</title>
</head>
<body>
    <div class="container">
        <h1>Address Book</h1>
        <ul>
          <?php
              foreach ($address_book as $name => $address) {
                if ($name) {
                    echo "<h3>" . "$name: $address" . "</h3>";
                }
            }
          ?>
        </ul>
    </div>
</body>
</html>