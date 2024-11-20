<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Technology',
            'Health',
            'Education',
            'Lifestyle',
            'Entertainment',
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category, // Crée un slug unique
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
