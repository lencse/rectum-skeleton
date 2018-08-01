<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../vendor/lencse/rectum/src/functions.php';

function createBootstrap(): \Lencse\Rectum\Framework\Application\ApplicationSetup {
    $config = require 'configuration.php';
    return new \Lencse\Rectum\Framework\Application\ApplicationSetup($config);
}
