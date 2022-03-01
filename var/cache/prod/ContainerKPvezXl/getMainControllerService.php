<?php

namespace ContainerKPvezXl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMainControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\MainController' shared autowired service.
     *
     * @return \App\Controller\MainController
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['App\\Repository\\StockRepository'] ?? $container->load('getStockRepositoryService'));
        $b = ($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService'));
        $c = ($container->privates['App\\Repository\\BattleRepository'] ?? $container->load('getBattleRepositoryService'));
        $d = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService'));

        $container->services['App\\Controller\\MainController'] = $instance = new \App\Controller\MainController($a, $b, $c, $d, new \App\Services\BattleService($d, $b, $c, $a), new \App\Services\UserService($d, $b));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\MainController', $container));

        return $instance;
    }
}