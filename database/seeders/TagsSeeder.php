<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Données pour les tags
        $tags = [
            'Laravel',
            'PHP',
            'JavaScript',
            'Fitness',
            'Wellness',
            'AI',
            'Machine Learning',
            'Travel',
        ];

        foreach ($tags as $tag) {
            DB::table('tags')->insert([
                'name' => $tag,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
