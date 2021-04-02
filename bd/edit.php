<?php
// Редактирование строк(данных) таблицы

include_once "connect.php";

$sql =
    "UPDATE `poll_service` 
     SET 
            `city`='$_POST[city]',
            `email`='$_POST[email]',
            `gender`='$_POST[gender]',
            `age`='$_POST[age]'

    WHERE id='$_POST[id]'";
    
// выполняет запрос к базе данных MySQL ; $link= хранятся данные подключения к БД;
mysqli_query($link, $sql);

header("location:bd.php");
