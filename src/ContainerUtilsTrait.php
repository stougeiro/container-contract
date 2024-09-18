<?php declare(strict_types=1);

    namespace STDW\Container\Contract;


    trait ContainerUtilsTrait
    {
        protected ContainerInterface $container;


        public function make(string $abstract): object
        {
            return $this->container->get($abstract);
        }

        public function bind(string $abstract, callable|string|null $concrete = null): void
        {
            $this->container->set($abstract, $concrete, false);
        }

        public function singleton(string $abstract, callable|string|null $concrete = null): void
        {
            $this->container->set($abstract, $concrete, true);
        }
    }