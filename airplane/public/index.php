<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="?" method="post">
    Введите количество посадочных мест<br>
    <input type="text" name="seat" value="0"><br>
    Введите количество пассажиров<br>
    <input type="text" name="passenger" value="0"><br>
    Введите запас топлива<br>
    <input type="text" name="reserved" value="0"><br>
    Введите расод топлива<br>
    <input type="text" name="rasxod" value="10"><br>
    <input type="submit" value="ok">
</form>
<?php
include '../vendor/autoload.php';

use Luniova\Airplane;

$result = new Airplane();
?>
Расcтояние,которое может пролететь самолёт
<?= $result
    ->setFuelReserved($_POST["reserved"] == "" ? 100 : $_POST["reserved"])
    ->setFuelConsumption($_POST["rasxod"] ?? 10)
    ->flyDistance(); ?>
км
<br/>
Количество свободных мест
<?= $result
    ->setSeat($_POST["seat"] == "" ? 0 : $_POST["seat"])
    ->setPassenger($_POST["passenger"] == "" ? 0 : $_POST["passenger"])
    ->freeSeat(); ?>
</body>
</html>
