<?php

use Qero\PackagesManager\PackagesManager;

fwrite (STDOUT, '
    Thank for installing [Qero test project]!
    Author: Podvirnyy Nikita

    Are you confirm license agreements? [Y/N]
    > ');

$input = fopen ('php://stdin', 'r');

while (true)
{
    $status = strtolower (stream_get_contents ($input, 1));

    if (array_search ($status, array ('y', 'n')) === false)
        fwrite (STDOUT, '   You pressed unknown character. Please, retry:
    > ');
}

fclose ($input);

if ($status == 'n')
{
    global $controller;

    Printer::say ("\nOk :<");

    $controller->manager->deletePackage ('KRypt0nn/Qero-test-repo');
}

?>
