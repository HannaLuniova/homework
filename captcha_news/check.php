<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<body>
    <?php
    $number = $_POST["number"];
    $userNumber = $_POST["userNumber"];
    $arr = ["ноль", "один", "два", "три", "четыре", "пять", "шесть", "семь", "восемь", "девять"];
    if (preg_match("/.*(" . $arr[$number[0]] . ")\s+(" . $arr[$number[1]] . ").*/iu", $userNumber)) {
        echo "ok";
    } else {
        echo "no";
    }
    ?>
</body>

</html>