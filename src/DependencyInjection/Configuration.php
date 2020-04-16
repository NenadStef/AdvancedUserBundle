<?php
/** @noinspection PhpUndefinedClassInspection */
/** @noinspection PhpUndefinedMethodInspection */
/** @noinspection NullPointerExceptionInspection */
declare(strict_types=1);

namespace Advanced\UserBundle\DependencyInjection;

use JsonException;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\NodeDefinition;
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
    /** @var string ALIAS */
    private const ALIAS = 'advanced_user';

    /** @var string DB_DRIVER */
    private const DB_DRIVER = 'db_driver';

    /** @var string CHARSET */
    private const CHARSET = 'charset';

    /** @var string COLLATE */
    private const COLLATE = 'collate';

    /** @var string DEFAULT_CHARSET */
    private const DEFAULT_CHARSET = 'utf8mb4';

    /** @var string DEFAULT_COLLATE */
    private const DEFAULT_COLLATE = 'utf8mb4_unicode_ci';

    /** @var array|string[] $supportedDrivers */
    private static array $supportedDrivers = ['orm', 'mongodb', 'custom'];

    /**
     * @return TreeBuilder
     * @throws JsonException
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder(self::ALIAS);

        /** @var ArrayNodeDefinition $rootNode */
        $rootNode = $this->getRootNode($treeBuilder);

        $this->checkDbDriver($rootNode);
        $this->checkCharsetAndCollation($rootNode);


//        if (method_exists($treeBuilder, 'getRootNode'))
//        {
//            $rootNode = $treeBuilder->getRootNode();
//        } else {
//
//            $rootNode = $treeBuilder->root('advanced_user');
//        }

//        $rootNode
//            ->children()
//                ->scalarNode('db_driver')
//                    ->validate()
//                        ->ifNotInArray(self::$supportedDrivers)
//                        ->thenInvalid('The driver %s is not supported. Please choose one of ' . json_encode(self::$supportedDrivers, JSON_THROW_ON_ERROR, 512))
//                    ->end()
//                    ->cannotBeOverwritten()
//                    ->isRequired()
//                    ->cannotBeEmpty()
//                ->end()
////                ->arrayNode('table_options')
////                    ->children()
////                        ->scalarNode('charset')->defaultValue('utf8mb4')->end()
////                        ->scalarNode('collate')->defaultValue('utf8mb4_unicode_ci')->end()
////                    ->end()
////                ->end()
//            ->end()
//        ;

        return $treeBuilder;
    }

    private function checkCharsetAndCollation(ArrayNodeDefinition $nodeDefinition): void
    {
        $nodeDefinition
            ->children()
                ->addDefaultsIfNotSet()
                ->canBeUnset()
                ->scalarNode(self::CHARSET)->defaultValue(self::DEFAULT_CHARSET)->end()
                ->scalarNode(self::COLLATE)->defaultValue(self::DEFAULT_COLLATE)->end()
            ->end()
        ;
    }

    /**
     * @param ArrayNodeDefinition $nodeDefinition
     * @throws JsonException
     */
    private function checkDbDriver(ArrayNodeDefinition $nodeDefinition): void
    {
        $message = 'The driver %s is not supported. Please choose one of ';
        $message .= json_encode(self::$supportedDrivers, JSON_THROW_ON_ERROR, 512);

        $nodeDefinition
            ->children()
                ->scalarNode(self::DB_DRIVER)
                    ->validate()
                        ->ifNotInArray(self::$supportedDrivers)
                        ->thenInvalid($message)
                    ->end()
                    ->cannotBeOverwritten()
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
            ->end()
        ;
    }

    /**
     * @param TreeBuilder $treeBuilder
     * @return NodeDefinition
     */
    private function getRootNode(TreeBuilder $treeBuilder): NodeDefinition
    {
        return method_exists($treeBuilder, 'getRootNode') ?
            $treeBuilder->getRootNode() :
            $treeBuilder->root(self::ALIAS)
        ;
    }
}
