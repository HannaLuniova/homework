<?php
// Удаление строк(данных) из таблицы

include_once "connect.php";

$sql = "DELETE FROM poll_service WHERE id = $_GET[id]";

// выполняет запрос к базе данных MySQL ; $link= хранятся данные подключения к БД;
mysqli_query($link, $sql);

header("location:bd.php");