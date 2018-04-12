<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    $router->resource('prolms', ProlmController::class);
    $router->resource('procos', ProcoController::class);
    
    $router->resource('team', TeamlmController::class);
    
    $router->resource('articles', ArticleController::class);
    
    $router->resource('painters', PainterController::class);
    
    $router->resource('partners', PartnerController::class);
    
    $router->resource('infos', InfolmController::class);
    
    $router->resource('newlms', NewlmController::class);
    $router->resource('newcos', NewcoController::class);
    //$router->resource('service', ServiceController::class);
    $router->resource('serlm', SerlmController::class);
    $router->resource('serco', SercoController::class);
});
