<?php

namespace FikriMastor\Recoverable;

use FikriMastor\Recoverable\Commands\RecoverableCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class RecoverableServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('recoverable')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_recoverable_table')
            ->hasCommand(RecoverableCommand::class);
    }
}
