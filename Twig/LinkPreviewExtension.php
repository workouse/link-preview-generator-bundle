<?php


namespace Workouse\LinkPreviewGeneratorBundle\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Workouse\LinkPreviewGenerator\LinkPreviewGenerator;


class LinkPreviewExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('content_title', [$this, 'generatePreview']),
        ];
    }

    public function generatePreview(string $html)
    {
        $p_generator = LinkPreviewGenerator::create();
        return $p_generator->generatePreview($html);
    }
}
