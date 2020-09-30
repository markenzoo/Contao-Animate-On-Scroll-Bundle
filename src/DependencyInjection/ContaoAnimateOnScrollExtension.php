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

namespace Markenzoo\ContaoAnimateOnScrollBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class ContaoAnimateOnScrollExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container): void
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));

        $loader->load('services.yml');
        $loader->load('listener.yml');
    }
}
