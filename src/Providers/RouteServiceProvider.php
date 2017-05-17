<?php

namespace TypiCMS\Modules\Sitemap\Providers;

use Illuminate\Routing\Router;
use TypiCMS\Modules\Core\Shells\Providers\BaseRouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'TypiCMS\Modules\Sitemap\Shells\Http\Controllers';

    /**
     * Define the routes for the application.
     *
     * @param \Illuminate\Routing\Router $router
     *
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function (Router $router) {
            /*
             * Front office routes
             */
            $router->get('sitemap.xml', 'PublicController@generate')->name('sitemap');
        });
    }
}
