<?php

namespace Example\MyAddon;

use Statamic\Facades\CP\Nav;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $routes = [
        'cp' => __DIR__ . '/../routes/cp.php',
    ];
    public function bootAddon()
    {
        Nav::extend(static function ($nav) {
            $section = 'My Addon';
            $nav->create('Test Page')
                ->section($section)
                ->route('addon')
                ->icon('cog');
        });
    }
}
