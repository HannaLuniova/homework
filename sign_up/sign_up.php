<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="header">
        REPEAT REGISTRATION
    </div>
    <div class="block">
        <div class="block__1">

            <?php

            $name = preg_match_all("/^[a-zа-я]+ [a-zа-я]+$/iu", $_POST["name"]);

            $email = preg_match("/[\w\d+-.]+@\w{4,}\.\w{2,4}/iu", $_POST["email"]);

            $tel = preg_replace("/[^0-9\+]/", "", $_POST["tel"]);
            $tel_1 = preg_match("/^((80)|(\+375))-?((29)|(33)|(44)|(25))-?\d{3}-?\d{2}-?\d{2}$/", $tel);

            $social = preg_match("/@[\w\d+-.]+/iu", $_POST["social"]);

            ?>
            <form class="input__php">
                <?

            if ($name == false) {
             echo "<input type='text' placeholder='Incorrect name' disabled >";
             }
             if ($email == false) {
             echo "<input type='text' placeholder='Incorrect  e-mail' disabled>";
             }
            if ($tel_1 == false){
            echo "<input type='text' placeholder='Incorrect  telephone' disabled>";
             }
             if ($social == false) {
               echo "<input type='text' placeholder='Incorrect  account' disabled>";
             }
 

            if ($name && $email && $tel_1  && $social ) {

                echo "<p class='text1'>Registration completed</p>";

                       file_put_contents("file.txt",
                        ($_POST["name"] . "\n" . $_POST["email"] . "\n" . $_POST["tel"]. "\n" . $_POST["social"] . "\n"),
                         FILE_APPEND);

                } else {
                     echo "<p class='text2'>You are not registered</p>";
                      }
            ?>
            </form>
        </div>
        <div class="block__2"></div>
        <div class="block__3"></div>
    </div>
</body>

</html>