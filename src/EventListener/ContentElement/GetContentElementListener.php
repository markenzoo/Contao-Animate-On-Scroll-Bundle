<?php

namespace Markenzoo\ContaoAnimateOnScrollBundle\EventListener\ContentElement;

use Contao\CoreBundle\ServiceAnnotation\Hook;
use Contao\ContentElement;
use Contao\ContentModel;

/**
 * @Hook("getContentElement")
 */
class GetContentElementListener
{
    public function __invoke(ContentModel $contentModel, string $buffer, $element): string
    {
        if (TL_MODE == 'FE' ) {
            if ($contentModel->addAOS) {
                $doc = new \DOMDocument();
                $doc->loadHTML($buffer);
                $domElement = $doc->documentElement /* html */ ->firstChild /* body */ ->firstChild /* [class^="ce_"] */;
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