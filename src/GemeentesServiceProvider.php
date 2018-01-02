<?php 

namespace Misfits\Gemeentes; 

class GemeentesServiceProvider 
{
    /**
     * Bootstrap the application events. 
     * 
     * @return void
     */
    public function boot(): void 
    {
        if (! class_exists('CreateGemeenteTable')) {
            $this->publishes([
                __DIR__ . '/stubs/migrations/create_gemeente_table.stub' => database_path('migrations/'.date('Y_m_d_His', time()).'_create_media_table.php')
            ], 'migrations');
        }
    }

    /**
     * Register the service provider 
     * 
     * @return void
     */
    public function register(): void
    {
        //
    }
}