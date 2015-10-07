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

        $code = 'void *functionCount1()
{
   for(;;)
   {
      pthread_mutex_lock( &condition_mutex );
      while( count >= COUNT_HALT1 && count <= COUNT_HALT2 )
      {
         pthread_cond_wait( &condition_cond, &condition_mutex );
      }
      pthread_mutex_unlock( &condition_mutex );

      pthread_mutex_lock( &count_mutex );
      count++;
      printf("Counter value functionCount1: %d\n",count);
      pthread_mutex_unlock( &count_mutex );

      if(count >= COUNT_DONE) return(NULL);
    }
}';

        Post::create([
            'parent_id' => 0,
            'child' => true,
            'title' => $faker->sentence(),
            'body' => $faker->realText($faker->numberBetween(40, 400)),
            'code' => $code,
            'category_id' => $category,
            'user_id' => $faker->numberBetween(1,5),
        ]);//1
        Post::create([
            'parent_id' => 1,
            'child' => false,
            'title' => $faker->sentence(),
            'body' => $faker->realText($faker->numberBetween(40, 400)),
            'category_id' => $category,
            'user_id' => $faker->numberBetween(1,5),
        ]);//2
        Post::create([
            'parent_id' => 1,
            'child' => true,
            'title' => $faker->sentence(),
            'body' => $faker->realText($faker->numberBetween(40, 400)),
            'category_id' => $category,
            'user_id' => $faker->numberBetween(1,5),
        ]);//3
        Post::create([
            'parent_id' => 1,
            'child' => false,
            'title' => $faker->sentence(),
            'body' => $faker->realText($faker->numberBetween(40, 400)),
            'category_id' => $category,
            'user_id' => $faker->numberBetween(1,5),
        ]);//4
        Post::create([
            'parent_id' => 3,
            'child' => false,
            'title' => $faker->sentence(),
            'body' => $faker->realText($faker->numberBetween(40, 400)),
            'category_id' => $category,
            'user_id' => $faker->numberBetween(1,5),
        ]);//5
        Post::create([
            'parent_id' => 1,
            'child' => false,
            'title' => $faker->sentence(),
            'body' => $faker->realText($faker->numberBetween(40, 400)),
            'code' => $code,
            'category_id' => $category,
            'user_id' => $faker->numberBetween(1,5),
        ]);//6
        Post::create([
            'parent_id' => 3,
            'child' => false,
            'title' => $faker->sentence(),
            'body' => $faker->realText($faker->numberBetween(40, 400)),
            'category_id' => $category,
            'user_id' => $faker->numberBetween(1,5),
        ]);//7
        Post::create([
            'parent_id' => 3,
            'child' => false,
            'title' => $faker->sentence(),
            'body' => $faker->realText($faker->numberBetween(40, 400)),
            'code' => $code,
            'category_id' => $category,
            'user_id' => $faker->numberBetween(1,5),
        ]);//8


        $category2 = $faker->numberBetween(5,7);
        Post::create([
            'parent_id' => 0,
            'child' => true,
            'title' => $faker->sentence(),
            'body' => $faker->realText($faker->numberBetween(40, 400)),
            'category_id' => $category2,
            'user_id' => $faker->numberBetween(1,5),
        ]);//9
        Post::create([
            'parent_id' => 9,
            'child' => false,
            'title' => $faker->sentence(),
            'body' => $faker->realText($faker->numberBetween(40, 400)),
            'code' => $code,
            'category_id' => $category2,
            'user_id' => $faker->numberBetween(1,5),
        ]);//10
        Post::create([
            'parent_id' => 9,
            'child' => false,
            'title' => $faker->sentence(),
            'body' => $faker->realText($faker->numberBetween(40, 400)),
            'category_id' => $category2,
            'user_id' => $faker->numberBetween(1,5),
        ]);//11
        Post::create([
            'parent_id' => 9,
            'child' => false,
            'title' => $faker->sentence(),
            'body' => $faker->realText($faker->numberBetween(40, 400)),
            'category_id' => $category2,
            'user_id' => $faker->numberBetween(1,5),
        ]);//12
        Post::create([
            'parent_id' => 0,
            'child' => true,
            'title' => $faker->sentence(),
            'body' => $faker->realText($faker->numberBetween(40, 400)),
            'code' => $code,
            'category_id' => $category2,
            'user_id' => $faker->numberBetween(1,5),
        ]);//13
        Post::create([
            'parent_id' => 13,
            'child' => false,
            'title' => $faker->sentence(),
            'body' => $faker->realText($faker->numberBetween(40, 400)),
            'category_id' => $category2,
            'user_id' => $faker->numberBetween(1,5),
        ]);//14
        Post::create([
            'parent_id' => 13,
            'child' => false,
            'title' => $faker->sentence(),
            'body' => $faker->realText($faker->numberBetween(40, 400)),
            'category_id' => $category2,
            'user_id' => $faker->numberBetween(1,5),
        ]);//15
        Post::create([
            'parent_id' => 13,
            'child' => false,
            'title' => $faker->sentence(),
            'body' => $faker->realText($faker->numberBetween(40, 400)),
            'code' => $code,
            'category_id' => $category2,
            'user_id' => $faker->numberBetween(1,5),
        ]);//16
    }
}