<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeDirectiveServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Blade::directive('table', function ($expression) {
            echo '<table>';
            echo '<tr>';
            echo '<th>id</th>';
            echo '<th>name</th>';
            echo '<th>email</th>';
            echo '<th>password</th>';
            foreach ($expression as $user) {
                echo $user;
                echo '</tr>';
                echo '<th>' . $expression->id . '</th>';
                echo '<th>' . $expression->name . '</th>';
                echo '<th>' . $expression->email . '</th>';
                echo '<th>' . $expression->password . '</th>';
            }
            echo '</table>';
        });
    }
}
