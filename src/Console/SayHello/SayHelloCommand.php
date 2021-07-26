<?php


namespace App\Console\SayHello;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SayHelloCommand extends Command
{
    /**
     * конфигурация
     */
    protected function configure()
    {
        $this
            ->setName('say_hello')
            ->setDescription('Выводит сообщение "Привет <argument>')
            ->addArgument('anyone', InputArgument::REQUIRED, 'Кто-то или что-то, кому привет')

        ;
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $result = "Привет " . $input->getArgument('anyone');
        $output->writeln($result);

        return Command::SUCCESS;
    }
}