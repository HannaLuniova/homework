<?php

// Подключаем файл содержащий описание класса Calc
include_once "Calc.php"; 

// Создаём экземпляр(объект) класса Calc, и передаём в его конструктор числа a полученные из html
$calc = new Calc($_POST["a"]);

// У объекта  $calc вызываем метод(функцию) названия которого получаем в поле "op" html формы($_POST["op"]) 
echo $calc->{$_POST["op"]}();
