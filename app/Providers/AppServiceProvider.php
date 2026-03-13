<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

    /**
     * Register any application services.
     */
    public function register(): void {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void {

        if(App::environment('production')) {
            URL::forceScheme('https');
        }

        Blade::directive('formatoDinero', function($valor, $decimales = 2){
            return "<?php echo number_format((double)$valor, $decimales, '.', ','); ?>";
        });

    }
}