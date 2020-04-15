<?php /** @noinspection ReturnFalseInspection */
declare(strict_types=1);

namespace Advanced\UserBundle;

use Doctrine\Bundle\DoctrineBundle\DependencyInjection\Compiler\DoctrineOrmMappingsPass;
use Doctrine\Bundle\MongoDBBundle\DependencyInjection\Compiler\DoctrineMongoDBMappingsPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use function class_exists;
use function realpath;

/**
 * Class AdvancedUserBundle
 * @package Advanced\UserBundle
 */
class AdvancedUserBundle extends Bundle
{
    /** @var string DOCTRINE_MAPPING_LOCATION */
    private const DOCTRINE_MAPPING_LOCATION = '/Resources/config/doctrine/';

    /**
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container): void
    {
        parent::build($container);

        $this->addRegisterMappingsPass($container);
    }

    /**
     * @param ContainerBuilder $container
     */
    private function addRegisterMappingsPass(ContainerBuilder $container): void
    {
        if (class_exists(DoctrineOrmMappingsPass::class))
        {
            $mappings = array(realpath(__DIR__ . self::DOCTRINE_MAPPING_LOCATION . 'orm') => 'Advanced\UserBundle\Entity');
            $container->addCompilerPass(DoctrineOrmMappingsPass::createXmlMappingDriver($mappings, ['advanced_user.model_manager_name'], 'advanced_user.backend_type_orm'));
        }

        if (class_exists(DoctrineMongoDBMappingsPass::class))
        {
            $mappings = array(realpath(__DIR__ . self::DOCTRINE_MAPPING_LOCATION . 'odm') => 'Advanced\UserBundle\Document');
            $container->addCompilerPass(DoctrineMongoDBMappingsPass::createXmlMappingDriver($mappings, ['advanced_user.model_manager_name'], 'advanced_user.backend_type_mongodb'));
        }
    }
}
