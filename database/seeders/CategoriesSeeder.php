<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Apkepai',
                'slug' => 'apkepai',
            ],
            [
                'name' => 'Blynai',
                'slug' => 'blynai',
            ],
            [
                'name' => 'Pyragai, kepiniai',
                'slug' => 'pyragai kepiniai',
            ],
            [
                'name' => 'Desertai, saldumynai',
                'slug' => 'desertai saldumynai',
            ],
            [
                'name' => 'Uogienės',
                'slug' => 'uogienės',
            ],
            [
                'name' => 'Picos',
                'slug' => 'uogienės',
            ],
            [
                'name' => 'Sumuštiniai',
                'slug' => 'uogienės',
            ],
            [
                'name' => 'Pusryčiams',
                'slug' => 'uogienės',
            ],
            [
                'name' => 'Užkandžiai',
                'slug' => 'uogienės',
            ],
            [
                'name' => 'Konservuoti patiekalai',
                'slug' => 'konservuoti patiekalai',
            ],
            [
                'name' => 'Košės, tyrės',
                'slug' => 'košės tyrės',
            ],
            [
                'name' => 'Padažai, kremai',
                'slug' => 'padažai kremai',
            ],
            [
                'name' => 'Kepsniai',
                'slug' => 'kepsniai',
            ],
            [
                'name' => 'Troškiniai',
                'slug' => 'troškiniai',
            ],
            [
                'name' => 'Sriubos',
                'slug' => 'sriubos',
            ],
            [
                'name' => 'Salotos, mišrainės',
                'slug' => 'salotos mišrainės',
            ],
            [
                'name' => 'Vegetariški',
                'slug' => 'vegetariški',
            ],
            [
                'name' => 'Alkoholiniai gėrimai',
                'slug' => 'alkoholiniai gėrimai',
            ],
            [
                'name' => 'Gėrimai',
                'slug' => 'gėrimai',
            ],
        ];
        foreach ($categories as $key => $value) {
            Category::create($value);
        }
    }
}
