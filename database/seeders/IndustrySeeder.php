<?php

namespace Database\Seeders;

use App\Models\Industry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\Industry::factory(12)->create();
        $industry_names = ['CBD Boxes', 'Cosmetics Boxes', 'Gift & Festivities', 'Food & Beverage', 'Vape Cartridge',
         'Jewelry Boxes', 'Riged Boxes', 'Apparel', 'Sports', ' Custom Printed Boxes'];
        foreach ($industry_names as $key => $value) {

            try {
                Industry::create(['name'=>$value, 'slug'=>Str::slug($value),
                    'summary'=>'ahkgd jhasdjhasaas asdas sadasdsad sdjkag sdhgaskjgd jsad asvkjda gsgdvhasvdasgvdagfsda
                    ksdhjdkasdvas kjasgdasdgkjasgd khas dvaskd', 'image'=>Str::slug($value).'.png',
                    'admin_id'=>1]);
            } catch (\Throwable $th) {
                //throw $th;
            }

        }
    }
}
