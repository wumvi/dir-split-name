<?php

use Wumvi\Utils\DirSplitName;

include __DIR__ . '/../vendor/autoload.php';

echo DirSplitName::get([111, 33]), PHP_EOL;