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
    <div class="container">
        <div class="row fs-5">
            <div class=" col "></div>
            <div class=" col-9 mt-5 shadow p-3 mb-5 bg-body rounded ">
                <?php

                include_once "connect.php";

                $sql = "SELECT * FROM `poll_service`";
                $result = mysqli_query($link, $sql); // выполняет запрос к базе данных MySQL ; $link= хранятся данные подключения к БД;

                echo "<table class='table table-bordered border-success table-hover'>
                      <thead class='table-dark'>";
                echo "
                      <th >Из какого вы города?</th>
                      <th >Ваш email:</th>
                      <th >Ваш пол:</th>
                      <th >Ваш возраст:</th>
                      <th >Редактировать</th>
                      <th >Удалить</th>
                      </thead>";

                // mysqli_fetch_assoc возвращает ряд результата запроса в качестве ассоциативного массива
                while ($row = mysqli_fetch_assoc($result)) {
                    echo
                    "<tr>" .
                        "<td> $row[city]</td>" .
                        "<td> $row[email]</td>" .
                        "<td>" . ($row['gender'] == 'male' ? '👨' : '👩') . "</td>" .
                        "<td> $row[age]</td>" .
                        "<td>" .
                        "<a href='bdEdit.php?id=$row[id]'>🛠</a>" .
                        "</td>" .
                        "<td>" .
                        "<a href='delete.php?id=$row[id]'>🗑</a>" .
                        "</td>" .
                        "</tr>";
                }

                echo "</table> ";

                ?>

                <!-- Добавление строк в таблицу -->
                <a class=" btn btn-outline-dark" href="bdAdd.php">Добавить</a>
            </div>
            <div class="col"></div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>