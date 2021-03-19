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
        $right =  ($_POST['q1'] == 86)
            + ($_POST['q2'] == 60)
            + ($_POST['q3'] == 67)
            + ($_POST['q4'] == 11)
            + ($_POST['q5'] == 81);

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