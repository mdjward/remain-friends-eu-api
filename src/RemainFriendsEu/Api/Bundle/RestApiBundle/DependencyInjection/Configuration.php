<?php

/**
 * Configuration.php
 * Definition of class Configuration
 * 
 * Created 24-Apr-2016 09:01:06
 *
 * @author M.D.Ward <dev@mattdw.co.uk>
 * Copyright (c) 2016, 
 */

namespace RemainFriendsEu\Api\Bundle\RestApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Configuration
 *
 * @author M.D.Ward <dev@mattdw.co.uk>
 */
class Configuration implements ConfigurationInterface
{
    
    /**
     * 
     */
    const BUNDLE_CONFIGURATION_NAME = "remain_friends_eu_rest_api";
    
    
    
    /**
     * 
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $treeBuilder->root(self::BUNDLE_CONFIGURATION_NAME);
        
        return $treeBuilder;
    }
    
}
