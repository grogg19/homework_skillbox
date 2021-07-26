<?php

require_once 'bootstrap.php';

use Symfony\Component\Console;
use App\Console\RepeatMessage\RepeatMessageCommand;

$app = new Console\Application('Repeat Message');
$app->add(new RepeatMessageCommand());

$app->run();
