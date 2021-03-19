<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="A">
        <?php

        $answer = [$_POST['q1'], $_POST['q2'], $_POST['q3'], $_POST['q4'], $_POST['q5'], $_POST['q6'], $_POST['q7'], $_POST['q8'], $_POST['q9'], $_POST['q10']];
        $true_answer = ["2", "4", "6", "8", "10", "12", "14", "16", "18", "20"];
        $b = 0;
        $c = 0;
        $f = "<img src='img/5.png' > ";
        $a = "<img src='img/3.png'> ";

        for ($i = 0; $i < count($answer); $i++) {
            if ($answer[$i] == $true_answer[$i]) {
                $b = $b + 1;
            } else {
                $c = $c + 1;
            }
        }
        if ($b >= 5) {
            echo '<p style="color: #072704">' . 'Количество правильных ответов ' . $b . "<br>" . '</p>';
            echo $a;
            echo  '<p style="color: #072704">' . "ВЫ ПРИНЯТЫ" . '</p>';
            
        } else {
            echo '<p style="color: red">' . 'Количество  неправильных ответов  ' . $c . "<br>" . '</p>';
            echo $f;
            echo  '<p style="color: red">' .  "ВЫ НЕ ПРОШЛИ" . '</p>';
        }
        ?>
    </div>

</body>

</html>