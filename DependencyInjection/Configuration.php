<?php


namespace Workouse\LinkPreviewGeneratorBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('workouse_link_preview_generator');
        $treeBuilder->getRootNode()
            ->children()
            ->scalarNode('cssSelector')->defaultValue('generated-previews')->end()
            ->end();

        return $treeBuilder;
    }
}
