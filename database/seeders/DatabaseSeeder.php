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
        \App\Models\User::factory(3)->create()->each(function($u){
            $u->questions()
                ->saveMany(
                    \App\Models\Question::factory(rand(1,5))->make()
                );
        });
    }
}
