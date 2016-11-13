<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AccessServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \App\Repositories\User\UserRepositoryContract::class,
            \App\Repositories\User\UserRepository::class
        );
        /*$this->app->bind('UserRepositoryContract', function ($app) {
            return new \App\Repositories\User\UserRepositoryContract($app['UserRepositoryContract']);
        });*/
        $this->app->bind(
            \App\Repositories\Role\RoleRepositoryContract::class,
            \App\Repositories\Role\RoleRepository::class
        );
        $this->app->bind(
            \App\Repositories\Department\DepartmentRepositoryContract::class,
            \App\Repositories\Department\DepartmentRepository::class
        );
        $this->app->bind(
            \App\Repositories\Setting\SettingRepositoryContract::class,
            \App\Repositories\Setting\SettingRepository::class
        );
        $this->app->bind(
            \App\Repositories\Task\TaskRepositoryContract::class,
            \App\Repositories\Task\TaskRepository::class
        );
        $this->app->bind(
            \App\Repositories\Client\ClientRepositoryContract::class,
            \App\Repositories\Client\ClientRepository::class
        );
        $this->app->bind(
            \App\Repositories\Lead\LeadRepositoryContract::class,
            \App\Repositories\Lead\LeadRepository::class
        );
        $this->app->bind(
            \App\Repositories\Invoice\InvoiceRepositoryContract::class,
            \App\Repositories\Invoice\InvoiceRepository::class
        );

        //绑定ShopRepository
        $this->app->bind(
            \App\Repositories\Shop\ShopRepositoryContract::class,
            \App\Repositories\Shop\ShopRepository::class
        );

        //绑定PermissionRepository
        $this->app->bind(
            \App\Repositories\Permission\PermissionRepositoryContract::class,
            \App\Repositories\Permission\PermissionRepository::class
        );

        //绑定NoticeRepository
        $this->app->bind(
            \App\Repositories\Notice\NoticeRepositoryContract::class,
            \App\Repositories\Notice\NoticeRepository::class
        );
    }
}
