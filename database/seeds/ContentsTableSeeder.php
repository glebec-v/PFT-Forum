<?php
/**
 * Created by PhpStorm.
 * User: Glebec
 * Date: 06.09.2015
 * Time: 23:38
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Content;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i=1; $i<=16; $i++) {
            if ($faker->boolean(50)){
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
            }else{
                $code = null;
            }
            Content::create([
                'content' => $faker->realText($faker->numberBetween(40, 400)),
                'code' => $code,
                'posts_id' => $i,
            ]);
        }
    }
}