<?php

require_once 'bootstrap.php';

use Symfony\Component\Console;
use App\Console\SayHello\SayHelloCommand;
use App\Console\RepeatMessage\RepeatMessageCommand;
use App\Console\Questions\QuestionsCommand;

$app = new Console\Application('Big program');

$app->add(new SayHelloCommand());
$app->add(new RepeatMessageCommand());
$app->add(new QuestionsCommand());

$app->run();
