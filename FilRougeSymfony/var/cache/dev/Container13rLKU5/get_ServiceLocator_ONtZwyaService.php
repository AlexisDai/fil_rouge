<?php

namespace Container13rLKU5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ONtZwyaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ONtZwya' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ONtZwya'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'produitRepository' => ['privates', 'App\\Repository\\ProduitRepository', 'getProduitRepositoryService', true],
        ], [
            'produitRepository' => 'App\\Repository\\ProduitRepository',
        ]);
    }
}
