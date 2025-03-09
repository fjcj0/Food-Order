<?php
namespace Database\Seeders;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(10)->create([
            'name' => fake()->name(),
            'email' => fake()->email(),
            'password' => fake()->password(),
            'username'=>fake()->userName(),
        ]);
    }
}
