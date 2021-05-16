<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<div class="container">
<?php
include "autoload.php";

$ul = new Ul();
echo $ul
    ->setData(["Иванов", "Петров", "Сидоров"])
    ->setType("circle")
    ->html();

echo $ul
    ->setType("disc")
    ->html();

$ol = new Ol();
echo $ol
    ->setData(["Иванов", "Петров", "Сидоров"])
    ->setType("Classes")
    ->html();

echo $ol
    ->setType("i")
    ->html();


$table = new Table();
echo $table
    ->setHeaders(['Имя', 'Должность', 'Возраст'])
    ->setClass('table table-success table-striped')
    ->setData([
        ['Алекс', 'Программист', '30'],
        ['Елена', 'Дизайнер', '25'],
        ['Павел', 'Сварщик', '40']
    ])
    ->html();
?>
</div>
</body>
</html>