<?php

namespace Database\Seeders;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public static function run(): void
    {
        Product::query()->insert([

            // Electronics
            [
                'title' => 'Mac Book Air with I Phone (mobile phone) and free coffee',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'image' => 'https://picsum.photos/id/8/900/960',
                'price' => 899.99,
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'title' => 'Used computer parts from a broken machine (refurbished)',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'image' => 'https://picsum.photos/id/36/900/960',
                'price' => 89.59,
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'title' => 'Desktop computer with 2 year warranty (2 week discount)',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'image' => 'https://picsum.photos/id/60/900/960',
                'price' => 1237.50,
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'title' => 'Mac Book Pro / Intel Core I7 / 2 Tera Storage',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'image' => 'https://picsum.photos/id/119/900/960',
                'price' => 1950.98,
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'title' => 'IPhone 14 Next Gen / 128 mb storage',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'image' => 'https://picsum.photos/id/160/900/960',
                'price' => 999.99,
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'title' => 'Dell Laptop / Intel Core I5 / 1.5 Tera Storage',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'image' => 'https://picsum.photos/id/180/900/960',
                'price' => 789.99,
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'title' => 'Mac Book Air with FREE Mouse and Glasses to help you see better / Intel Core I5 / 1.5 Tera Storage',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'image' => 'https://picsum.photos/id/201/900/960',
                'price' => 789.99,
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Home
            [
                'title' => 'Stylish Tea and Coffee maker for any modern home / 2 year money back guarantee',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'image' => 'https://picsum.photos/id/225/900/960',
                'price' => 24.56,
                'category_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'title' => 'Mini Cactus for your bathroom or kitchen area',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'image' => 'https://picsum.photos/id/248/900/960',
                'price' => 29.95,
                'category_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'title' => 'Tools for making your garden more stylish',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'image' => 'https://picsum.photos/id/284/900/960',
                'price' => 119.99,
                'category_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'title' => 'Honey pot and spoon for making the perfect cup of tea',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'image' => 'https://picsum.photos/id/312/900/960',
                'price' => 12.29,
                'category_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'title' => 'Large salad bowl for entertaining guests on the weekend',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'image' => 'https://picsum.photos/id/488/900/960',
                'price' => 17.99,
                'category_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Men's Fashion
            [
                'title' => 'Multiple items of Men\'s clothes for any occasion',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'image' => 'https://picsum.photos/id/535/900/960',
                'price' => 135.99,
                'category_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'title' => 'Hiking gear / Winter water proof rain coat',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'image' => 'https://picsum.photos/id/669/900/960',
                'price' => 135.99,
                'category_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Women's Fashion
            [
                'title' => 'Brown boots for a casual setting',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'image' => 'https://picsum.photos/id/604/900/960',
                'price' => 85.95,
                'category_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'title' => 'Worn blue denim shirt / casual style',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'image' => 'https://picsum.photos/id/628/900/960',
                'price' => 85.95,
                'category_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'title' => 'Stylish white dress for every occasion',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'image' => 'https://picsum.photos/id/656/900/960',
                'price' => 109.95,
                'category_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'title' => 'Women\'s water proof rain coat / Winter',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'image' => 'https://picsum.photos/id/786/900/960',
                'price' => 135.99,
                'category_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Pets
            [
                'title' => 'Real Reindeer from the north pole',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'image' => 'https://picsum.photos/id/790/900/960',
                'price' => 2449.99,
                'category_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'title' => 'Cute dog to show off to your friends',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'image' => 'https://picsum.photos/id/837/900/960',
                'price' => 2449.99,
                'category_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'title' => 'Bambi / Limited editon for the winter sale',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'image' => 'https://picsum.photos/id/1003/900/960',
                'price' => 2449.99,
                'category_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'title' => 'A cold puppy in a blanket / (blanket not free)',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'image' => 'https://picsum.photos/id/1062/900/960',
                'price' => 59.99,
                'category_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'title' => 'A Lion to guard your home from intruders',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'image' => 'https://picsum.photos/id/1074/900/960',
                'price' => 3999.99,
                'category_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Arts & Crafts
            [
                'title' => 'Build this white chair for your garden',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'image' => 'https://picsum.photos/id/268/900/960',
                'price' => 74.99,
                'category_id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'title' => 'Black and white picture of the city',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'image' => 'https://picsum.photos/id/321/900/960',
                'price' => 34.99,
                'category_id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'title' => 'Picture of the forest in the summer time',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'image' => 'https://picsum.photos/id/324/900/960',
                'price' => 29.99,
                'category_id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);

    }
}
