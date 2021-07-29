<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Apkepai'],
            ['name' => 'Blynai'],
            ['name' => 'Pyragai, kepiniai'],
            ['name' => 'Desertai, saldumynai'],
            ['name' => 'Uogienės'],
            ['name' => 'Picos'],
            ['name' => 'Sumuštiniai'],
            ['name' => 'Pusryčiams'],
            ['name' => 'Užkandžiai'],
            ['name' => 'Konservuoti patiekalai'],
            ['name' => 'Košės, tyrės'],
            ['name' => 'Padažai, kremai'],
            ['name' => 'Kepsniai'],
            ['name' => 'Troškiniai'],
            ['name' => 'Sriubos'],
            ['name' => 'Salotos, mišrainės'],
            ['name' => 'Vegetariški'],
            ['name' => 'Alkoholiniai gėrimai'],
            ['name' => 'Gėrimai'],
        ];

        foreach ($categories as $key => $value) {
            User::create($value);
        }
    }
}
