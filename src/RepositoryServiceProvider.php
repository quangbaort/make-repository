<?php

namespace quangbaort;

use Illuminate\Support\ServiceProvider;
use quangbaort\Console\RepositoryMakeCommand;
use quangbaort\Console\RepositoryInterfaceMakeCommand;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $commands = [
        RepositoryMakeCommand::class,
        RepositoryInterfaceMakeCommand::class
    ];
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->commands);
    }
}
