<?php

namespace ContainerQfFadlh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBattleControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\BattleController' shared autowired service.
     *
     * @return \App\Controller\BattleController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\BattleController'] = $instance = new \App\Controller\BattleController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\BattleController', $container));

        return $instance;
    }
}
