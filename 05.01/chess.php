<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="fun.css">

</head>

<body>
    <div class="border">

        <?php
        $x = $_POST["q1"];
        $y = $_POST["q2"];
        $rows = $_POST["q1"];
        $cols = $_POST["q2"];

        $table = '<table  class="chess">';

        function zerno($a, $b)
        {
            $n = $a * $b;

            for ($i = 0; $i < $n; $i++) {
                $sum = $sum + (2 ** $i);
            }
            return $sum;
        }

        for ($tr = 1; $tr <= $rows; $tr++) {

            $table .= '<tr>';

            for ($td = 1; $td <= $cols; $td++) {

                $table .= '<td >' . '</td>';
            }

            $table .= '</tr>';
        }

        $table .= '</table>';

        echo $table; ?>

    </div>

    <div class="text">

        <img src="img/wheat.png" alt="wheat">

        <?php

        echo zerno($x, $y) / 1e6 . "   тонн зерна";

        ?>

    </div>
</body>

</html>