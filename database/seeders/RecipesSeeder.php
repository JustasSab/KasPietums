<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recipe;

class RecipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Recipe::create([
            'name' => 'Varškės ir manų apkepas',
            'slug' => 'varškės ir manų apkepas',
            'ingredients' => '500g. varškės, ',
            'description' => 'Skanus apkepas',
            'preparation' => 'Viską išmaišyti - gaunasi gana skysta tešla. Supilti į pateptą sviestu formą ir kepti iki 180C įkaitintoje orkaitėje 30-40 min. šiek tiek ataušinti formoje ir išimti.',
        ])->categories()->attach(1);

        $recipes = Recipe::find(1);
        $recipes->categories()->attach(3);
    }
}
