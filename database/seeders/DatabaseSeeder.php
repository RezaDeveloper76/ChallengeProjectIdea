<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $user = \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@localhost',
        ]);

        $user->assignRole('admin');

        // if ($user->hasRole('admin')) {
        //     // do something
        // }
        
        // if ($user->can('view users')) {
        //     // do something
        // }
    }
}
