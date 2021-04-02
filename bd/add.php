<?php
//Добавление данных в таблицу 

include_once "connect.php";

if (!empty($_POST)) {
    $sql = "INSERT INTO `poll_service`( `city`, `email`,`gender`,`age`)
            VALUES ('$_POST[city]','$_POST[email]','$_POST[gender]','$_POST[age]')";
            
// выполняет запрос к базе данных MySQL ; $link являет собой идентификатор соединения, полученный с помощью connect.php
    mysqli_query($link, $sql); 

}
header("location:bd.php");
