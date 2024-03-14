<?php

namespace TengSambo\LaravelReport;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use TengSambo\LaravelReport\Commands\LaravelReportCommand;

class LaravelReportServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-report')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-report_table')
            ->hasCommand(LaravelReportCommand::class);
    }
}
