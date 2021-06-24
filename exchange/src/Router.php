<?php

namespace Luniova;

class Router
{
    public function run()
    {
        //print_r($_GET);
        if (isset($_GET['byn'])) {
            $converter = new Exchange($_POST['byn']);
            echo $converter->toUSD().'<br>';
            echo $converter->toEUR().'<br>';
            echo $converter->toRUB().'<br>';
            echo $converter->toPLN().'<br>';
            echo $converter->toUAH().'<br>';
        } else {
            include "../template/index.html";
        }
    }

}