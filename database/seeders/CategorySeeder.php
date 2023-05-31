<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public static function run(): void
    {
        Category::query()->insert([
            [
                "name"=>"Electronics"
            ],
            [
                "name"=>"Home"
            ],
            [
                "name"=>"Men's Fashion"
            ],
            [
                "name"=>"Women's Fashion"
            ],
            [
                "name"=>"Pets"
            ],
            [
                "name"=>"Arts & Crafts"
            ],

        ]);
    }
}
