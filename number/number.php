<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="number.css">
</head>

<body>
    <div class="form">
        <form action="number.php" method="post">
            <div>
                <p>Enter your phone number: </p>
                <small>Format:
                    <br> xxxxxxxxxxx
                    <br>+xxxxxxxxxxxx
                    <br>+xxx(xxx)xxxxxx
                    <br>+xxx(xxx)xx-xx-xx
                    <br>+xxx-(xxx)-xx-xx-xx
                    <br>xxxxxx</small><br>
                <input tabindex="1" type="tel" name="tel" autofocus="autofocus"><br>
            </div>
            <div>
                <button tabindex="2" type="submit">OK</button>
            </div>
        </form>
    </div>
    <div class="php">
        <?php
        $str = $_POST["tel"];
        $pattern = "/^((80)|(\+375))?-?\(?(212)?\)?-?\d{2}-?\d{2}-?\d{2}$/";
        if (preg_match($pattern, $str)) {
            echo "That's right";
        } else {
            echo 'Please enter the number in the correct format:';
        }
        ?>
    </div>
</body>

</html>
<!--80212159951-->
<!--+375212159951-->
<!--+375(212)159951-->
<!--+375(212)15-99-51-->
<!--+375-(212)-15-99-51-->
<!--159951-->
