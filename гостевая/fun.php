<?php

function smile($text)
{
    return  preg_replace(
        [
            "/:-?\)/iu",
            "/:-?\(/iu",
            "/:P/iu",
            "/:-\*/iu",
            "/\&\#/iu"
        ],
        [
            'π',
            "π",
            "π",
            "π",
            "π€©"
        ],
        $text
    );
}

function word($txt)
{
    return  preg_match("/.*Π΄ΡΡΠ°ΠΊ.*/iu", $txt);
}
