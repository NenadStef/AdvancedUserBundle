<?php declare(strict_types=1);

namespace NenadStef\AdvancedUserBundle\DependencyInjection;

use JsonException;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use function json_encode;

/**
 * Class Configuration
 * @package NenadStef\AdvancedUserBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{
    /** @var array|string[] $supportedDrivers */
    private static array $supportedDrivers = ['orm', 'mongodb', 'custom'];

    /**
     * @return TreeBuilder|void
     * @throws JsonException
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('advanced_user');
        $rootNode = $treeBuilder->getRootNode();

        $rootNode
            ->children()
                ->scalarNode('db_driver')
                    ->validate()
                        ->ifNotInArray(self::$supportedDrivers)
                        ->thenInvalid('The driver %s is not supported. Please choose one of ' . json_encode(self::$supportedDrivers, JSON_THROW_ON_ERROR, 512))
                    ->end()
                    ->cannotBeOverwritten()
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
        ;
    }
}