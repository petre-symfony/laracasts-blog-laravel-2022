<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $userA = User::factory()->create([
            'name' => 'John Doe'
        ]);

        $userB = User::factory()->create();

        Post::factory(40)->create([
            'user_id' => $userA->id
        ]);

        Post::factory(3)->create([
            'user_id' => $userB->id
        ]);
    }
}
