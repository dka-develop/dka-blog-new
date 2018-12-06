<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Article::class, 4)->create()->each(function ($article) {
        	$article->categories()->create(factory(App\Models\ProductAttribute::class, 4)->make());
        	// $article->categories()->save(factory(App\Models\ProductAttribute::class)->make());
    	});
    }
}
