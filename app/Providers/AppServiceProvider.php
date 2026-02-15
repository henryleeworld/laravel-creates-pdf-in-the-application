<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use Spatie\LaravelPdf\PdfFactory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /*
        app()->bind(PdfFactory::class, function ($service, $app) {
            return (new PdfFactory())->withBrowsershot(
                function ($browserShot) {
                    $browserShot->setOption(
                        'args', [
                            '--disable-web-security',
                            '--allow-file-access-from-files',
                        ],
                    );
                }
            );
        });
        */
    }
}
