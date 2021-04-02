<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

</head>

<body>
    <div class="container">
        <div class="row fs-5">
            <div class=" col"></div>
            <div class=" col-9 mt-5 shadow p-3 mb-5 bg-body rounded ">
                <!-- Добавление строк(данных) в таблицу -->
                <form action="add.php" method="post">
                    <div class="row mb-3 ">
                        <label for="inputEmail3" class="col-sm-2 col-form-label "><i class="bi bi-building"> </i> Из какого вы города?</label>
                        <div class="col-sm-10 ">
                            <input type="text" name="city" tabindex="1" class="form-control bg-light text-dark" id="inputEmail3 ">
                        </div>
                    </div>
                    <div class=" row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label "><i class="bi bi-envelope-open"> </i> Ваш email:</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" tabindex="2" class="form-control bg-light text-dark" id="inputEmail3">
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0 "><i class="bi bi-person-check"> </i> Ваш пол:</legend>
                        <div class="col-sm-10">
                            <div class="form-check form-switch">
                                <input class="form-check-input bg-light text-dark" type="checkbox" name="gender" value="male" tabindex="3" id="flexSwitchCheckDefault">Мужской<br>
                                <input class="form-check-input bg-light text-dark" type="checkbox" name="gender" value="female" tabindex="3" id="flexSwitchCheckDefault">Женский<br>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label "><i class="bi bi-file-earmark-person"> </i> Ваш возраст:</label>
                        <div class="col-sm-10">
                            <input type="number" max="100" name="age" tabindex="4" class="form-control bg-light text-dark" id="inputEmail3">
                        </div>
                    </div>
                    <input class="btn btn-info" type="submit" value="Добавить">
                </form>
            </div>
            <div class="col"></div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>