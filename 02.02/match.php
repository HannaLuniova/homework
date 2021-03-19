<?php

//$subject = $_POST["q"];
//
//$pattern='/Привет+/i';
//
//$a=preg_match_all($pattern, $subject );
//echo $a;

echo  preg_match_all('/Привет+/iu',$_POST["q"]);


