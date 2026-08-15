<?php declare(strict_types=1);

    namespace STDW\Contract\Container;


    interface ServiceManagerInterface
    {
        /**
         * @param ServiceProviderInterface $provider 
         * @return void 
         */
        public function add(ServiceProviderInterface $provider): void;

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
