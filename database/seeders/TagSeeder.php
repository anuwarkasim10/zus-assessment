<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['Black Coffee', 'Expresso', 'Steamed', 'Milk', 'Foam', 'Microfoam', 'Coffee', 'Honey', 'Chocolate'];

        foreach($tags as $t){
            Tag::create(['name' => $t]);
        }

    }
}
