<?php
if (file_exists($_SERVER['DOCUMENT_ROOT'] . $_SERVER['REQUEST_URI'])) {
    return false;
} else {
    require 'imadaem.php';

    $imadaem = new Imadaem\Imadaem(array(
        'dstRoot' => 'api',
        'expires' => 7 * 24 * 60 * 60,
        'logLevel' => E_USER_ERROR,
        'srcRoot' => 'images'));
    $imadaem->run();
}
