<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ResponseMacroServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Response::macro('api', function ($code, $message, $result) {
            Response::json([
                'code' => $code,
                'message' => $message,
                'result' => $result,
            ]);
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
