<?php
include "Table.php";
include "Price.php";
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
<div class="container px-4">
    <div class="row gx-5 mt-5">
        <div class="col ">
            <div class="p-3 border bg-light ">
                <p class="fs-4 text-center">
                    Стоимость стола:
                </p>
               </div>
        </div>
        <div class="col">
            <div class="p-3 border bg-light">
                <p class="fs-4 text-center">
                <?php
                include "include.php";
                ?>
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>

