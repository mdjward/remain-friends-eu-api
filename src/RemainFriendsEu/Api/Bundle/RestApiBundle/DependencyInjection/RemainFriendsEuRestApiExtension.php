<?php

/**
 * RemainFriendsEuRestApiExtension.php
 * Definition of class RemainFriendsEuRestApiExtension
 * 
 * Created 24-Apr-2016 09:06:01
 *
 * @author M.D.Ward <dev@mattdw.co.uk>
 * Copyright (c) 2016, 
 */

namespace RemainFriendsEu\Api\Bundle\RestApiBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * RemainFriendsEuRestApiExtension
 *
 * @author M.D.Ward <dev@mattdw.co.uk>
 */
class RemainFriendsEuRestApiExtension extends Extension
{
    
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);
        
        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__ . '/../Resources/config/services')
        );
        
        $loader->load('controllers.yml');
    }

}
