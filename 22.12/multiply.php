<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST-2</title>
    <link rel="stylesheet" href="php.css">
</head>

<body>


    <a href="multiply.html">
        <img class="but" src="img/button.png" alt="button">
    </a>

    <div class="answer">

        <?php

        $right =  ($_POST['q1'] == 2)
            + ($_POST['q2'] == 4)
            + ($_POST['q3'] == 6)
            + ($_POST['q4'] == 8)
            + ($_POST['q5'] == 10)
            + ($_POST['q6'] == 12)
            + ($_POST['q7'] == 14)
            + ($_POST['q8'] == 16)
            + ($_POST['q9'] == 18)
            + ($_POST['q10'] == 20);

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