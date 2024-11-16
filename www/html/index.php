<?php

declare(strict_types=1);

require_once '/vendor/autoload.php'; // composer
require_once '../src/autoload.php'; // for Project

use Relnaggar\Veloz\Config;
use Project\App;

Config::getInstance()->set('sourceDirectory', __DIR__ . '/../src/');
$app = new App();
$app->run();
