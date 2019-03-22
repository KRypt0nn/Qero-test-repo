<?php

use Qero\Printer\Printer;
use Qero\PackagesManager\PackagesManager;

Printer::say ('

Thank for installing [Qero test project]!
Author: Podvirnyy Nikita

Are you confirm license agreements? [Y/N]');

$input = fopen ('php://stdin', 'r');

while (array_search ($status = stream_get_contents ($input, 1), array ('Y', 'N', 'y', 'n')) === false);

fclose ($input);

if (strtolower ($status) == 'n')
{
    global $controller;

    Printer::say ("\nOk :<");

    $controller->manager->deletePackage ('KRypt0nn/Qero-test-repo');
}

?>
