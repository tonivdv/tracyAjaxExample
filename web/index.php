<?php
/*
 * This file is part of the Adlogix package.
 *
 * (c) Allan Segebarth <allan@adlogix.eu>
 * (c) Jean-Jacques Courtens <jjc@adlogix.eu>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use Tracy\Debugger;

require_once __DIR__ . '/../vendor/autoload.php';

Debugger::enable(false);

$app = new Silex\Application();

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/../views',
));

$app->get('/', function () use ($app) {

    trigger_error("deprecation error test", E_USER_DEPRECATED);

    return $app['twig']->render('ajax.html.twig');
});

$app->run();