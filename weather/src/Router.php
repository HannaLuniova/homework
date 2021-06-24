<?php


namespace Luniova;


class Router
{
    public function run()
    {
        $a = new Weather();
        echo $a->setCityName("Витебск")->getTemperature();
    }
}