<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;

Admin::routes();

Route::group([
    'prefix' => config('admin.route.prefix'),
    'namespace' => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('users', 'UserController');
    $router->resource('users2', 'UserController');
    $router->resource('users3', 'UserController');
    $router->resource('users4', 'UserController');
    $router->resource('users5', 'UserController');
    $router->resource('user5', 'UserController');
    $router->resource('uses5', 'UserController');
    $router->resource('usrs5', 'UserController');
    $router->resource('uers5', 'UserController');

    $router->resource('set', 'UserController');
    $router->resource('set1', 'UserController');
    $router->resource('set2', 'UserController');
    // 9

});
