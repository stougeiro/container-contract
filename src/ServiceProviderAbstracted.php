<?php declare(strict_types=1);

    namespace STDW\Contract\Container;


    abstract class ServiceProviderAbstracted implements ServiceProviderInterface
    {
        /**
         * @param ContainerInterface $container 
         * @return void 
         */
        final public function __construct(
            protected ContainerInterface $container
        ) { }


        /** @return void 
         */
        abstract public function register(): void;


        /** @return void 
         */
        public function boot(): void
        { }

        /** @return void 
         */
        public function terminate(): void
        { }
    }
