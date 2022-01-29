<?php

namespace WovoSchool\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use WovoSchool\Modules\Contracts\RepositoryInterface;
use WovoSchool\Modules\Laravel\LaravelFileRepository;

class ContractsServiceProvider extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, LaravelFileRepository::class);
    }
}
