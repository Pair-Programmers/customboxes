<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Industry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
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
        Storage::makeDirectory('images/products');
        Storage::makeDirectory('images/users');
        Storage::makeDirectory('images/blogs');
        Storage::makeDirectory('images/blogs.thumbnail');
        Storage::makeDirectory('images/industries');
        Storage::makeDirectory('images/admins');

        $no_of_records = 10;
        $this->call(AdminSeeder::class);
        $this->call(BlogCategorySeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(IndustrySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ProductSeeder::class);
    }
}
