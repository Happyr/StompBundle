<?php

namespace HappyR\StompBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode=$treeBuilder->root('happy_r_stomp');

        $rootNode
            ->children()
            ->scalarNode('borker_uri')->defaultValue('tcp://localhost:61613')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
