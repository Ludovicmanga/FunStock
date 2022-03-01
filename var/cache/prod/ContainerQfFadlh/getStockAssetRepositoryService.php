<?php

namespace ContainerQfFadlh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStockAssetRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\StockAssetRepository' shared autowired service.
     *
     * @return \App\Repository\StockAssetRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\StockAssetRepository'] = new \App\Repository\StockAssetRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
