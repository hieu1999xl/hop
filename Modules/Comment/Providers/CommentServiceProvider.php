<?php

namespace Modules\Comment\Providers;

use Illuminate\Support\ServiceProvider;
use Symfony\Component\Finder\Finder;

class CommentServiceProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->loadMigrationsFrom(module_path('Comment', 'Database/Migrations'));

        // adding global middleware
        $kernel = $this->app->make('Illuminate\Contracts\Http\Kernel');
        //$kernel->pushMiddleware('Modules\Comment\Http\Middleware\GenerateMenus');

        // register commands
        $this->registerCommands('\Modules\Comment\Console');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            module_path('Comment', 'Config/config.php') => config_path('comment.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path('Comment', 'Config/config.php'),
            'comment'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/comment');

        $sourcePath = module_path('Comment', 'Resources/views');

        $this->publishes([
            $sourcePath => $viewPath
        ], 'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/comment';
        }, \Config::get('view.paths')), [$sourcePath]), 'comment');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/comment');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'comment');
        } else {
            $this->loadTranslationsFrom(module_path('Comment', 'Resources/lang'), 'comment');
        }
    }

    /**
     * Register commands.
     *
     * @param string $namespace
     */
    protected function registerCommands($namespace = '')
    {
        $finder = new Finder(); // from Symfony\Component\Finder;
        $finder->files()->name('*.php')->in(__DIR__.'/../Console');

        $classes = [];
        foreach ($finder as $file) {
            $class = $namespace.'\\'.$file->getBasename('.php');
            array_push($classes, $class);
        }

        $this->commands($classes);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
