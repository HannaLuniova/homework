<?php
include_once "class/Figures.php";
include_once "class/Cubic.php";
include_once "class/Circle.php";
include_once "class/Trapezia.php";
?>
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
    <div class="row">
        <div class="col"></div>
        <div class="col">
                <?php
                switch ($_GET["form"]) {
                    case "cubic":
                        $result = new Cubic ($_POST["a"]);
                        echo $result->{$_POST["op"]}();
                        break;
                    case "trapezia":
                        $result = new Trapezia ($_POST["a"], $_POST["b"],$_POST["c"],$_POST["h"]);
                        echo $result->{$_POST["op"]}();
                        break;
                    case "circle":
                        $result = new Circle ($_POST["r"]);
                        echo $result->{$_POST["op"]}();
                        break;
                }
                ?>
        </div>
        <div class="col"></div>
    </div>
</div>
</body>
</html>
