<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>
    <link rel="stylesheet" href="service.css">

</head>
<body class="servic">

    <div class="text">

        <?php

        $a = $_POST["q1"];

        $b = str_split($a);

        $arr = [
            "ноль",
            "один",
            "два",
            "три",
            "четыре",
            "пять",
            "шесть",
            "семь",
            "восемь",
            "девять"
        ];

        foreach ($b  as  $value) {

            if (is_numeric($value)) {

                echo  " " . $arr[$value];
            } else {

                echo " " . $value;
            }
        }

        ?>

    </div>
</body>
</html>