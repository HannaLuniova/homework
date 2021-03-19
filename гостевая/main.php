<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="message">
        <?php

        include "fun.php";
        include "date.php";

        $data = json_decode(file_get_contents("data.json"), true);

        foreach ($data as $row) {
            echo "<p><span>" . $dateFormat . "</span><br>" . $row["name"] . ":<br>\n" . smile($row["msg"]) . '</p>';
        }
        ?>

    </div>
    <div class="content">
        <form action="add.php" method="post">
            <input  type="text" name="name" tabindex="1" autofocus><br>
            <textarea name="msg" cols="60" rows="3" tabindex="2"></textarea><br>
            <input  type="submit" value="🢀">
        </form>
    </div>
</body>

</html>