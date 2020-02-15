<?php
    namespace Genericmilk\Element;

    class ServiceProvider extends \Illuminate\Support\ServiceProvider{



        public function boot()
        {
            $this->setupConfig(); // Load config
            $this->loadRoutesFrom(__DIR__.'/routes/web.php'); // Import routes
            $this->loadViewsFrom(__DIR__.'/views', 'element'); // Import biews
        }
        public function register()
        {
            // Import controllers
            $this->app->make('Genericmilk\Element\Element');
            
        }

        protected function setupConfig(){

            $configPath = __DIR__ . '/../config/element.php';
            $this->publishes([$configPath => $this->getConfigPath()], 'config');
    
        }

        protected function getConfigPath()
        {
            return config_path('element.php');
        }

        protected function publishConfig($configPath)
        {
            $this->publishes([$configPath => config_path('element.php')], 'config');
        }


    }