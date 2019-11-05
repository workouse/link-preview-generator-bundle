<?php


namespace Workouse\LinkPreviewGeneratorBundle\Twig;

use Symfony\Component\Templating\EngineInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Workouse\LinkPreviewGenerator\LinkPreviewGenerator;


class LinkPreviewExtension extends AbstractExtension
{
    /** @var EngineInterface */
    private $templatingEngine;

    /** @var string */
    private $cssSelector;

    public function __construct($templatingEngine, string $cssSelector)
    {
        $this->templatingEngine = $templatingEngine;
        $this->cssSelector = $cssSelector;
    }

    public function getFilters()
    {
        return [
            new TwigFilter('generate_previews', [$this, 'generatePreview']),
        ];
    }

    public function generatePreview(string $html)
    {
        $p_generator = LinkPreviewGenerator::create(
            $this->templatingEngine,
            '@LinkPreviewGenerator/preview.html.twig',
            $this->cssSelector
        );
        return $p_generator->generatePreview($html);
    }
}
