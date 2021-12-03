<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

// set plugin stuff : )
Router::plugin('Wgr/Postfinance',['path' => '/postfinance'],function (RouteBuilder $routes){
  $routes->fallbacks('DashedRoute');
});
