<?php

use Qero\PackagesManager\PackagesManager;

fwrite (STDOUT, '    '. implode (PHP_EOL .'    ', [
    'Thank for installing [Qero test project]!',
    'Author: Podvirnyy Nikita',
    '',
    'Are you confirm license agreements? [Y/N]',
    '> '
]));

while (true)
{
    $status = strtolower (stream_get_contents ($input = fopen ('php://stdin', 'r'), 1));
    fclose ($input);

    if (array_search ($status, array ('y', 'n')) === false)
        fwrite (STDOUT, '   You pressed unknown character. Please, retry:
    > ');

    else break;
}

fwrite (STDOUT, PHP_EOL);

if ($status == 'n')
{
    global $controller;

    fwrite (STDOUT, "\n    Ok :<\n");

    $controller->manager->removePackage ('KRypt0nn/Qero-test-repo');
}
