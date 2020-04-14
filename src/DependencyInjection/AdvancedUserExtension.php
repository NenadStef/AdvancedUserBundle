<?php declare(strict_types=1);

namespace Advanced\UserBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Alias;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

/**
 * Class AdvancedUserExtension
 * @package Advanced\UserBundle\DependencyInjection
 */
class AdvancedUserExtension extends Extension
{
    /** @var array|\string[][] $doctrineDrivers */
    private static array $doctrineDrivers = array(
        'orm' => array(
            'registry' => 'doctrine',
            'tag' => 'doctrine.event_subscriber'
        ),
        'mongodb' => array(
            'registry' => 'doctrine_mongodb',
            'tag' => 'doctrine_mongodb.odm.event_subscriber'
        )
    );

    public function load(array $configs, ContainerBuilder $container): void
    {
        $processor = new Processor();
        $configuration = new Configuration();
        $config = $processor->processConfiguration($configuration, $configs);

        $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));

        if ('custom' !== $config['db_driver'])
        {
            if (isset(self::$doctrineDrivers[$config['db_driver']]))
            {
                $loader->load('doctrine.xml');
                $container->setAlias('advanced_user.doctrine_registry', new Alias(self::$doctrineDrivers[$config['db_driver']]['registry'], false));
            } else {
                $loader->load(sprintf('%s.xml', $config['db_driver']));
            }
            $container->setParameter($this->getAlias() . '.backend_type_' . $config['db_driver'], true);
        }

        if (isset(self::$doctrineDrivers[$config['db_driver']]))
        {
            $definition = $container->getDefinition('advanced_user.object_manager');
            $definition->setFactory(array(new Reference('advanced_user.doctrine_registry'), 'getManager'));
        }
    }
}