<?php

require __DIR__ . '/../vendor/autoload.php';

$config = require 'configuration.php';

return new \Lencse\Rectum\Framework\Application\Bootstrap($config);
