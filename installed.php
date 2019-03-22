<?php

use Qero\PackagesManager\PackagesManager;

fwrite (STDOUT, '
    Thank for installing [Qero test project]!
    Author: Podvirnyy Nikita

    Are you confirm license agreements? [Y/N]
    > ');

while (true)
{
    $status = strtolower (stream_get_contents ($input = fopen ('php://stdin', 'r'), 1));
    fclose ($input);

    if (array_search ($status, array ('y', 'n')) === false)
        fwrite (STDOUT, '   You pressed unknown character. Please, retry:
    > ');

    else break;
}

if ($status == 'n')
{
    global $controller;

    fwrite (STDOUT, "\n    Ok :<");

    $controller->manager->deletePackage ('KRypt0nn/Qero-test-repo');
}

?>
