<?php
/**
 * Created by PhpStorm.
 * User: glebec
 * Date: 06.09.15
 * Time: 18:49
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $category = $faker->numberBetween(1,4);

        Post::create([
            'parent_id' => null,
            'child' => true,
            'title' => $faker->sentence(),
            'categories_id' => $category,
            'users_id' => $faker->numberBetween(1,5),
        ]);//1
        Post::create([
            'parent_id' => 1,
            'child' => false,
            'title' => $faker->sentence(),
            'categories_id' => $category,
            'users_id' => $faker->numberBetween(1,5),
        ]);//2
        Post::create([
            'parent_id' => 2,
            'child' => true,
            'title' => $faker->sentence(),
            'categories_id' => $category,
            'users_id' => $faker->numberBetween(1,5),
        ]);//3
        Post::create([
            'parent_id' => null,
            'child' => true,
            'title' => $faker->sentence(),
            'categories_id' => $category,
            'users_id' => $faker->numberBetween(1,5),
        ]);//4
        Post::create([
            'parent_id' => 3,
            'child' => false,
            'title' => $faker->sentence(),
            'categories_id' => $category,
            'users_id' => $faker->numberBetween(1,5),
        ]);//5
        Post::create([
            'parent_id' => 4,
            'child' => false,
            'title' => $faker->sentence(),
            'categories_id' => $category,
            'users_id' => $faker->numberBetween(1,5),
        ]);//6

        $category2 = $faker->numberBetween(5,7);
        Post::create([
            'parent_id' => null,
            'child' => true,
            'title' => $faker->sentence(),
            'categories_id' => $category2,
            'users_id' => $faker->numberBetween(1,5),
        ]);//7
        Post::create([
            'parent_id' => 7,
            'child' => true,
            'title' => $faker->sentence(),
            'categories_id' => $category2,
            'users_id' => $faker->numberBetween(1,5),
        ]);//8
        Post::create([
            'parent_id' => 8,
            'child' => true,
            'title' => $faker->sentence(),
            'categories_id' => $category2,
            'users_id' => $faker->numberBetween(1,5),
        ]);//9
        Post::create([
            'parent_id' => 9,
            'child' => false,
            'title' => $faker->sentence(),
            'categories_id' => $category2,
            'users_id' => $faker->numberBetween(1,5),
        ]);//10
    }
}