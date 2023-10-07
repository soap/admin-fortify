<?php

namespace Soap\AdminFortify;

use Laravel\Fortify\Fortify;
use Soap\AdminFortify\Commands\AdminFortifyCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->publishesServiceProvider('AdminFortifyServiceProvider')
            ->hasCommand(AdminFortifyCommand::class);

    }

<<<<<<< HEAD
    public function boot()
    {
        if (request()->is('admin/*')) {
            Fortify::viewPrefix('admin.auth.');
        } else {
            Fortify::viewPrefix('auth.');
        }
    }
=======
>>>>>>> 056e47a (Publishs Add\Provider\AdminFortifyServiceProvider)
}
