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
            '😀',
            "😞",
            "😛",
            "👋",
            "🤩"
        ],
        $text
    );
}

function word($txt)
{
    return  preg_match("/.*дурак.*/iu", $txt);
}
