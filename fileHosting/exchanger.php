<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "showdir.php";
    ?>
    <form enctype="multipart/form-data" action="uploader.php" method="POST">
        <input type="hidden" name="MAX_FILE_SIZE" value="300000000" />
        <input name="userfile" type="file">
        <input type="submit" value="Отправить файл" />
    </form>
</body>

</html>