<?php

namespace FoF\Console\Extend;

use FoF\Console\Providers\ConsoleProvider;
use Flarum\Extend\ExtenderInterface;
use Flarum\Extension\Extension;
use Illuminate\Contracts\Container\Container;

class EnableConsole implements ExtenderInterface
{
    public function extend(Container $container, Extension $extension = null)
    {
        $container->register(ConsoleProvider::class);
    }
}
