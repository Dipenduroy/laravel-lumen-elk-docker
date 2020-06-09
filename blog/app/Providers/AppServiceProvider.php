<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Monolog\Formatter\LogstashFormatter;
use Illuminate\Support\Facades\Log;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $_monolog = Log::getLogger();
        $_handler = $_monolog->popHandler();
        $_handler->setFormatter(new LogstashFormatter('blog-api', 'blog-api'));
        $_monolog->pushHandler($_handler);
    }
}
