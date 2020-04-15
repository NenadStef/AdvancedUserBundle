<?php declare(strict_types=1);

namespace Advanced\UserBundle\DependencyInjection;

use JsonException;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use function json_encode;
use function method_exists;

/**
 * Class Configuration
 * @package Advanced\UserBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{
    /** @var array|string[] $supportedDrivers */
    private static array $supportedDrivers = ['orm', 'mongodb', 'custom'];

    /**
     * @return TreeBuilder
     * @throws JsonException
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('advanced_user');
        if (method_exists($treeBuilder, 'getRootNode'))
        {
            $rootNode = $treeBuilder->getRootNode();
        } else {
            /** @noinspection PhpUndefinedMethodInspection */
            $rootNode = $treeBuilder->root('advanced_user');
        }

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
            ->end()
        ;

        return $treeBuilder;
    }
}