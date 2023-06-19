<?php

namespace App\Providers;

use App\Repository\QuestionType\MysqlRepository as QuestionTypeMysqlRepository;
use App\Repository\QuestionType\RepositoryInterface as QuestionTypeRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        /**
         * Repositories
         */
        $this->app->bind(QuestionTypeRepositoryInterface::class, QuestionTypeMysqlRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
