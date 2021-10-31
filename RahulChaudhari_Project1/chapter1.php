<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

        $base = 15;
        $height = 10;

        $area = round(($base * $height) * 0.5, 2);

        echo "<p>The area of the Triangle is " . $area."</p>";

        define("MY_NAME", "Rahul Chaudhary");

        echo "<strong>My First name is " . strtoupper(MY_NAME) . "</strong>";

    ?>


</body>

</html>