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
//        Blade::directive('editor', function ($number) {
//
/*            return "<?php echo '<textarea id=\"ckeditor'.{$number}.'\" class=\"ckeditor\"></textarea><script>KEDITOR.replace( \"ckeditor'.{$number}.'\" );</script>'; ?>";*/
//        });

        Blade::directive('editor', function ($name) {

            return "<?php echo '<script>CKEDITOR.replace( \"'.{$name}.'\" );</script>'; ?>";
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
