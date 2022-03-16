<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       
        for($i = 0; $i < 10; $i++){
            $slider = new Slider();
            $slider->title = "Title ".$i;
            $slider->short_description = "Short Description ".$i;
            $slider->status = $i%2;
            $slider->slider = 'image '.$i;
            $slider->save();
        } 
    }
}
