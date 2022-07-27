<?php

namespace ContainerIUpTgkn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QXb2VJWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QXb2VJW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QXb2VJW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'produit' => ['privates', '.errored..service_locator.QXb2VJW.App\\Entity\\Produit', NULL, 'Cannot autowire service ".service_locator.QXb2VJW": it references class "App\\Entity\\Produit" but no such service exists.'],
            'produitRepository' => ['privates', 'App\\Repository\\ProduitRepository', 'getProduitRepositoryService', true],
            'repo' => ['privates', 'App\\Repository\\RubriqueRepository', 'getRubriqueRepositoryService', true],
        ], [
            'produit' => 'App\\Entity\\Produit',
            'produitRepository' => 'App\\Repository\\ProduitRepository',
            'repo' => 'App\\Repository\\RubriqueRepository',
        ]);
    }
}
