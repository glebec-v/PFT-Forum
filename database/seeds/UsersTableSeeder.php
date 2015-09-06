<?php
/**
 * Created by PhpStorm.
 * User: glebec
 * Date: 06.09.15
 * Time: 15:07
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        User::create([
            'name' => 'glebec',
            'email' => 'gvorotilov@gmail.com',
            'skype' => 'glebec-v',
            'city' => 'Moscow',
            'password' => Hash::make('secretpassword'),
            'remember_token' => str_random(10),
        ]);
        User::create([
            'name' => 'Jack Shepard',
            'email' => $faker->email,
            'skype' => '',
            'city' => 'Sydney',
            'password' => Hash::make('jackspass'),
            'remember_token' => str_random(10),
        ]);
        User::create([
            'name' => 'Kate Austin',
            'email' => 'kaustin@lostfilm.com',
            'skype' => '',
            'city' => 'Los Angeles',
            'password' => Hash::make('lovelydad'),
            'remember_token' => str_random(10),
        ]);
        User::create([
            'name' => 'John Locke',
            'email' => 'strongman@lostfilm.com',
            'skype' => 'locke',
            'city' => 'Los Angeles',
            'password' => Hash::make('strong'),
            'remember_token' => str_random(10),
        ]);
        User::create([
            'name' => 'Алексей Голда',
            'email' => $faker->email,
            'skype' => 'snelaves',
            'city' => 'Калининград',
            'password' => Hash::make('javascriptmusthave'),
            'remember_token' => str_random(10),
        ]);

    }
}