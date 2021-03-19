
<?php

$link = $_POST["url"];

$a = file_get_contents($link);

$b = "/<div class=\"news-entry__speech\">\n?([ ]+)?<p>[\w\",.\s\-\:\(\)]+<\/p>\n?([ ]+)?<\/div>/iu";

preg_match_all($b, $a, $matches);

foreach ($matches[0] as  $match) {
    echo $match;
}
