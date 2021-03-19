<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST-2</title>
    <link rel="stylesheet" href="php.css">
</head>

<body>
    <a href="test.html">
        <img class="but" src="img/button.png" alt="button">
    </a>
    <div class="answer">
    <?php

    $right =  ($_POST['q1'] == 'Втором')
        + ($_POST['q2'] == 'Жабу')
        + ($_POST['q3'] == 'Муфту')
        + ($_POST['q4'] == 'Уставший')
        + ($_POST['q5'] == 'Языка');


    if ($right >= 5) {
        echo  "Количество правильных ответов - " . $right . "<br>" . "<br>";
        echo    "ТАК ДЕРЖАТЬ";
    } else {
        echo    "ПОПРОБУЙ ЕЩЁ РАЗ";
    }
    ?>
    </div>
    <div>
        <img class="robot" src="img/robot.png" alt="robot">
    </div>

</body>

</html>