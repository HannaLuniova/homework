<?php

//$subject = $_POST["q"];
//
//$pattern = "/Дурак/iu";
//$rep = "ай-яй-яй";
//
//echo preg_replace($pattern, $rep, $subject, -1, $namber);
//
//echo "<br> Произведено замен по шаблону:" . $namber;

echo preg_replace("/Дурак/iu", "ай-яй-яй", $_POST["q"]);

