<?php
/**
 * Created by PhpStorm.
 * User: Glebec
 * Date: 07.09.2015
 * Time: 0:19
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Picture;


class PicturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($posts_id = 1; $posts_id <= 10; $posts_id++) {
            if ($faker->boolean(50)) {
                $picture_count = $faker->numberBetween(1,4);
                for ($i = 0; $i < $picture_count; $i++) {
                    Picture::create([
                        'link' => $faker->imageUrl(640,480,'business'),
                        'link_small' => $faker->imageUrl(50,40,'business'),
                        'posts_id' => $posts_id
                    ]);
                }
            }
        }
    }
}