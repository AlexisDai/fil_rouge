<?php

namespace Container13rLKU5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNavigationControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\NavigationController' shared autowired service.
     *
     * @return \App\Controller\NavigationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/NavigationController.php';

        $container->services['App\\Controller\\NavigationController'] = $instance = new \App\Controller\NavigationController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\NavigationController', $container));

        return $instance;
    }
}
