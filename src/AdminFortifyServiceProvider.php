<?php

namespace Soap\AdminFortify;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Soap\AdminFortify\Commands\AdminFortifyCommand;

class AdminFortifyServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('admin-fortify')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_admin-fortify_table')
            ->hasCommand(AdminFortifyCommand::class);
    }
}
