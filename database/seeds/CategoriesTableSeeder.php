<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Category::class, 2)->create()->each(function ($category) {
        	$category->articles()->createMany((factory(App\Article::class, 9)->make())->toArray());
    	});
    }
}
