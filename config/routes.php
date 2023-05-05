<?php
use mf\Router;

Router::add('^admin/?$', ['controller' => 'Main', 'action' => 'index', 'admin_prefix' =>
    'admin']);
Router::add('^admin/(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['controller' =>
    'Main', 'action' => 'index', 'admin_prefix' => 'admin']);
Router::add('^$', ['controller' => 'Main', 'action' => 'index']); //empty string
Router::add('^(?P<controller>[a-z-]+)/(?P<action>[a-z-]+)/?$');