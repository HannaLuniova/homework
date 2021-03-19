<?php

$dir = array_diff(scandir("files\\"), ['..', '.']);
rsort($dir);
foreach ($dir as $value) {
    preg_match_all('/^.*\.(.*?)$/iu', $value, $matchs);
    $ext = in_array($matchs[1][0], ['docx', 'jpg', 'rar', 'pdf', 'zip','png', 'dll']) ? $matchs[1][0] : 'default';
    echo "<a href='files\\$value'>$value</a>" . "<img src='img/$ext.png'><br>\n";
}