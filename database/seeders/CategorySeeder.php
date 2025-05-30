<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    use App\Models\Category;

public function run()
{
    Category::insert([
        ['name' => 'Makanan'],
        ['name' => 'Minuman'],
        ['name' => 'Camilan'],
    ]);
}

}
