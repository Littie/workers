<?php

declare(strict_types=1);

namespace App\Command;

use App\Abilities\Ability;
use App\Factory\AbilityFactory;
use App\Factory\PositionFactory;
use App\Positions\Position;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class AbstractAbilityCommand extends AbstractCommand
{
    /**
     * Configures the current command.
     */
    protected function configure()
    {
        $position = $this->getPosition();

        $this->setName("can:{$position}")
            ->setDescription("Check if {$position} has ability")
            ->addArgument('ability', InputArgument::REQUIRED, 'Enter ability name');
    }

    /**
     * @param \Symfony\Component\Console\Input\InputInterface   $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $position = PositionFactory::getPosition($this->getPosition());
        $ability  = AbilityFactory::getAbility($input->getArgument('ability'));

        if ($position && $ability) {
            $this->writeHeader($ability, $output);
            $this->checkAbility($position, $ability, $output);
        } else {
            $output->writeln([
                'Incorrect position or ability'
            ]);
        }

        return 0;
    }

    /**
     * @param \App\Abilities\Ability                            $ability
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     */
    public function writeHeader(Ability $ability, OutputInterface $output): void
    {
        $output->writeln([
            'Can ' . $ability->getName(),
            '=========',
        ]);
    }

    /**
     * @param \App\Positions\Position                           $position
     * @param \App\Abilities\Ability                            $ability
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     */
    protected function checkAbility(Position $position, Ability $ability, OutputInterface $output): void
    {
        $output->writeln([
            var_export($position->hasAbility($ability)),
        ]);
    }
}
