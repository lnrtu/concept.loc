<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('hello', function ($expression) {
            return "<?php echo 'Hello ' . {$expression}; ?>";
        });
        Blade::directive('editor', function ($number) {

            return "<?php echo '<textarea id=\"ckeditor'.{$number}.'\" class=\"ckeditor\"> </textarea><script>KEDITOR.replace( \"ckeditor'.{$number}.'\" );</script>'; ?>";
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
