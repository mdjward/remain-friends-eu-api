<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../var/lib/autoload.php';

AnnotationRegistry::registerLoader([$loader, 'loadClass']);

return $loader;
