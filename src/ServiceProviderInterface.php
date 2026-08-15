<?php declare(strict_types=1);

    namespace STDW\Contract\Container;


    interface ServiceProviderInterface
    {
        /** @return void 
         */
        public function register(): void;

        /** @return void 
         */
        public function boot(): void;

        /** @return void 
         */
        public function terminate(): void;
    }
