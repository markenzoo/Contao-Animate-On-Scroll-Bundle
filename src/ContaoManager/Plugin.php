<?php

declare(strict_types=1);

/*
 * This file is part of markenzoo/contao-animate-on-scroll-bundle.
 *
 * Copyright (c) Felix Kästner
 *
 * @package   markenzoo/contao-animate-on-scroll-bundle
 * @author    Felix Kästner <hello@felix-kaestner.com>
 * @copyright 2020 Felix Kästner
 * @license   https://github.com/markenzoo/contao-animate-on-scroll-bundle/blob/main/LICENSE MIT
 */

namespace Markenzoo\ContaoAnimateOnScrollBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Markenzoo\ContaoAnimateOnScrollBundle\ContaoAnimateOnScrollBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoAnimateOnScrollBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
