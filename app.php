<?php

require_once 'bootstrap.php';

use Symfony\Component\Console;
use App\Console\SayHello\SayHelloCommand;
use App\Console\RepeatMessage\RepeatMessageCommand;

$app = new Console\Application('Say Hello');
$app->add(new SayHelloCommand('say_hello'));
use App\Console\Questions\QuestionsCommand;

$app = new Console\Application('Repeat Message');
$app->add(new RepeatMessageCommand());

$app = new Console\Application('Ask Questions');

$app->add(new QuestionsCommand());
$app->run();
