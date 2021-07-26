<?php

require_once 'bootstrap.php';

use Symfony\Component\Console;
use App\Console\SayHello\SayHelloCommand;

$app = new Console\Application('Say Hello');
$app->add(new SayHelloCommand('say_hello'));

$app->run();
