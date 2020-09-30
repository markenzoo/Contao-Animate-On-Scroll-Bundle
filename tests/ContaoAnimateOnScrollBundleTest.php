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

namespace Markenzoo\ContaoAnimateOnScrollBundle\Tests;

use Markenzoo\ContaoAnimateOnScrollBundle\ContaoAnimateOnScrollBundle;
use PHPUnit\Framework\TestCase;

class ContaoAnimateOnScrollBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new ContaoAnimateOnScrollBundle();

        $this->assertInstanceOf('Markenzoo\ContaoAnimateOnScrollBundle\ContaoAnimateOnScrollBundle', $bundle);
    }
}
