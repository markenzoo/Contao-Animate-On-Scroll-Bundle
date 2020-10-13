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

namespace Markenzoo\ContaoAnimateOnScrollBundle\EventListener\ContentElement;

use Contao\ContentModel;
use Contao\CoreBundle\ServiceAnnotation\Hook;

/**
 * @Hook("getContentElement")
 */
class GetContentElementListener
{
    /**
     * @psalm-suppress UndefinedMethod
     * @psalm-suppress UndefinedConstant
     */
    public function __invoke(ContentModel $contentModel, string $buffer, $element): string
    {
        if (TL_MODE === 'FE') {
            if ($contentModel->addAOS) {
                $doc = new \DOMDocument();
                $doc->loadHTML('<?xml encoding="utf-8" ?>' . $buffer, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
                $domElement = $doc->documentElement;
                $domElement->setAttribute('data-aos', $contentModel->aos);
                $domElement->setAttribute('data-aos-offset', $contentModel->aosOffset);
                $domElement->setAttribute('data-aos-delay', $contentModel->aosDelay);
                $domElement->setAttribute('data-aos-duration', $contentModel->aosDuration);
                $domElement->setAttribute('data-aos-easing', $contentModel->aosEasing);
                $domElement->setAttribute('data-aos-anchor-placement', $contentModel->aosPlacement);
                $domElement->setAttribute('data-aos-mirror', $contentModel->oasMirror ? 'true' : 'false');
                $domElement->setAttribute('data-aos-once', $contentModel->oasOnce ? 'true' : 'false');
                $buffer = $doc->saveHTML($domElement);
            }
        }

        return $buffer;
    }
}
