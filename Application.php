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

require 'bootstrap.php';

$app->get('/', function() use ($app) {
    return $app['twig']->render('homepage.html.twig');
})->bind('homepage');

return $app;