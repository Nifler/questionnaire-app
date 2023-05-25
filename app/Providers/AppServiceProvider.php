<?php

namespace App\Providers;

use App\Repository\QuestionType\MysqlRepository as QuestionTypeMysqlRepository;
use App\Repository\QuestionType\RepositoryInterface as QuestionTypeRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /**
         * Repositories
         */
        $this->app->bind(QuestionTypeRepositoryInterface::class, QuestionTypeMysqlRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
