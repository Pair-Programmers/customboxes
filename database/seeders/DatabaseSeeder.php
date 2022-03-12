<?php

namespace Database\Seeders;

use App\Models\Industry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $no_of_records = 10;

        \App\Models\User::factory($no_of_records)->create();
        \App\Models\Admin::factory($no_of_records)->create();
        //\App\Models\Industry::factory($no_of_records)->create();
        $industry_names = ['CBD Boxes', 'Cosmetics Boxes', 'Gift & Festivities', 'Food & Beverage', 'Vape Cartridge',
         'Jewelry Boxes', 'Riged Boxes', 'Apparel', 'Sports'];
        foreach ($industry_names as $key => $value) {
            # code...
            Industry::create(['name'=>$value, 'slug'=>Str::slug($value), 'image'=>Str::slug($value).'.png', 'admin_id'=>1]);
        }
        \App\Models\Product::factory($no_of_records+20)->create();
        \App\Models\Order::factory($no_of_records)->create();
    }
}
