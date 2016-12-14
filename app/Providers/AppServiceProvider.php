<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('nl2p', function ($string) {

            $paragraphs = explode("\n", $string);
            for ($i = 0; $i < count ($paragraphs); $i++){
                 $paragraphs[$i] = '<p>' . $paragraphs[$i] . '</p>';
            }
            $paragraphs = implode ('', $paragraphs);
            dd("<?php echo '" . $paragraphs . "'; ?>");
            return "<?php echo '" . $paragraphs . "'; ?>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
