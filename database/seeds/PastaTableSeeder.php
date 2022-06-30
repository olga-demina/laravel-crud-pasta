<?php

use App\Pasta;
use Illuminate\Database\Seeder;

class PastaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pasta_list = config('pasta');
        foreach($pasta_list as $pasta) {
            $new_pasta = new Pasta();
            $new_pasta->title = $pasta['titolo'];
            $new_pasta->type = $pasta['tipo'];
            $new_pasta->image_src = $pasta['src'];
            $new_pasta->cook_time = $pasta['cottura'];
            $new_pasta->weight = $pasta['peso'];
            $new_pasta->description = $pasta['descrizione'];
            $new_pasta->save();
        }
    }
}
