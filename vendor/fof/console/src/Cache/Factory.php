<?php

namespace FoF\Console\Cache;

use Illuminate\Contracts\Container\Container;

class Factory implements \Illuminate\Contracts\Cache\Factory
{
    /**
     * @var Container
     */
    private $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    /**
     * Get a cache store instance by name.
     *
     * @param  string|null $name
     * @return \Illuminate\Contracts\Cache\Repository
     */
    public function store($name = null)
    {
        return $this->container['cache.store'];
    }
}
