<?php declare(strict_types=1);

    namespace STDW\Container\Contract;

    use Psr\Container\ContainerInterface as PsrContainerInterface;


    interface ContainerInterface extends PsrContainerInterface
    {
        public function set(string $abstract, callable|string|null $concrete = null, bool $shareable = false): void;
    }
