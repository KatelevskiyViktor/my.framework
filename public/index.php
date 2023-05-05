<?php

if(PHP_MAJOR_VERSION < 8){
    die('Необходима версия php >=8');
}
require_once dirname(__DIR__) . '/config/init.php';

new \mf\App();
echo \mf\App::$app->getProperty('pagination');
\mf\App::$app->setProperty('test', 'TEST');
var_dump(\mf\App::$app->getProperties());