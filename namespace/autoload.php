<?php
spl_autoload_register(function ($class) {
    include "namespace/$class.php";
});