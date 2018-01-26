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

        //绑定BrandRepository
        $this->app->bind(
            \App\Repositories\Brand\BrandRepositoryContract::class,
            \App\Repositories\Brand\BrandRepository::class
        );

        //绑定CategoryRepository
        $this->app->bind(
            \App\Repositories\Category\CategoryRepositoryContract::class,
            \App\Repositories\Category\CategoryRepository::class
        );

        //绑定CarRepository
        $this->app->bind(
            \App\Repositories\Car\CarRepositoryContract::class,
            \App\Repositories\Car\CarRepository::class
        );

        //绑定CustomerRepository
        $this->app->bind(
            \App\Repositories\Customer\CustomerRepositoryContract::class,
            \App\Repositories\Customer\CustomerRepository::class
        );

        //绑定车源图片ImgRepository
        $this->app->bind(
            \App\Repositories\Image\ImageRepositoryContract::class,
            \App\Repositories\Image\ImageRepository::class
        );

        //绑定贷款图片ImgRepository
        $this->app->bind(
            \App\Repositories\ImageInsurance\ImageInsuranceRepositoryContract::class,
            \App\Repositories\ImageInsurance\ImageInsuranceRepository::class
        );

        //绑定保险图片ImgRepository
        $this->app->bind(
            \App\Repositories\ImageLoan\ImageLoanRepositoryContract::class,
            \App\Repositories\ImageLoan\ImageLoanRepository::class
        );

        //绑定WantRepository
        $this->app->bind(
            \App\Repositories\Want\WantRepositoryContract::class,
            \App\Repositories\Want\WantRepository::class
        );

        //绑定ChanceRepository
        $this->app->bind(
            \App\Repositories\Chance\ChanceRepositoryContract::class,
            \App\Repositories\Chance\ChanceRepository::class
        );

        //绑定PlanRepository
        $this->app->bind(
            \App\Repositories\Plan\PlanRepositoryContract::class,
            \App\Repositories\Plan\PlanRepository::class
        );

        //绑定TranscationRepository
        $this->app->bind(
            \App\Repositories\Transcation\TranscationRepositoryContract::class,
            \App\Repositories\Transcation\TranscationRepository::class
        );

        //绑定SaleRepository
        $this->app->bind(
            \App\Repositories\Sale\SaleRepositoryContract::class,
            \App\Repositories\Sale\SaleRepository::class
        );

        //绑定InsuranceRepository
        $this->app->bind(
            \App\Repositories\Insurance\InsuranceRepositoryContract::class,
            \App\Repositories\Insurance\InsuranceRepository::class
        );

        //绑定LoanRepository
        $this->app->bind(
            \App\Repositories\Loan\LoanRepositoryContract::class,
            \App\Repositories\Loan\LoanRepository::class
        );
    }
}
