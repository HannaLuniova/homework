<?php
// add.php
include "fun.php";

if ((!empty($_POST)) && ($_POST["msg"] != "") && ($_POST["name"] != "") && (!word($_POST["msg"]))) {

    $data = json_decode(file_get_contents("data.json"));
    $data[] = ["msg" => $_POST["msg"], "name" => $_POST["name"],"date"=> date("d F Y H:i:s")];
    file_put_contents("data.json", json_encode($data));
}
header("Location: main.php");
