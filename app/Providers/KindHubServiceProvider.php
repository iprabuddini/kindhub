<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class KindHubServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(
            'App\Repositories\ClassRepositoryInterface',
            'App\Repositories\ClassRepository'
        );

        $this->app->bind(
            'App\Repositories\StudentRepositoryInterface',
            'App\Repositories\StudentRepository'
        );

        $this->app->bind(
            'App\Repositories\TeacherRepositoryInterface',
            'App\Repositories\TeacherRepository'
        );
    }
}