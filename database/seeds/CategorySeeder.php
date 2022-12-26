<?php

use App\Category;
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
        Category::create([
            'name' => 'Tutorial',
            'slug'=>'tutorial'
        ]);
        Category::create([
            'name' => 'Berita',
            'slug'=>'berita'
        ]);
    }
}
