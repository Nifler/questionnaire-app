<?php

namespace App\Providers;

use App\Repository\Question\MysqlRepository;
use App\Repository\Question\RepositoryInterface;
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
        $this->app->bind(RepositoryInterface::class, MysqlRepository::class);
        $this->app->bind(\App\Repository\Poll\RepositoryInterface::class, \App\Repository\Poll\MysqlRepository::class);
        $this->app->bind(\App\Repository\Respond\RepositoryInterface::class, \App\Repository\Respond\MysqlRepository::class);
        $this->app->bind(\App\Repository\QuestionCondition\RepositoryInterface::class, \App\Repository\QuestionCondition\MysqlRepository::class);
        $this->app->bind(\App\Repository\Answer\RepositoryInterface::class, \App\Repository\Answer\MysqlRepository::class);
        $this->app->bind(\App\Repository\User\RepositoryInterface::class, \App\Repository\User\MysqlRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
