<?php
    echo preg_replace('/a..a/', '!', 'aba aca aea abba adca abea') . PHP_EOL;
    echo preg_replace('/ab*a/', '!', 'aa aba abba abbba abca abea') . PHP_EOL;
    echo preg_replace('/2\+3/', '!', '2+3 223 2223') . PHP_EOL;
    echo preg_replace('/a.+?a/', '!', 'aba accca azzza wwwwa') . PHP_EOL;
    echo preg_replace('/a\d+a/', '!', 'a1a a22a a333a a4444a a55555a aba aca') . PHP_EOL;
    echo preg_replace('/a\Wb/', '!', 'ave a#b a2b a$b a4b a5b a-b acb') . PHP_EOL;
    echo preg_replace('/a[a-zA-Z]+a/', '!', 'aAXa aeffa aGha aza ax23a a3sSa');