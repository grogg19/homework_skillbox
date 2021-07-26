<?php

require_once 'bootstrap.php';

use Symfony\Component\Console;
use App\Console\Questions\QuestionsCommand;

$app = new Console\Application('Ask Questions');

$app->add(new QuestionsCommand());
$app->run();
