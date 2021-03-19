<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div>

        <?php

        $salary = [
            ["№", "ФИО", "Зарплата"],
            [1, "Иванов", "800 бел.руб"],
            [2, "Петров", "700 бел.руб"],
            [3, "Сидоров", "600 бел.руб"],
            [4, "Пушкин", "500 бел.руб"]
        ];

        for ($i = 0; $q = count($salary), $i < $q; $i++) {
            for ($j = 0; $w = count($salary[$i]), $j < $w; $j++) {
            }
        }
        include "include.php";

        echo theList($q, $w, $salary);

        ?>

    </div>
</body>

</html>