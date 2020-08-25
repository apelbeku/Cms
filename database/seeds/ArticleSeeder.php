<?php

use Illuminate\Database\Seeder;
use App\Model\Article;
use Faker\Factory;
use App\Model\User;
use App\Model\Category;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate();
        $faker = Factory::create('id_ID');

        for ($i=0; $i < 100; $i++) {
            $user_count = User::count();
            $category_cont = Category::count();
            $title = $faker->realText($maxNbChars = 200, $indexSize = 2);

            Article::create([
                'user_id' => rand(1, $user_count),
                'category_id' => rand(1, $category_cont),
                'title' => $title,
                'content' => $faker->text($maxNbChars = 200),
                'image' => '/image/sample1.jpeg, sample2,jpeg',
                'slug' => Str::of($title)->slug('-'),
            ]);	
        }
    }
}
