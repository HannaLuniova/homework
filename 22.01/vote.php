<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="content">
    <div class="content1">
        <?php
        // print_r($_POST);

        include "config.php";

        $data = file($fileName);

        if (isset($_POST['answers'])) {
            $currentAnswers = $_POST['answers'];
            $buff = explode($separate, $data[$currentAnswers + 1]);
            $buff[1] += 1;
            $buff[1] .= "\n";
            $data[$currentAnswers + 1] = $buff[0] . $separate . $buff[1];
            file_put_contents($fileName, implode("", $data));
        }

        $question = $data[0];
        unset($data[0]);

        $answers = [];

        foreach ($data as $value) {
            $answers[] = explode($separate, $value);
        }
        // print_r($answers);
        ?>
        <div class="content3">
            <form action="?" method="post">

                <p> <?= $question ?></p>
                <br>
                <?php
                $percent100 = 0;
                foreach ($answers as $value) {
                    $percent100 += $value[1];
                }

                $percent1 = $percent100 / 100;
                foreach ($answers as $key => $value) {
                    $count = $value[1];
                    $width = round(($count / $percent1), 2);

                    echo " <input type='radio' value='$key' name='answers'>$value[0] ( $count = $width%)
                        <div class='content5' style='width: {$width}%;' >
                        </div>
                        <br>";
                }
                // echo $sum;
                ?>

                <input type="submit" value="ok">

            </form>
        </div>
    </div>
</div>
</body>

</html>