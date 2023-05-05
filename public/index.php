<?php

if(PHP_MAJOR_VERSION < 8){
    die('Необходима версия php >=8');
}
require_once dirname(__DIR__) . '/config/init.php';

new \mf\App();

//throw new Exception( 'Errorssssss');
echo 'Hello';
