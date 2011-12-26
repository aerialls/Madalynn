<?php

/*
 * This file is part of the Madalynn website.
 *
 * (c) 2010-2011 Julien Brochet <mewt@madalynn.eu>
 * (c) 2010-2011 Sébastien Brochet <blinkseb@madalynn.eu>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once __DIR__.'/vendor/silex.phar';

$app = new Silex\Application();

$app['autoloader']->registerNamespaces(array(
    'Madalynn'   => __DIR__.'/src',
    'Plum\Silex' => __DIR__.'/vendor/plum-service-provider/src',
    'Plum'       => __DIR__.'/vendor/plum/src'
));

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path'       => __DIR__.'/views',
    'twig.class_path' => __DIR__.'/vendor/twig/lib',
));

$app->register(new Silex\Provider\UrlGeneratorServiceProvider());

if (!file_exists(__DIR__.'/config.php')) {
    throw new RuntimeException('You must create your own configuration file.');
}

// Configuration file
require_once __DIR__.'/config.php';