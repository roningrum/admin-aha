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
        $category =[
            [
                'name' => "Tutorial",
                'slug'=>"tutorial"
            ],
            [
                'name' => "Berita",
                'slug'=>"berita"
            ]
            ];
        foreach($category as $key => $value){
            Category::created($value);
        }
    }
}
