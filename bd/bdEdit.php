<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <?php
    // Редактирование строк(данных) таблицы

    include_once "connect.php";

    $sql = "SELECT * FROM `poll_service` WHERE id = $_GET[id]";

    // выполняет запрос к базе данных MySQL ; $link являет собой идентификатор соединения, полученный с помощью connect.php
    $result = mysqli_query($link, $sql);

    // mysqli_fetch_assoc Возвращает ряд результата запроса в качестве ассоциативного массива
    $row = mysqli_fetch_assoc($result);

    ?>

    <div class="container">
        <div class="row fs-5">
            <div class=" col"></div>
            <div class=" col-9 mt-5 shadow p-3 mb-5 bg-body rounded">

                <!-- Отправка данных на редактирование -->
                <form action="edit.php" method="POST">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label ">Из какого вы города?</label>
                        <div class="col-sm-10">
                            <input type="text" name="city" value="<?= $row['city'] ?>" tabindex="1" class="form-control bg-light text-dark" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label ">Ваш email:</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" value="<?= $row['email'] ?>" tabindex="2" class="form-control bg-light text-dark" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Ваш пол:</label>
                        <div class="col-sm-10">
                            <input type="text" name="gender" value="<?= $row['gender'] ?>" tabindex=" 2" class="form-control bg-light text-dark" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label ">Ваш возраст:</label>
                        <div class="col-sm-10">
                            <input type="text" name="age" value="<?= $row['age'] ?>" max="100" tabindex="4" class="form-control bg-light text-dark" id="inputEmail3">
                        </div>
                    </div>
                    <input class="btn btn-warning" type="submit" value="Сохранить">
                </form>
            </div>
            <div class="col"></div>
        </div>
</body>

</html>