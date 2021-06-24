<?php

namespace Luniova;

class Palindrome
{
    protected string $array;

    public function palindrome($array): bool
    {
        $stroka = str_replace(" ", "", $array);
//        $arr = str_split($stroka);
        $stroka1 = strrev($stroka);
        if (strcasecmp($stroka, $stroka1) == 0) {
            return true;
        } else {
            return false;
        }
    }

//            for ($i = 0; $i < ceil((count($arr) / 2)); ++$i) {
//                if ($arr[ceil((count($arr) / 2)) - $i] != $arr[ceil((count($arr) / 2)) + $i]) {
//                    return false;
//                }
//            }
//        return true;
//    }
}