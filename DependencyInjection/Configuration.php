<?php

namespace React\IntegrationBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * TinymceBundle configuration structure.
 */
class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree.
     *
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('react_integration');

        $rootNode
            ->children()
                ->integerNode('test1')->end()
                ->booleanNode('test2')->end()
            ->end()
        ;


        return $treeBuilder;
    }
}