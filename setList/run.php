<?php
include 'autoload.php';

$list=new Tlist(['Иванов','Петров','Сидоров']);
echo $list->setTagName("ol")->setNum("1")->html();
echo $list->setNum("I")->html();
echo $list->setNum("a")->html();
echo $list->setNum("i")->html();
echo $list->setNum("A")->html();

echo $list->setTagName("ul")->setNum("circle")->html();
echo $list->setNum("disc")->html();
echo $list->setNum("square")->html();