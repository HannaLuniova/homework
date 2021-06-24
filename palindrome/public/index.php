<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col text-center">
            <form action="?palin" method="post">
                <div class="input-group mt-5">
                    <p class="h5">Проверить является ли слово/выражение палиндромом</p>
                    <input type="text" name="palin" class="form-control text-center"
                           aria-label="Dollar amount (with dot and two decimal places)"
                           placeholder="Введите слово/выражение">
                </div>
                <br>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <input type="submit" value="Проверить" class="btn btn-info">
                </div>
            </form>
        </div>
        <div class="col"></div>
    </div>
</div>
</body>
</html>
<?php
include "../vendor/autoload.php";

use Luniova\Palindrome;

$palindrome = new Palindrome();

if (isset($_POST['palin'])) {
//    $stroka1 = str_replace(" ", "", $_POST['palin']);
//    $arr = str_split($stroka1);
//print_r($arr);
    if ($palindrome->palindrome($_POST["palin"])) {
        echo "Слово палиндром";
    } else {
        echo "Слово не палиндром";
    }
}
?>
