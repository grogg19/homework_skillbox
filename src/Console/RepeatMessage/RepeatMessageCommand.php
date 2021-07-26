<?php


namespace App\Console\RepeatMessage;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class RepeatMessageCommand extends Command
{

    protected $requireContent;

    /**
     * конфигурация
     */
    protected function configure()
    {
        $this
            ->setName('repeat_message')
            ->setDescription('Выводит сообщение заданное количество раз')
            ->addArgument('message', InputArgument::REQUIRED, 'Текст сообщения')
            ->addOption('times', null, InputOption::VALUE_OPTIONAL, 'Вывести сообщение указанное количество раз', 2)
        ;
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $result = '';

        for($index = 1; $index <= $input->getOption('times'); $index++) {
            $result .= $input->getArgument('message') . PHP_EOL;
        }

        $output->writeln($result);

        return Command::SUCCESS;
    }
}
