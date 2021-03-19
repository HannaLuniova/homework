<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $money = 1000;
    $percent = 1.5;
    $month = 3;
    $sum = $money;
    for ($i = 1; $i <= $month; $i++) {
        $sum = $sum + ($sum * ($percent / 100) / 12);
    }

    echo round($sum, 4);
    ?>

    <br>
    <br>
    <?php

    for ($i = 1; $i <= 10; $i++) {
        echo $i;
        echo "<br\n>";
    }

    ?>

    <br>

    <?php

    $i = 1;

    while ($i <= 10) {
        echo $i;
        echo "<br\n>";
        $i++;
    }
    ?>
    <br>


    <?php

    $i = 1;

    do {
        echo $i;
        echo "<br\n>";
        $i++;
    } while ($i <= 10);

    ?>
    <br>




</body>

</html>