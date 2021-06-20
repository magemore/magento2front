<?php


namespace SimplifiedMagento\FirstModule\Console\Command;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloWorl extends Command
{
    public function configure()
    {
        $this->setName('training:hello_world')
            ->setDescription('the command prints out hello world')
            ->setAliases(array('hw'));
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {

    }
}
