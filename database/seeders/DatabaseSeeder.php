<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Bread;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Bread::create([
            'name' => 'Pain Tradition',
            'price' => 2.50,
            'description' => 'Un pain traditionnel, croustillant à lextérieur et moelleux à lintérieur.',
            'image' => ''
        ]);

        Bread::create([
            'name' => 'Baguette',
            'price' => 1.20,
            'description' => 'Une baguette classique, parfaite pour vos repas quotidiens.',
            'image' => ''
        ]);

        Bread::create([
            'name' => 'Pain aux céréales',
            'price' => 3.00,
            'description' => 'Un pain riche en céréales et en graines, idéal pour une alimentation équilibrée.',
            'image' => ''
        ]);
    }
}
