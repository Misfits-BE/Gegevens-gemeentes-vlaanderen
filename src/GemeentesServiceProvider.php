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
        $source      = __DIR__ . '/stubs/migrations/create_gemeente_table.stub';
        $destination = database_path('migrations/'.date('Y_m_d_His', time()).'_create_media_table.php');

        if (! class_exists('CreateGemeenteTable')) {
            $this->publishes([$source => $destination], 'migrations');
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