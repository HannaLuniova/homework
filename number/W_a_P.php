<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="number.css">
</head>

<body>
    <div class="img">
        <div class="content">
            <div class="w_p">
                <?php

                $str = file_get_contents("https://obrazovaka.ru/books/tolstoy/voyna-i-mir/tom-1");

                $pattern = "/\bТолсто(.*?)\b/iu";

                echo "Найдено совпадений: " . $count = preg_match_all($pattern, $str, $matches) . "<br>";

                foreach ($matches[0] as  $value) {
                    echo $value . "<br>";
                }

                ?>
            </div>
        </div>
    </div>
</body>

</html>