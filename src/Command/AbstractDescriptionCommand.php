<?php

declare(strict_types=1);

namespace App\Command;

use App\Factory\PositionFactory;
use App\Workers\Position;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class AbstractDescriptionCommand extends AbstractCommand
{
    /**
     * Configures the current command.
     */
    protected function configure(): void
    {
        $position = $this->getPosition();

        $this->setName("worker:{$position}")
            ->setDescription("Describe {$position} abilities");
    }

    /**
     * @param \Symfony\Component\Console\Input\InputInterface   $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $position = PositionFactory::getPosition($this->getPosition());

        if ($position) {
            $this->writeHeader($output);
            $this->writeAbilities($position, $output);
        }

        return 0;
    }

    /**
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     */
    public function writeHeader(OutputInterface $output): void
    {
        $output->writeln([
            'Abilities',
            '=========',
        ]);
    }

    /**
     * @param \App\Workers\Position                             $position
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     */
    protected function writeAbilities(Position $position, OutputInterface $output): void
    {
        $abilities = $position->getAbilities();

        /** @var \App\Abilities\Ability $ability */
        foreach ($abilities as $ability) {
            $name = $ability->getName();

            $output->writeln([
                '- ' . $name,
            ]);
        }
    }
}
