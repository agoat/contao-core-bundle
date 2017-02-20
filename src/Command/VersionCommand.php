<?php

/*
 * This file is part of Contao.
 *
 * Copyright (c) 2005-2017 Leo Feyer
 *
 * @license LGPL-3.0+
 */

namespace Contao\CoreBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Outputs the Contao version.
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class VersionCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('contao:version')
            ->setDescription('Outputs the Contao version.')
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $packages = $this->getContainer()->getParameter('kernel.packages');

        if (!isset($packages['contao/core-bundle'])) {
            return 1;
        }

        $output->writeln($packages['contao/core-bundle']);

        return 0;
    }
}
