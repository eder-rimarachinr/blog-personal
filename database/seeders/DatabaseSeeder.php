<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Eder Rimarachin',
            'email'=>'Ederrr2802@gmail.com',
            'password' => bcrypt('yoshimi1#')
        ]);

        Post::factory()->count(5)->create();
    }
}
