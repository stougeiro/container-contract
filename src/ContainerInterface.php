<?php declare(strict_types=1);

    namespace STDW\Contract\Container;

    use Psr\Container\ContainerInterface as PsrContainerInterface;


    interface ContainerInterface extends PsrContainerInterface
    {
        /**
         * @param string $id 
         * @param callable|string|null $implementation 
         * @param bool $shareable 
         * @return void 
         */
        public function set(string $id, callable|string|null $implementation = null, bool $shareable = false): void;

        /**
         * @param string $id 
         * @param callable|string|null $implementation 
         * @return void 
         */
        public function bind(string $id, callable|string|null $implementation = null): void;

        /**
         * @param string $id 
         * @param callable|string|null $implementation 
         * @return void 
         */
        public function singleton(string $id, callable|string|null $implementation = null): void;
    }
