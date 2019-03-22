<?php

use Qero\PackagesManager\PackagesManager;

fwrite (STDOUT, '
    Thank for installing [Qero test project]!
    Author: Podvirnyy Nikita

    Are you confirm license agreements? [Y/N]
    > ');

$input = fopen ('php://stdin', 'r');

while (array_search ($status = strtolower (stream_get_contents ($input, 1)), array ('y', 'n')) === false);

fclose ($input);

if ($status == 'n')
{
    global $controller;

    Printer::say ("\nOk :<");

    $controller->manager->deletePackage ('KRypt0nn/Qero-test-repo');
}

?>
