<?php

namespace Database\Seeders;

use App\Models\User;

class DatabaseSeeder
{
    /**
     * Seed the application's database.
     */
    function run()
    {
        // todo : this is not working but I don't know why
        // Add a default user with information (choice by me)
        $user = User::factory()->createOne();

    }
}
