<?php


namespace App\Console\Questions;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\Question;

class QuestionsCommand extends Command
{
    protected $requireContent;

    /**
     * конфигурация
     */
    protected function configure()
    {
        $this
            ->setName('quest')
            ->setDescription('Сбор персональных данных')
            ->setHelp('Собирает персональные данные')
        ;
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');

        $questions['name'] = new Question("Введите ваше имя: ");
        $questions['age'] = new Question("Введите ваш возраст: ");
        $questions['sex'] = new ChoiceQuestion("Ваш пол (м): ", ['М', 'Ж'], 0);
        $questions['sex']->setErrorMessage('Пол %s неверный.');

        foreach ($questions as $key => $question) {
            $answer[$key] = $helper->ask($input, $output, $question);
        }

        $output->writeln('Здравствуйте, ' . $answer['name'] . '. Ваш возраст: ' . $answer['age'] . ' Ваш пол: ' . $answer['sex']);

        return Command::SUCCESS;
    }
}
