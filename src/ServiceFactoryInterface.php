<?php declare(strict_types=1);

    namespace STDW\Contract\Container;


    interface ServiceFactoryInterface
    {
        /**
         * @param ContainerInterface $container 
         * @return static 
         */
        public static function factory(ContainerInterface $container): static;
    }
